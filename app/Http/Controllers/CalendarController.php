<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\Notice;
use Calendar;
use Illuminate\Console\Scheduling\Event as IlluminateEvent;

class CalendarController extends Controller
{
    public function index(){
        $events = [];
        $data = Event::all();
        $notice = Notice::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                if($value->end_date!=null){
                    $end_date = $value->end_date.' +1 day';
                }else{
                    $end_date = $value->start_date;
                }
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($end_date),
                    null,
                    // Add color and link on event
	                [
	                    'color' => '#d29300',
	                    'url' => "#e_".$value->id,
	                ]
                );
            }
        }
        foreach ($notice as $key => $value) {

            $events[] = Calendar::event(
                $value->title,
                true,
                new \DateTime($value->date),
                new \DateTime($value->date),
                null,
                // Add color and link on event
                [
                    'color' => '#050a4c',
                    'url' => "#n_".$value->id,
                ]
            );
        }
        $calendar = Calendar::addEvents($events);
        return view('backend.calendar.calendar', compact('calendar'));
    }

    public function modalLoad($value){
        $type = substr($value,0,1);
        $id = str_replace($type.'_','',$value);
        if($type=='e'){
            $event = Event::findOrFail($id);
        }else{
            $event = Notice::select('*','date as start_date')->where('id',$id)->first();
        }
        return view('backend.calendar.modal',compact('type','event'));
    }
}
