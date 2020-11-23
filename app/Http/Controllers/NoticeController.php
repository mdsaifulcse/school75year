<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Notice;
use App\Model\NoticeCat;
use Validator;
use DB;
use Auth;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $alldata=Notice::latest()->paginate(10);
        return view('backend.notice.index',compact('alldata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $noticecat=NoticeCat::pluck('cat_name','id');
        return view('backend.notice.create',compact('noticecat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title'=> 'required',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->file('pdf')) {
            $file = $request->file('pdf');
            $file->move(base_path('public/files/notice'), $file->getClientOriginalName());
            $input['pdf'] = 'public/files/notice/' . $file->getClientOriginalName();
        }

        try{
            Notice::create($input);

            $bug=0;
        }catch(Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect()->back()->with('success','Notice Successfully Inserted');
        }else{
            return redirect()->back()->with('error',$bug);
        }
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
        $noticecat=NoticeCat::pluck('cat_name','id');
        $data=Notice::findOrFail($id);
        return view('backend.notice.edit',compact('data','noticecat'));
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
         $input = $request->all();


        $validator = Validator::make($input, [
            'title'=> 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data=Notice::findOrFail($id);

        if($request->show_homepage){
            $input['show_homepage']=1;
        }else{
            $input['show_homepage']=0;
        }

        if($request->show_popop){
            $input['show_popop']=1;
        }else{
            $input['show_popop']=0;
        }

        if($request->pdf !=null){
            $file = $request->file('pdf');
            $file->move(base_path('public/files/notice'), $file->getClientOriginalName());
            $input['pdf']='public/files/notice/'.$file->getClientOriginalName();

            if($data->pdf!=null and file_exists($data->pdf)){
                unlink($data->pdf);
            }

        }

        try{
            $data->update($input);
            $bug=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect('notice-admin')->with('success','Notice Successfully Update');
        }else{
            return redirect()->back()->with('error','Something Error Found ! ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $input=Notice::findOrFail($id);

        DB::beginTransaction();
        try {

            $input->delete();

            if (file_exists($input->pdf)){
                unlink($input->pdf);
            }


            $bug = 0;
            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if ($bug == 0) {
            return redirect()->back()->with('success', ' slider Deleted Successfully.');
        }elseif ($bug==547){
            return redirect()->back()->with('error', 'Sorry this users can not be delete due to used another module');
        }
        else {
            return redirect()->back()->with('error', 'Something Error Found! ' . $bug1);
        }
    }
}
