<?php

namespace App\Http\Controllers;

use App\Model\Attendance;
use App\Model\Classes;
use Illuminate\Http\Request;
use App\Model\Branch;
use App\User;
use App\Model\UserInfo;
use App\Model\StudentPayment;
use DB;
use Auth,MyHelper;
use App\Model\SubMenu;
use App\Model\Menu;
use App\Model\SubSubMenu;
use App\Model\ProgramStudies;
use App\Model\SubCourse;


class DashboadController extends Controller
{

    public function dashboard(){

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


        return view('backend.dashboard.index',compact('totalReceivedAble','totalReceived','dues','totalReceivedPercent','duesPercent','admins'));
    }

    protected function adminWiseCollection($adminId){

        $totalReceivedAble=UserInfo::join('users','users.id','user_infos.user_id')
            ->select(DB::raw('SUM(payable) as totalReceivedAble'))
            ->where(['users.type'=>2])->where('user_infos.status','!=',0);

        if ($adminId!=1){
            //$totalReceivedAble=$totalReceivedAble->where('received_by',$adminId);
            $totalReceivedAble=$totalReceivedAble->where('confirmed_by',$adminId);
        }
        $totalReceivedAble=$totalReceivedAble->first();


        $totalReceived=UserInfo::join('users','users.id','user_infos.user_id')
            ->select(DB::raw('SUM(paid) as totalReceived'))
            ->where(['users.type'=>2])->where('user_infos.status','!=',0);

        if ($adminId!=1){
            $totalReceived=$totalReceived->where('confirmed_by',$adminId);
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







    // Home Iconic Menu (Hub and Spoke)
    public function home(){
        $menus = Menu::where(['status'=>1,'type'=>1])->orderBy('serial_num','ASC')->get();
        return view('backend.home.menu',compact('menus'));
    }
    public function subMenu(Request $request,$url){
        $menu = Menu::findOrFail($request->id);
        $subMenu = SubMenu::where(['fk_menu_id'=>$request->id,'status'=>1])->orderBy('serial_num','ASC')->get();
        return view('backend.home.subMenu',compact('subMenu','menu'));
    }
    public function subSubMenu(Request $request,$url,$slug){
        $subMenu = SubMenu::leftJoin('menu','fk_menu_id','menu.id')->select('sub_menu.*','menu.name as menu_name','menu.url as menu_url')->findOrFail($request->id);
        $subSubMenu = SubSubMenu::where(['fk_sub_menu_id'=>$request->id,'status'=>1])->orderBy('serial_num','ASC')->get();
        
        return view('backend.home.subSubMenu',compact('subMenu','subSubMenu'));
    }


}
