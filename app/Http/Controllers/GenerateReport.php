<?php

namespace App\Http\Controllers;

use App\Model\Batch;
use App\Model\UserInfo;
use App\Model\Village;
use App\User;
use Illuminate\Http\Request;
use PDF,DB,Auth;

class GenerateReport extends Controller
{

    public function showReportForm(Request $request){
        $batches=Batch::orderBy('id','DESC')
            //->where('id','!=','1')
            ->pluck('batch_name','id');


        // created_at && updated_at not match ----------
//        $reportData=UserInfo::with('confirmedBy')->join('users','users.id','user_infos.user_id')
//            ->leftJoin('villages','user_infos.village_id','villages.id')
//            ->select('users.name','users.mobile_no','villages.village','user_infos.*')
//            ->where(['users.type'=>2,'user_infos.status'=>2])
//            ->whereDate('user_infos.created_at','<=','2020-01-07')->whereDate('user_infos.updated_at','>','2020-01-07')->get();
//
//        return view('backend.report.index2',compact('batches','request','reportData'));



        // For Generate Excel Voucher less

        // For Generate Excel Voucher less
//        $reportData=UserInfo::join('users','users.id','user_infos.user_id')
//          ->leftJoin('batch','user_infos.batch_id','batch.id')
//          ->leftJoin('villages','user_infos.village_id','villages.id')
//          ->select('users.name','users.mobile_no','users.image','batch.batch_name','villages.village','user_infos.*')
//            ->where(['users.type'=>2,'user_infos.status'=>2])
//            ->where('batch_id',1)->whereNull('class_name')->get();
//          ->whereNull('user_infos.voucher_no')
//          ->get();

        //return view('backend.report.index',compact('batches','request','reportData'));




        $reportData=[];
        if ((isset($request->report_type) && $request->report_type!='') && (isset($request->student_category) && $request->student_category!='') ){

            $reportData=UserInfo::leftJoin('users','user_infos.user_id','users.id')
                ->leftJoin('batch','user_infos.batch_id','batch.id')
                ->leftJoin('villages','user_infos.village_id','villages.id')
                ->select('users.name','users.mobile_no','users.image','batch.batch_name','villages.village','user_infos.*')
                ->where(['users.type'=>2,'user_infos.status'=>2]); //'student_category'=>$request->student_category

            if ($request->student_category==1 && $request->batch_id!=''){ // Ex-student Or Batch Wise
                $reportData=$reportData->where(['batch_id'=>$request->batch_id])->where('student_category','!=',3);

                if ($request->batch_id==1){
                    $reportData=$reportData->whereNotIn('class_name',['Six','Seven','Eight','Nine','Ten']);
                }

            }elseif($request->student_category==1 && $request->batch_id==''){ // last work on 16-01-2020
                $reportData=$reportData->where(['student_category'=>$request->student_category])->where('student_category','!=',3)->orderBy('user_infos.batch_id','ASC');
            }



            if ($request->student_category==2 && $request->class_name!=''){ // Running Student Or Class Wise
                $reportData=$reportData->where(['student_category'=>2,'class_name'=>$request->class_name])->where('student_category','!=',3);
            }
            elseif($request->student_category==2 && $request->class_name==''){ // last work on 16-01-2020
                $reportData=$reportData->where('student_category',$request->student_category)->where('student_category','!=',3)->orderBy('user_infos.class_name','ASC')
                ->whereNotIn('class_name',['Eleven','Twelve','Honours','Masters',]);
            }

            if (isset($request->student_category) && $request->student_category==3){ //Teacher
                $reportData=$reportData->where(['student_category'=>$request->student_category]);
            }



            $report_type=$request->report_type;

            if ($request->report_type==1 || $request->report_type==2 ){ // 1 =Pdf Ticket, 2=Pdf for Magazine, 3=Excel


                if ($request->report_type==2){ // For Magazine ------


                    $reportData=$reportData->where('user_infos.created_at','>','2020-01-09')->get();
                    $report_type=$request->report_type;
                    return view('backend.report.index-magazine', compact('batches','reportData','report_type','request'));;
                }

                $reportData=$reportData->orderBy('user_infos.voucher_no','ASC')->get();

                //return view('backend.report.pdf',compact('reportData','report_type'));

                $pdf = PDF::loadView('backend.report.pdf', compact('reportData','report_type'))->setPaper('a4');
                return  $pdf->stream();

            }


            $reportData=$reportData->get();

        }


        return view('backend.report.index',compact('batches','request','reportData'));
    }


//cash-report

public function generateCashReport(){

    $totalReceivedAble=UserInfo::join('users','users.id','user_infos.user_id')
        ->select(DB::raw('SUM(payable) as totalReceivedAble'))
        ->where(['users.type'=>2])->where('user_infos.status','!=',0)->first();

    $totalReceived=UserInfo::join('users','users.id','user_infos.user_id')
        ->select(DB::raw('SUM(paid) as totalReceived'))
        ->where(['users.type'=>2])->where('user_infos.status','!=',0)->first();

    $totalReceivedPercent=($totalReceivedAble->totalReceivedAble/$totalReceived->totalReceived)*100;

    $dues=$totalReceivedAble->totalReceivedAble-$totalReceived->totalReceived;

    $duesPercent=0;
    if ($dues>0){
        $duesPercent=($totalReceivedAble->totalReceivedAble/$dues)*100;
    }

    $admins=User::leftJoin('role_user','role_user.user_id','users.id')
        ->leftJoin('roles','roles.id','role_user.role_id')
        ->where(['users.type'=>'1','roles.slug'=>'super-admin'])->orderBy('users.id','desc')->pluck('users.name','users.id');

    return view('backend.report.cash-report',compact('totalReceivedAble','totalReceived','dues','totalReceivedPercent','duesPercent','admins'));
}



