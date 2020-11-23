<?php

namespace App\Http\Controllers;

use App\Model\Notification;
use Illuminate\Http\Request;
use Auth,MyHelper;
use App\Model\NotificationRead;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $roleId = MyHelper::user()->role_id;
            $notifications = Notification::with('read')->where('role_id','LIKE',"%".$roleId."%")->where('user_id_skip','!=',Auth::user()->id)->orderBy('id','DESC');
            if($roleId==4){
                $notifications =$notifications->where('user_id',Auth::user()->id);
            }
            if($roleId==3){
                $notifications =$notifications->where('branch_id',Auth::user()->branch);
            }
            
            $notifications =$notifications->paginate(20);
            return view('backend.notifications.index',compact('notifications'));
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
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show(Notification $notification)
    {
        $readData = NotificationRead::where(['notification_id'=>$notification->id,'read_by'=>Auth::user()->id])->first();
        if($readData==''){
            NotificationRead::create(['notification_id'=>$notification->id,'read_by'=>Auth::user()->id]);
        }
        return redirect($notification->link);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {
        try{
            $readData = NotificationRead::where(['notification_id'=>$notification->id,'read_by'=>Auth::user()->id])->first();
            if($readData==''){
                NotificationRead::create(['notification_id'=>$notification->id,'read_by'=>Auth::user()->id]);
            }
        return response()->json('Data Successfully Read.',200);

        }catch(\Exception $e){
            $bug=$e->errorInfo[1];
            if($bug==1062){
                return response()->json('Data has already been taken.', 303);
            }else{
                return response($e->errorInfo[2],500);
            }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        //
    }
}
