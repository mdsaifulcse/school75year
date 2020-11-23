<?php

namespace App\Providers;

use App\Model\UserInfo;
use App\Model\WeeklyLecture;
use Illuminate\Support\ServiceProvider;
use App\Model\PrimaryInfo;
use App\Model\AboutCompany;
use App\Model\Menu;
use App\Model\MenuSetting;
use App\Model\ImportantLinks;
use App\Model\SocialIcon;
use App\Model\BgImage;
use View,MyHelper;
use App\Model\Notification;
use DB;
use Auth;
use App\Model\NotificationRead;

class OrganaizitionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            [
                'client.index',
                'backend.dashboard.index',
            ],
            function ($view){


                $members=UserInfo::join('users','users.id','user_infos.user_id')
                    ->where(['users.type'=>2])->count();

                $totalMembers=UserInfo::join('users','users.id','user_infos.user_id')
                    ->select(DB::raw('SUM(guest_no) as totalGuest'),DB::raw('SUM(children) as totalChildren'),DB::raw('SUM(spouse)as totalSpouse'))
                    ->where(['users.type'=>2])->first();



                $pendingMembers=UserInfo::join('users','users.id','user_infos.user_id')
                    ->where(['users.type'=>2,'user_infos.status'=>0])->count();

                $pendingData=UserInfo::join('users','users.id','user_infos.user_id')
                    ->select(DB::raw('SUM(guest_no) as totalGuest'),DB::raw('SUM(children) as totalChildren'),DB::raw('SUM(spouse)as totalSpouse'))
                    ->where(['users.type'=>2,'user_infos.status'=>0])->first();



                $confirmedMembers=UserInfo::join('users','users.id','user_infos.user_id')
                    ->where(['users.type'=>2,'user_infos.status'=>2])->count();

                $confirmedData=UserInfo::join('users','users.id','user_infos.user_id')
                    ->select(DB::raw('SUM(guest_no) as totalGuest'),DB::raw('SUM(children) as totalChildren'),DB::raw('SUM(spouse)as totalSpouse'))
                    ->where(['users.type'=>2,'user_infos.status'=>2])->first();




                $view->with(['members'=>$members,'totalMembers'=>$totalMembers,
                    'pendingMembers'=>$pendingMembers,'pendingData'=>$pendingData,
                    'confirmedMembers'=>$confirmedMembers,'confirmedData'=>$confirmedData,
                    ]);
            }
        );


        View::composer( // primary info in home page
            [

                'home',
                'frontend._partials.header',
                'backend.app',
                'backend.index',
                'backend.student.edit-student-form',
                'frontend._partials.footer',

            ],function ($view){

            $info = PrimaryInfo::first();
            $authRole='';

            $notIn = NotificationRead::where('read_by',Auth::user()->id)->pluck('notification_id');
            $notifications ='';
            $totalNotifications='';

            $receivedBranch='';

            $view->with(['info'=>$info,'authRole'=>$authRole,'receivedBranch'=>$receivedBranch,'notifications'=>$notifications,'totalNotifications'=>$totalNotifications]);

        });

              View::composer( // about info in home page $ footer
            [

                'home',
                'frontend._partials.footer',
                'frontend.contact.about',



            ],function ($view){

            $about = AboutCompany::first();
            $view->with('about',$about);

        });



        View::composer( // Main menu supply to menu bar
            [
                'backend._partials.sidebar',
                'backend.home.footerIconMenu',
            ],function ($view){
                $menus=Menu::with('subMenu')->orderBy('serial_num','asc')->where(['status'=>1,'type'=>1])->get();
                $view->with('menus',$menus);
        });

        View::composer( //menu setting style add header
            [
                'frontend._partials.header'
            ],function ($view){
            $menusetting=MenuSetting::first();
            $view->with('menusetting',$menusetting);
        });

               View::composer( //importantlink add footer
            [
                'frontend._partials.footer'
            ],function ($view){
            $importants=ImportantLinks::orderBY('id','ASC')->get();
            $view->with('importants',$importants);
        });

                View::composer( //social icon add footer
            [
                'frontend._partials.footer'
            ],function ($view){
            $socials=SocialIcon::orderBY('id','ASC')->get();
            $view->with('socials',$socials);
        });

           View::composer( //bg iimage add footer
            [
                'frontend._partials.header',
                'home'
            ],function ($view){
            $img=BgImage::first();
            $view->with('img',$img);
        });



    }
}
