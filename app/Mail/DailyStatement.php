<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Model\ProgramStudies;
use App\Model\StudentPayment;
use DB;
use SMS;

class DailyStatement extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mobile;
    public function __construct($num)
    {
        $this->mobile = $num;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       
        $date = date("Y-m-d");
       
        $firstDate = date_create($date)->modify('first day of this month')->format('Y-m-d');
        $lastDate = date_create($date)->modify('+1 day')->format('Y-m-d');
       $totalAdmission =  ProgramStudies::where('status',2)->select(DB::raw('sum(payable_amount-discount_amount) as `payable_amount`'),DB::raw('count(program_studies.id) as `total_student`'))
       ->whereBetween('admission_date',[$firstDate,$lastDate])->first();
        
       $dailyAdmission = ProgramStudies::where('status',2)->select(DB::raw('sum(payable_amount-discount_amount) as `payable_amount`'),DB::raw('count(program_studies.id) as `total_student`'))->whereDate('admission_date',$date)->first();
       
       $totalCollection = StudentPayment::whereBetween('payment_date',[$firstDate,$lastDate])->sum('amount');
        $todayCollection = StudentPayment::whereDate('payment_date',$date)->sum('amount');
        $todayAmount=[
            'daily_admission'=>$dailyAdmission,
            'total_admission'=>$totalAdmission,
            'dues'=>$totalAdmission->payable_amount - $totalCollection,
            'today_collection'=>$todayCollection,
            'total_collection'=>$totalCollection ,
        ];
        $text = "Today's Summary: Admission - ".$dailyAdmission->total_student.', Collections - '.$todayCollection.', Total Collections in this month: '.$totalCollection.'. For more details check your email or click here: http://bit.ly/2Hz8cUG' ;
        SMS::single($this->mobile,$text);
      
        return $this->view('backend.report.email',compact('todayAmount','date','firstDate'));
    }
}
