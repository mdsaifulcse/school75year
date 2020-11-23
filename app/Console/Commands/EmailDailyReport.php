<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use App\Notifications\NotifyStatement;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendLoginCredintial;
use App\Mail\DailyStatement;

class EmailDailyReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:statement';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email with daily income statement';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $superAdmin = User::leftJoin('role_user','role_user.user_id','users.id')->where('role_id',3)->get();
        foreach($superAdmin as $user){
            Mail::to($user->email)->send(new  DailyStatement($user->mobile_no));
            $this->info('Email Send to : '.$user->email);
        }
    }
}
