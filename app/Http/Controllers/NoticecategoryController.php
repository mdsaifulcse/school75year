<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\NoticeCat;
use Validator;
use DB;
use Yajra\Acl\Models\Permission;

class NoticecategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $category=NoticeCat::get();
        

        return view('backend.notice.notice_cat',compact('category'));
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
         $input = $request->all();
        $validator = Validator::make($input,[
            'cat_name'=> 'required',

        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }


        try {

           NoticeCat::create($input);



            $bug = 0;

        } catch (\Exception $e) {
            $bug = $e->errorInfo[1];
            $bug1 = $e->errorInfo[2];
        }

        if($bug == 0){
            return redirect()->back()->with('success','Created Successfully.');
        }else{
            return redirect()->back()->with('error','Something Error Found !, Please try again.'.$bug1);
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

       $input = $request->all();
    
         $data=NoticeCat::findOrFail($request->id);
     
        
        $validator = Validator::make($input, [
                    'cat_name'    => 'required',
                    
                ]);
        
                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
   
        try{
            $data->update($input);


                
            $bug=0;
            }catch(\Exception $e){
                $bug=$e->errorInfo[1];
                $bug1 = $e->errorInfo[2];
            }
             if($bug==0){
            return redirect()->back()->with('success','Successfully Inserted');
            }else{
                return redirect()->back()->with('error','Something Error Found ! . ' .$bug1);
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
            $data=NoticeCat::findOrFail($id);
       try{
            $data->delete();
            $bug=0;
            $error=0;
        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
            $error=$e->errorInfo[2];
        }
        if($bug==0){
       return redirect()->back()->with('success','Successfully Deleted!');
        }elseif($bug==1451){
       return redirect()->back()->with('error','This Data is Used anywhere ! ');

        }
        elseif($bug>0){
       return redirect()->back()->with('error','Some thing error found !');

        }
    }
}
