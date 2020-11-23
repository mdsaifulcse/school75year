<?php

namespace App\Http\Controllers;

use App\Model\AcademicYear;
use App\Model\Classes;
use App\Model\Group;
use App\Model\GuardianTypes;
use App\Model\Invoice;
use App\Model\InvoiceCategory;
use App\Model\InvoiceDetails;
use App\Model\InvoiceHeadDetails;
use App\Model\PaymentHead;
use App\Model\PrimaryInfo;
use App\Model\Section;
use App\Model\Shift;
use App\Model\Student;
use App\Model\StudyClass;
use App\Providers\MyHelperProvider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Yajra\Datatables\Datatables;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $data = '';
        if(isset($request->id) && $request->id!=''){
            $data = Classes::findOrFail($request->id);
            return response()->json($data,200);
        }


        $invoiceData = '';
        if(isset($request->invoice_category_id) && $request->invoice_category_id!=''){
            $invoiceData = InvoiceCategory::findOrFail($request->invoice_category_id);

            return response()->json($invoiceData,200);
        }


        $invoiceCategory=InvoiceCategory::orderBy('id','asc')->pluck('name','id');
//        $invoiceCategory=Invoice::leftJoin('invoice_categories','invoices.invoice_category_id','invoice_categories.id')
//            ->where('invoice_categories.status',1)->where('invoices.payment_status','!=',1)
//            ->orderBy('invoice_categories.id','asc')->pluck('invoice_categories.name','invoice_categories.id');

        $classes=Classes::orderBy('classes.id','asc')->where('classes.status',1)->pluck('classes.name','classes.id');
