<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Notice;
use App\Model\NoticeCat;

class NoticeViewController extends Controller
{

    public function noticeList($id=''){
        $categories = NoticeCat::all();
        if($id!=''){
            $alldata=Notice::where('fk_notice_cat',$id)->latest()->paginate(5);
            $catName=NoticeCat::where('id',$id)->value('cat_name');
        }else{
            $alldata=Notice::latest()->paginate(5);
            $catName='All Notice';
        }


        return view('backend.notice.view.index',compact('alldata','categories','catName'));
    }

    public function noticeDetails($id){

    	$noticeDetails = Notice::findOrFail($id);
    	$recentnotice = Notice::orderBy('id','desc')->take(5)->get();
    	return view('frontend.notice.noticeDetails',compact('noticeDetails','recentnotice'));
    }

    public function noticePage($id){
        $noticeDetails = Notice::findOrFail($id);
        return view('backend.notice.view.notice-view',compact('noticeDetails'));
    }

}
