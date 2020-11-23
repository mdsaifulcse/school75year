<?php

namespace App\Http\Controllers;

use App\Model\Batch;
use App\Model\Branch;
use App\Model\SubCourse;
use Illuminate\Http\Request;
use Validator,DB,Auth;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batches=Batch::orderBy('serial_num','ASC')->paginate(15);
        $max_serial=Batch::max('serial_num');
        return view('backend.setting.batches.index',compact('batches','max_serial'));
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
        //return $request;

        $validator = Validator::make($request->all(), [
            'batch_name' => 'required',
            //'student_capacity' => 'numeric',
            /*enable   extension=php_fileinfo*/
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $batchInfo=Batch::where(['batch_name'=>$request->batch_name])->first();

        if (!empty($batchInfo)){
            return redirect()->back()->with('error','Batch name. '.$request->batch_nmae.' Already Exist');
        }

        $input=$request->except('_token');
        DB::beginTransaction();
        try{

            $input['created_by']=\Auth::user()->id;
            $insertId= Batch::create($input)->id;

            DB::commit();
            $bug=0;
        }catch(Exception $e){
            DB::rollback();
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Data Successfully Inserted');
        }elseif($bug==1062){
            return redirect()->back()->with('error',$bug);
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $subCourseId)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function edit(Batch $batch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {


        $input = $request->all();
        $validator = Validator::make($input, [
            'batch_name'=> "required|unique:batch,batch_name,$id",
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $batchInfo=Batch::findOrFail($id);
        try{
            $input['updated_by']=\Auth::user()->id;
            $batchInfo->update($input);

            $bug=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Successfully Update');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batch $batch)
    {
        DB::beginTransaction();
        try {
            $batch->delete();
            $bug=0;
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('success','Data Delete Successfully.');
        }elseif ($bug==1451){
            return redirect()->back()->with('error',"$bug1");
        }
        else{
            return redirect()->back()->with('error','Something Error Found !, Please try again.'.$bug1);
        }
    }
}