//        $classes=Invoice::leftJoin('study_classes','invoices.study_class_id','study_classes.id')
//            ->leftJoin('classes','classes.id','study_classes.class_id')->where('invoices.payment_status','!=',1)
//            ->orderBy('classes.id','asc')->where('classes.status',1)->pluck('classes.name','classes.id');

        $groups=Invoice::leftJoin('study_classes','invoices.study_class_id','study_classes.id')
            ->leftJoin('groups','groups.id','study_classes.group_id')->where('invoices.payment_status','!=',1)
            ->orderBy('groups.id','asc')->where('groups.status',1)->pluck('groups.name','groups.id');

        $shift=Invoice::leftJoin('study_classes','invoices.study_class_id','study_classes.id')
            ->leftJoin('shift','shift.id','study_classes.shift_id')->where('invoices.payment_status','!=',1)
            ->orderBy('shift.id','asc')->where('shift.status',1)->pluck('shift.name','shift.id');

        $academic_year = Invoice::leftJoin('academic_years','invoices.academic_year_id','academic_years.id')->where('invoices.payment_status','!=',1)
            ->orderBy('academic_years.id','asc')->pluck('academic_years.academic_year','academic_years.id');

        return view('backend.invoice.invoice-print',compact('invoiceCategory','classes', 'groups', 'shift', 'academic_year'));
    }

    public function invoiceView(Request $request){
        $invoiceCategory=InvoiceCategory::orderBy('id','asc')->where('status',1)->pluck('name','id');
        $classes=Classes::orderBy('id','asc')->where('status',1)->pluck('name','id');
        $groups=Group::orderBy('id','asc')->pluck('name','id');
        $shift=Shift::orderBy('id','asc')->pluck('name','id');
        $academic_year = AcademicYear::orderBy('id','asc')->pluck('academic_year','id');
        return view('backend.invoice.invoice-print',compact('invoiceCategory','classes', 'groups', 'shift', 'view', 'academic_year'));
    }

    public function showInvoiceBySection(Request $request){

        $section_id = $request->section_id;
        $invoice_category_id = $request->invoice_category_id;
        $payment_month = $request->payment_month;
        $academic_year = $request->academic_year_id;

        $invoiceStudents=Invoice::leftJoin('study_classes','study_classes.id','invoices.study_class_id')
            //->leftJoin('invoice_details','invoice_details.invoice_id','invoices.id')
            ->leftJoin('classes', 'classes.id','study_classes.class_id')
            ->leftJoin('shift', 'shift.id','study_classes.shift_id')
            ->leftJoin('groups', 'groups.id','study_classes.group_id')
            ->leftJoin('users', 'study_classes.user_id','users.id')
            ->select('classes.name as class_name','shift.name as shift_name','groups.name as group_name','users.name as students_name','users.mobile_no','users.id as student_id','study_classes.roll','invoices.total_amount','invoices.discount_amount','invoices.total_payable','invoices.payment_status','invoices.id as invoice_id')
            ->where(['invoices.invoice_category_id'=>$invoice_category_id,'invoices.academic_year_id'=>$academic_year,'invoices.payment_status'=>0]);


        if (isset($request->group_id) && $request->group_id!=''){
            $invoiceStudents = $invoiceStudents->where('study_classes.group_id',$request->group_id);
        }
        if (isset($request->shift_id) && $request->shift_id!=''){
            $invoiceStudents = $invoiceStudents->where('study_classes.shift_id',$request->shift_id);
        }
            //->where('invoice_details.payment_month',$payment_month)
            //->get();
        $invoiceCategory='';
        if ($request->invoice_category_id!=''){
            $invoiceCategory=InvoiceCategory::where('id',$request->invoice_category_id)->first();
        }

        if(($invoiceCategory!='' && $invoiceCategory->collection_type==2) && isset($request->section_id) && $request->section_id!='') { // Monthly invoice ---
            $invoiceStudents = $invoiceStudents->where('study_classes.section_id',$request->section_id);
        }
        if (($invoiceCategory!='' && $invoiceCategory->collection_type==2) && isset($request->payment_month)){
        $paymentMonth = array_map('intval', explode(',',$request->payment_month));

        $invoiceStudents = $invoiceStudents->leftJoin('invoice_details','invoice_details.invoice_id','invoices.id')
            ->whereIn('invoice_details.payment_month',$paymentMonth)->groupBy('invoice_details.invoice_id');
        }



        return Datatables::of($invoiceStudents)
            ->addIndexColumn()
            ->addColumn('DT_RowIndex','')
            ->addColumn('payment_status', '<span style="text-align: center">@if($payment_status==1)
                                <a class="btn btn-success">Paid</a>    
                                @else
                                <a class="btn btn-danger">Unpaid</a>
                                @endif</span>')
            ->addColumn('View','
            <a  href="javascript:void(0);" onclick="loadViewModal({{$invoice_id}})" data-toggle="modal" class="btn btn-info btn-sm" ><i class="fa fa-eye"></i></a>
            <!--<a  href="javascript:void(0);" onclick="loadEditModal({{$invoice_id}})" data-toggle="modal" class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></a>-->
            <a  href="javascript:void(0);" onclick="loadDiscountModal({{$invoice_id}})"  data-toggle="modal" class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i></a>
            <a  href="javascript:void(0);" class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></a>
            ')
            ->rawColumns(['payment_status','View'])

            ->toJson();
    }

    public function singleInvoiceView(Request $request){
        $invoices = Invoice::leftJoin('study_classes','study_classes.id','invoices.study_class_id')
            ->leftJoin('invoice_details','invoice_details.invoice_id','invoices.id')
            ->leftJoin('invoice_categories','invoices.invoice_category_id','invoice_categories.id')
            ->leftJoin('classes', 'classes.id','study_classes.class_id')
            ->leftJoin('guardian_types', 'guardian_types.id','invoice_details.guardian_type_id')
            ->leftJoin('shift', 'shift.id','study_classes.shift_id')
            ->leftJoin('groups', 'groups.id','study_classes.group_id')
            ->leftJoin('users', 'study_classes.user_id','users.id')
            ->select('invoice_categories.name as invoiceName','guardian_types.name as guardian_type','invoice_details.total_amount as totalAmount','classes.name as class_name','shift.name as shift_name','groups.name as group_name','users.name as students_name','users.mobile_no','users.id as user_id','study_classes.roll','invoices.total_amount','invoices.*')
            ->where('invoices.id', $request->invoice_id)->first();

        $invoiceDetails=[];
        $totalPayables=[];

        $invoiceDetail=InvoiceDetails::where(['invoice_id'=>$invoices->id])->where('payment_month','!=','null');

//            if (($invoiceCategory!='' && $invoiceCategory->collection_type==1) && isset($request->payment_month)){
//                $paymentMonth = array_map('intval', explode(',',$request->payment_month));
//
//                $invoiceDetail = $invoiceDetail->whereIn('invoice_details.payment_month',$paymentMonth);
//            }
        $invoiceDetail = $invoiceDetail->select('payment_month','total_payable')->get()->toArray();

        $invoiceDetails+=[$invoices->id=>$invoiceDetail];


        //return $invoiceDetails;

        $formMonth=[];
        $toMonth=[];
        $totalMonth=[];
        foreach ($invoiceDetails as $key=>$items) {

            $sum = 0;
            foreach ($items as $item){
                $sum+=$item['total_payable'];
            }

            $totalPayables+=[$key=>$sum];


            switch (current($invoiceDetails[$key])['payment_month']) {
                case 1:
                    $formMonth+=[$key=>'Jan'];
                    break;
                case 2:
                    $formMonth+=[$key=>'Feb'];
                    break;
                case 3:
                    $formMonth+=[$key=>'Mar'];
                    break;

                case 4:
                    $formMonth+=[$key=>'Apr'];
                    break;

                case 5:
                    $formMonth+=[$key=>'May'];
                    break;

                case 6:
                    $formMonth+=[$key=>'Jun'];
                    break;

                case 7:
                    $formMonth+=[$key=>'July'];
                    break;

                case 8:
                    $formMonth+=[$key=>'Aug'];
                    break;

                case 9:
                    $formMonth+=[$key=>'Sep'];
                    break;
                case 10:
                    $formMonth+=[$key=>'Oct'];
                    break;
                case 11:
                    $formMonth+=[$key=>'Nov'];
                    break;
                case 12:
                    $formMonth+=[$key=>'Dec'];
                    break;
                default:
                    $formMonth+=[$key=>'No Month'];
            }


            switch (end($invoiceDetails[$key])['payment_month']) {
                case 1:
                    $toMonth+=[$key=>'Jan'];
                    break;
                case 2:
                    $toMonth+=[$key=>'Feb'];
                    break;
                case 3:
                    $toMonth+=[$key=>'Mar'];
                    break;

                case 4:
                    $toMonth+=[$key=>'Apr'];
                    break;

                case 5:
                    $toMonth+=[$key=>'May'];
                    break;

                case 6:
                    $toMonth+=[$key=>'Jun'];
                    break;

                case 7:
                    $toMonth+=[$key=>'July'];
                    break;

                case 8:
                    $toMonth+=[$key=>'Aug'];
                    break;

                case 9:
                    $toMonth+=[$key=>'Sep'];
                    break;
                case 10:
                    $toMonth+=[$key=>'Oct'];
                    break;
                case 11:
                    $toMonth+=[$key=>'Nov'];
                    break;
                case 12:
                    $toMonth+=[$key=>'Dec'];
                    break;
                default:
                    $toMonth+=[$key=>'No Month'];
            }

        }

        $invoicesHeadDetails=InvoiceHeadDetails::leftJoin('invoices','invoice_head_details.invoice_id','invoices.id')
            ->leftJoin('invoice_details','invoice_head_details.invoice_detail_id','invoice_details.id')
            ->leftJoin('payment_heads','invoice_head_details.head_id','payment_heads.id')
            ->leftJoin('invoice_categories','payment_heads.invoice_category_id','invoice_categories.id')
            ->select('invoice_details.total_amount','invoice_categories.collection_type','invoice_head_details.fee_head_amount','payment_heads.head_name')
            ->where('invoice_head_details.invoice_id',$invoices->id)->groupBy('invoice_head_details.head_id')->orderBy('invoice_head_details.id','asc')->get();
        $info=PrimaryInfo::first();

        return view('backend.invoice.loadSingleInvoice', compact('invoices', 'invoiceDetails','invoicesHeadDetails','formMonth','toMonth','totalPayables','info'));
    }

    public function singleInvoiceDetails(Request $request){

        $invoices = Invoice::leftJoin('study_classes','study_classes.id','invoices.study_class_id')
            ->leftJoin('invoice_details','invoice_details.invoice_id','invoices.id')
            ->leftJoin('invoice_categories','invoices.invoice_category_id','invoice_categories.id')
            ->leftJoin('classes', 'classes.id','study_classes.class_id')
            ->leftJoin('guardian_types', 'guardian_types.id','invoice_details.guardian_type_id')
            ->leftJoin('shift', 'shift.id','study_classes.shift_id')
            ->leftJoin('groups', 'groups.id','study_classes.group_id')
            ->leftJoin('users', 'study_classes.user_id','users.id')
            ->select('invoice_categories.name as invoiceName','guardian_types.name as guardian_type','invoice_details.total_amount as totalAmount','classes.name as class_name','shift.name as shift_name','groups.name as group_name','users.name as students_name','users.mobile_no','users.id as user_id','study_classes.roll','invoices.total_amount','invoices.*')
        ->where('invoices.id', $request->invoice_id)->first();

        $invoiceDetails=[];
        $totalPayables=[];

            $invoiceDetail=InvoiceDetails::where(['invoice_id'=>$invoices->id])->where('payment_month','!=','null');

//            if (($invoiceCategory!='' && $invoiceCategory->collection_type==1) && isset($request->payment_month)){
//                $paymentMonth = array_map('intval', explode(',',$request->payment_month));
//
//                $invoiceDetail = $invoiceDetail->whereIn('invoice_details.payment_month',$paymentMonth);
//            }
            $invoiceDetail = $invoiceDetail->select('payment_month','total_payable')->get()->toArray();

            $invoiceDetails+=[$invoices->id=>$invoiceDetail];


        //return $invoiceDetails;

        $formMonth=[];
        $toMonth=[];
        $totalMonth=[];
        foreach ($invoiceDetails as $key=>$items) {

            $sum = 0;
            foreach ($items as $item){
                $sum+=$item['total_payable'];
            }

            $totalPayables+=[$key=>$sum];


            switch (current($invoiceDetails[$key])['payment_month']) {
                case 1:
                    $formMonth+=[$key=>'Jan'];
                    break;
                case 2:
                    $formMonth+=[$key=>'Feb'];
                    break;
                case 3:
                    $formMonth+=[$key=>'Mar'];
                    break;

                case 4:
                    $formMonth+=[$key=>'Apr'];
                    break;

                case 5:
                    $formMonth+=[$key=>'May'];
                    break;

                case 6:
                    $formMonth+=[$key=>'Jun'];
                    break;

                case 7:
                    $formMonth+=[$key=>'July'];
                    break;

                case 8:
                    $formMonth+=[$key=>'Aug'];
                    break;

                case 9:
                    $formMonth+=[$key=>'Sep'];
                    break;
                case 10:
                    $formMonth+=[$key=>'Oct'];
                    break;
                case 11:
                    $formMonth+=[$key=>'Nov'];
                    break;
                case 12:
                    $formMonth+=[$key=>'Dec'];
                    break;
                default:
                    $formMonth+=[$key=>'No Month'];
            }


            switch (end($invoiceDetails[$key])['payment_month']) {
                case 1:
                    $toMonth+=[$key=>'Jan'];
                    break;
                case 2:
                    $toMonth+=[$key=>'Feb'];
                    break;
                case 3:
                    $toMonth+=[$key=>'Mar'];
                    break;

                case 4:
                    $toMonth+=[$key=>'Apr'];
                    break;

                case 5:
                    $toMonth+=[$key=>'May'];
                    break;

                case 6:
                    $toMonth+=[$key=>'Jun'];
                    break;

                case 7:
                    $toMonth+=[$key=>'July'];
                    break;

                case 8:
                    $toMonth+=[$key=>'Aug'];
                    break;

                case 9:
                    $toMonth+=[$key=>'Sep'];
                    break;
                case 10:
                    $toMonth+=[$key=>'Oct'];
                    break;
                case 11:
                    $toMonth+=[$key=>'Nov'];
                    break;
                case 12:
                    $toMonth+=[$key=>'Dec'];
                    break;
                default:
                    $toMonth+=[$key=>'No Month'];
            }

        }

        $invoicesHeadDetails=InvoiceHeadDetails::leftJoin('invoices','invoice_head_details.invoice_id','invoices.id')
            ->leftJoin('invoice_details','invoice_head_details.invoice_detail_id','invoice_details.id')
            ->leftJoin('payment_heads','invoice_head_details.head_id','payment_heads.id')
            ->leftJoin('invoice_categories','payment_heads.invoice_category_id','invoice_categories.id')
            ->select('invoice_details.total_amount','invoice_categories.collection_type','invoice_head_details.fee_head_amount','payment_heads.head_name')
            ->where('invoice_head_details.invoice_id',$invoices->id)->groupBy('invoice_head_details.head_id')->orderBy('invoice_head_details.id','asc')->get();

        $info=PrimaryInfo::first();

        return view('backend.invoice.loadSingleInvoiceDetails', compact('invoices', 'invoiceDetails','invoicesHeadDetails','formMonth','toMonth','totalPayables','info'));
    }

    public function allInvoiceView(Request $request){

        $section_id = $request->section_id;
        $invoice_category_id = $request->invoice_category_id;
        $payment_month = $request->payment_month;
        $academic_year = $request->academic_year_id;

        $invoiceStudents=Invoice::leftJoin('study_classes','study_classes.id','invoices.study_class_id')
            ->leftJoin('invoice_details','invoice_details.invoice_id','invoices.id')
            ->leftJoin('invoice_categories','invoices.invoice_category_id','invoice_categories.id')
            ->leftJoin('classes', 'classes.id','study_classes.class_id')
            ->leftJoin('guardian_types', 'guardian_types.id','invoice_details.guardian_type_id')
            ->leftJoin('shift', 'shift.id','study_classes.shift_id')
            ->leftJoin('groups', 'groups.id','study_classes.group_id')
            ->leftJoin('users', 'study_classes.user_id','users.id')
            ->select('invoice_categories.name as invoiceName','guardian_types.name as guardian_type','invoice_details.total_amount as totalAmount','classes.name as class_name','shift.name as shift_name','groups.name as group_name','users.name as students_name','users.mobile_no','users.id as user_id','study_classes.roll','invoices.total_amount','invoices.*')
            ->where(['invoices.invoice_category_id'=>$invoice_category_id,'invoices.academic_year_id'=>$academic_year,'invoices.payment_status'=>0]);


        if (isset($request->group_id) && $request->group_id!=''){
            $invoiceStudents = $invoiceStudents->where('study_classes.group_id',$request->group_id);
        }
        if (isset($request->shift_id) && $request->shift_id!=''){
            $invoiceStudents = $invoiceStudents->where('study_classes.shift_id',$request->shift_id);
        }

        $invoiceCategory='';
        if ($request->invoice_category_id!=''){
            $invoiceCategory=InvoiceCategory::where('id',$request->invoice_category_id)->first();
        }

        if(($invoiceCategory!='' && $invoiceCategory->collection_type==2) && isset($request->section_id) && $request->section_id!='') { // Monthly invoice ---
            $invoiceStudents = $invoiceStudents->where('study_classes.section_id',$request->section_id);
        }
        if (($invoiceCategory!='' && $invoiceCategory->collection_type==1) && isset($request->payment_month)){
            $paymentMonth = array_map('intval', explode(',',$request->payment_month));

            $invoiceStudents = $invoiceStudents->whereIn('invoice_details.payment_month',$paymentMonth);
        }

        $invoiceStudents=$invoiceStudents->groupBy('invoice_details.invoice_id')->get();//->toArray();


        $invoiceDetails=[];
        $totalPayables=[];
        foreach ($invoiceStudents as $invoiceStudent){

            $invoiceDetail=InvoiceDetails::where(['invoice_id'=>$invoiceStudent->id])->where('payment_month','!=','null');

//            if (($invoiceCategory!='' && $invoiceCategory->collection_type==1) && isset($request->payment_month)){
//                $paymentMonth = array_map('intval', explode(',',$request->payment_month));
//
//                $invoiceDetail = $invoiceDetail->whereIn('invoice_details.payment_month',$paymentMonth);
//            }
            $invoiceDetail = $invoiceDetail->select('payment_month','total_payable')->get()->toArray();

            $invoiceDetails+=[$invoiceStudent->id=>$invoiceDetail];
        }

        //return $invoiceDetails;

        $formMonth=[];
        $toMonth=[];
        $totalMonth=[];
        foreach ($invoiceDetails as $key=>$items) {

            $sum = 0;
            foreach ($items as $item){
                $sum+=$item['total_payable'];
            }

            $totalPayables+=[$key=>$sum];


            switch (current($invoiceDetails[$key])['payment_month']) {
                case 1:
                    $formMonth+=[$key=>'Jan'];
                    break;
                case 2:
                    $formMonth+=[$key=>'Feb'];
                    break;
                case 3:
                    $formMonth+=[$key=>'Mar'];
                    break;

                case 4:
                    $formMonth+=[$key=>'Apr'];
                    break;

                case 5:
                    $formMonth+=[$key=>'May'];
                    break;

                case 6:
                    $formMonth+=[$key=>'Jun'];
                    break;

                case 7:
                    $formMonth+=[$key=>'July'];
                    break;

                case 8:
                    $formMonth+=[$key=>'Aug'];
                    break;

                case 9:
                    $formMonth+=[$key=>'Sep'];
                    break;
                case 10:
                    $formMonth+=[$key=>'Oct'];
                    break;
                case 11:
                    $formMonth+=[$key=>'Nov'];
                    break;
                case 12:
                    $formMonth+=[$key=>'Dec'];
                    break;
                default:
                    $formMonth+=[$key=>'No Month'];
            }


            switch (end($invoiceDetails[$key])['payment_month']) {
                case 1:
                    $toMonth+=[$key=>'Jan'];
                    break;
                case 2:
                    $toMonth+=[$key=>'Feb'];
                    break;
                case 3:
                    $toMonth+=[$key=>'Mar'];
                    break;

                case 4:
                    $toMonth+=[$key=>'Apr'];
                    break;

                case 5:
                    $toMonth+=[$key=>'May'];
                    break;

                case 6:
                    $toMonth+=[$key=>'Jun'];
                    break;

                case 7:
                    $toMonth+=[$key=>'July'];
                    break;

                case 8:
                    $toMonth+=[$key=>'Aug'];
                    break;

                case 9:
                    $toMonth+=[$key=>'Sep'];
                    break;
                case 10:
                    $toMonth+=[$key=>'Oct'];
                    break;
                case 11:
                    $toMonth+=[$key=>'Nov'];
                    break;
                case 12:
                    $toMonth+=[$key=>'Dec'];
                    break;
                default:
                    $toMonth+=[$key=>'No Month'];
            }

        }

        //return $invoiceDetails;
        //return end($invoiceDetails[86])['payment_month'];

        $invoiceHeadDetails=[];
        foreach ($invoiceStudents as $invoiceStudent){

            $amountDetails=InvoiceHeadDetails::leftJoin('invoices','invoice_head_details.invoice_id','invoices.id')
                ->leftJoin('invoice_details','invoice_head_details.invoice_detail_id','invoice_details.id')
                ->leftJoin('payment_heads','invoice_head_details.head_id','payment_heads.id')
                ->leftJoin('invoice_categories','payment_heads.invoice_category_id','invoice_categories.id')
                ->select('invoice_details.total_amount','invoice_categories.collection_type','invoice_head_details.fee_head_amount','payment_heads.head_name')->where('invoice_head_details.invoice_id',$invoiceStudent->id);

            $amountDetails = $amountDetails
                ->groupBy('invoice_head_details.head_id')
                ->orderBy('invoice_head_details.id','asc')->get();


            $invoiceHeadDetails+=[$invoiceStudent->id=>$amountDetails];
        }

        //return $invoiceHeadDetails;

        $info=PrimaryInfo::first();

        return view('backend.invoice.print-view', compact('invoiceStudents','invoiceHeadDetails','invoiceDetails','totalPayables','toMonth','formMonth','info'));


//        $students = StudyClass::leftJoin('invoices','study_classes.id','invoices.study_class_id')
//            ->leftJoin('users', 'study_classes.user_id','users.id')
//            ->leftJoin('classes', 'classes.id', 'study_classes.class_id')
//            ->leftJoin('groups', 'groups.id', 'study_classes.group_id')
//            ->leftJoin('sections', 'sections.id', 'study_classes.section_id')
//            ->leftJoin('guardian_types', 'guardian_types.id', 'study_classes.guardian_type_id')
//            ->select('study_classes.*','users.name','classes.name as class_name', 'groups.name as group_name', 'guardian_types.name as guardian_type', 'sections.section_name as section_name','invoices.id as invoiceId','invoices.total_amount')
//            ->where('study_classes.section_id', $request->section_id)
//            ->get();
//        return view('backend.invoice.print-view', compact('students'));
    }

    public function singleInvoiceDiscount(Request $request){
        $invoices = Invoice::where('id', $request->invoice_id)->first();

        return view('backend.invoice.DiscountSingleInvoice', compact('invoices'));
    }


    public function singleInvoiceEdit(Request $request){

        $invoices = Invoice::where('id', $request->invoice_id)->first();
        $invoices_details = [];
        return view('backend.invoice.EditSingleInvoice', compact('invoices', 'invoices_details'));
    }


    public function invoiceUpdate(Request $request){

        DB::beginTransaction();
        try{
            MyHelperProvider::photoUpload($request->file('image'),'images/ProofOfDiscount/',120,100, $request->invoice_id);
            $data2['total_payable'] = $request->total_amount;
            $data2['discount_amount'] = $request->discount_amount;
            Invoice::find($request->invoice_id)->update($data2);

            DB::commit();
            $bug=0;

        } catch (\Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect('invoice-print')->with('success','Data Updated Successfully');
        }elseif($bug==1062){
            return redirect()->back()->with('error','Some Error Happened');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }

    public function invoiceEditSingle(Request $request){
        DB::beginTransaction();
        try{
            $invoice_details = $request->fee_head_amount;
            foreach ($invoice_details as $key=>$value){
                $data1['fee_head_amount']= $value;
                InvoiceHeadDetails::where('invoice_id', $request->invoice_id)
                    ->where('head_id', $key)
                    ->update($data1);
            }
            $data2['total_amount'] = $request->total_amount_2;
            Invoice::find($request->invoice_id)->update($data2);

            DB::commit();
            $bug=0;

        } catch (\Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect('invoice-print')->with('success','Data Updated Successfully');
        }elseif($bug==1062){
            return redirect()->back()->with('error','Some Error Happened');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }

    public function sectionLoad(Request $request){
        if ($request->group_id == ""){
            $group_id = 4;
        }else{
            $group_id = $request->group_id;
        }
        $sections = Section::orderBy('id','asc')
            ->where('class_id',$request->class_id)
            ->where('group_id',$group_id)
            ->where('shift_id',$request->shift_id)
            ->where('status',1)
            ->pluck('section_name','id');
        return response()->json($sections,200);
    }

    public function excelVerify()
    {
        return view('backend.invoice.excel-verify');
    }


    public function invoiceVerify(Request $request){
        $barcode = $request->barcode;
        $invoices = DB::table('invoices')->where('barcode', $barcode)->get();
        $invoice = DB::table('invoices')->where('barcode', $barcode)->first();
        $roll = $invoice->roll;
        if(count($invoices)== 1) {
            if ($invoice->payment_status == 0) {
                DB::beginTransaction();
                try {
                    DB::table('invoices')
                        ->where('barcode', $barcode)
                        ->update(
                            [
                                'payment_status' => 1,
                                'verify_date' => date('Y-m-d'),
                                'verify_time' => date('H:i A'),
                            ]
                        );
                    DB::table('users')
                        ->where('roll', $roll)
                        ->update([

                        ]);
                    DB::commit();
                    $bug = 0;

                } catch (\Exception $e) {
                    DB::rollback();
                    $bug = $e->errorInfo[1];
                }
                if ($bug == 0) {
                    return redirect('verify-invoice')->with('success', 'Data Successfully Inserted');
                } elseif ($bug == 1062) {
                    return redirect()->back()->with('error', 'Data Insert Failed');
                } else {
                    return redirect()->back()->with('error', 'Something Error Found ! ');
                }
            }else{
                return redirect()->back()->with('success', 'Invoice Already Verified ! ');
            }
        }else{
            return redirect()->back()->with('error', 'Invalid Barcode ');
        }
    }

    public function excelInvoiceVerify(Request $request){
        $fileName=$request->file('barcode')->getRealPath();
        $reader = IOFactory::createReader('Xlsx')->setReadDataOnly(true)->load($fileName);
        $sheetData = $reader->getActiveSheet()->toArray(null, true, true, true);
        $invalid_barcode = []; $already_verified = []; $verified = [];
        for ($row=2; $row <= count($sheetData); $row++){
            $user = '';
            $invoice = '';
            $barcode = $sheetData[$row]["A"];
            $invoice = DB::table('invoices')
                ->where('barcode', $barcode)
                ->first();
            if (empty($invoice)){
                $invalid_barcode[] = $barcode;
            }elseif (!empty($invoice) && $invoice->payment_status == 1){
                $already_verified[] = $barcode;
            }else{
                $invoice_roll = $invoice->roll;
                $amount = $invoice->amount;
                $user = DB::table('users')
                    ->where('roll', $invoice_roll)
                    ->first();
                $roll = $user->roll;
                $mobile_no = $user->mobile_no;
                Invoice::where('barcode', $barcode)
                    ->update(
                        [
                            'payment_status' => 1,
                            'verify_date' => date('Y-m-d'),
                            'verify_time' => date('H:i A'),
                        ]
                    );
//                    DB::table('invoices')
//                        ->where('barcode', $barcode)
//                        ->update(
//                            [
//                                'payment_status' => 1,
//                                'verify_date' => date('Y-m-d'),
//                                'verify_time' => date('H:i A'),
//                            ]
//                        );
                $code = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz0123456789", 8)), 0, 8);
                $number = substr($mobile_no, -10);
                $number = '0'.$number;
                $msg = 'Thank Your for Payment Tk.'.$amount.'. You can fill up the ADMISSION FORM now. Browse: https://bciccollege.edu.bd or click https://bit.ly/2MULhs2 . Your login ID: '.$number.' & CODE: '.$code;
                $result = \MyHelper::sms($number,$msg);
                DB::table('users')
                    ->where('roll', $roll)
                    ->update([
                        'status'    => 1,
                        'password'  => \Hash::make($code)
                    ]);
                $verified[] = $barcode;
            }

        }
        DB::beginTransaction();
        try{

            DB::commit();
            $bug=0;

        } catch (\Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
        }

        if($bug==0){
//            return view('backend.invoice.verification-status', [
//                'success' => 'Data Successfully Inserted',
//                'verified_invoice' => $verified,
//                'already_verified_invoice' => $already_verified,
//                'invalid_barcode' => $invalid_barcode,
//            ]);
            return redirect('verify-excel')->with('success', 'Data Successfully Inserted');
        }elseif($bug==1062){
            return redirect()->back()->with('error','The Email has already been taken.');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