    protected function adminWiseAmountCollection($afterBefore,$adminId){

        $totalReceivedAble=UserInfo::join('users','users.id','user_infos.user_id')
            ->select(DB::raw('SUM(payable) as totalReceivedAble'))
            ->where(['users.type'=>2])->where('user_infos.status','!=',0);

        if ($adminId!=1){
            //$totalReceivedAble=$totalReceivedAble->where('received_by',$adminId);
            $totalReceivedAble=$totalReceivedAble->where('confirmed_by',$adminId);
        }
        if ($afterBefore==1){ // 1= Before 07-01-2020
            $totalReceivedAble=$totalReceivedAble->whereDate('user_infos.created_at','<=','2020-01-07');
        }

        if ($afterBefore==2){  // 1= After 07-01-2020
            $totalReceivedAble=$totalReceivedAble->whereDate('user_infos.created_at','>','2020-01-07');
        }

        $totalReceivedAble=$totalReceivedAble->first();




        $totalReceived=UserInfo::join('users','users.id','user_infos.user_id')
            ->select(DB::raw('SUM(paid) as totalReceived'))
            ->where(['users.type'=>2])->where('user_infos.status','!=',0);

        if ($adminId!=1){
            $totalReceived=$totalReceived->where('confirmed_by',$adminId);
        }

        if ($afterBefore==1){ // 1= Before 07-01-2020
            $totalReceived=$totalReceived->whereDate('user_infos.created_at','<=','2020-01-07');
        }

        if ($afterBefore==2){ // 1= After 07-01-2020
            $totalReceived=$totalReceived->whereDate('user_infos.created_at','>','2020-01-07');
        }
        $totalReceived=$totalReceived->first();


        $totalReceivedPercent=0;
        if ($totalReceived->totalReceived>0){
            $totalReceivedPercent=($totalReceivedAble->totalReceivedAble/$totalReceived->totalReceived)*100;
        }

        $dues=$totalReceivedAble->totalReceivedAble-$totalReceived->totalReceived;

        $duesPercent=0;
        if ($dues>0){
            $duesPercent=($totalReceivedAble->totalReceivedAble/$dues)*100;
        }

        return response()->json([
            'totalReceivedAble'=>$totalReceivedAble,
            'totalReceived'=>$totalReceived,
            'totalReceivedPercent'=>$totalReceivedPercent,
            'dues'=>$dues,
            'duesPercent'=>$duesPercent,
        ]);

    }




}
