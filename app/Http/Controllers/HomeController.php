<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\AboutCompany;
use App\Model\Slider;
use App\Model\NoticeCat;
use App\Model\Notice;
use App\Model\CalenderEvent;
use App\Model\PrincipalInfo;
use App\Model\ChirmanMessage;
use App\Model\DirectorMessage;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  /*  public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders=Slider::orderBy('serial','ASC')->get();
      /*  $noticecat=NoticeCat::orderBy('id','ASC)->get();*/


        $noticecat=Notice::leftjoin('notice_cat','notices.fk_notice_cat','notice_cat.id')
            ->select('notice_cat.cat_name','notice_cat.id as category_id','notices.id')
            ->groupBy('fk_notice_cat')->get();


        $events=CalenderEvent::get();
        $principal=PrincipalInfo::first();
        $chirman=ChirmanMessage::first();
        $director=DirectorMessage::first();

        $admissionNotice=Notice::where('fk_notice_cat',1)->get();
        $EventsNotice=Notice::where('fk_notice_cat',5)->get();
        $allnotice=Notice::where('show_homepage',1)->get();

        $pupopnotice=Notice::orderBy('id','DESC')->where('show_popop',1)->first();

        return view('home',compact('sliders','noticecat','EventsNotice','admissionNotice','allnotice','pupopnotice','events','director','chirman','principal'));
    }



    public function language($id){

       /* if(Session::get('lang')=='1'){ 
            Session::put('lang',null);
        }else{
            Session::put('lang','1');
        }
        return redirect()->back();*/

       Session::put('lan',$id);
       Session::put('lang',$id);




        return redirect()->back();

     
    }
}
 