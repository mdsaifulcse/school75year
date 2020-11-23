<?php

namespace App\Providers;

use App\Model\SmsLog;
use App\Model\SmsSubmitId;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class SmsProvider extends ServiceProvider
{
    static public $apiKey = 'C20041105d57fca8b1e3d3.41791618';
    static public $sender = 'ACHIEVEMENT';

    static public function single($number, $text){

        $number = substr($number, -10);
        $number = '880'.$number;
        $txt = str_replace("[",'(',$text);
        $txt = str_replace("{",'(',$txt);
        $txt = str_replace("]",')',$txt);
        $txt = str_replace("}",')',$txt);
        $txt = str_replace("~",'-',$txt);
        $txt = str_replace("^",'-',$txt);
        $txt = str_replace("\\",'/',$txt);
        $txt = str_replace("|",'/',$txt);
        $msg = rawurlencode($txt);

        $client = new Client();
        $url = "http://esms.mimsms.com/smsapi?api_key=".static::$apiKey.'&type=text&contacts='.$number.'&senderid='.static::$sender.'&msg='.$msg;
        $request = $client->get($url);
        $response = $request->getBody()->getContents();

        $status = substr($response,0,13);
        $input=[];
        if(\Auth::check()){
            $input['created_by']=\Auth::user()->id;
        }
        if($status=='SMS SUBMITTED') {
            $ext = substr($response, 0, 20);
            $submitId = str_replace($ext,'',$response);
            $input['submit_id']=$submitId;
            SmsSubmitId::create($input);
            return "True";
        }else{
            return "false";
        }
    }
    static public function oneToMany($numbers,$message)
    {

        $txt = str_replace("[",'(',$message);
        $txt = str_replace("{",'(',$txt);
        $txt = str_replace("]",')',$txt);
        $txt = str_replace("}",')',$txt);
        $txt = str_replace("~",'-',$txt);
        $txt = str_replace("^",'-',$txt);
        $txt = str_replace("\\",'/',$txt);
        $txt = str_replace("|",'/',$txt);
        $contacts = '';
        foreach($numbers as $key => $number){
            $number = substr($number, -10);
            $number = '880'.$number;
            if($key>0){
                $contacts.='+'.$number;
            }else{
                $contacts = $number;
            }
        }

        $client = new Client();
        $url = 'http://esms.mimsms.com/smsapi';
        $body = [
            "api_key" => static::$apiKey,
            "senderid" => static::$sender,
            "type"=>'text',
            "msg" => $txt,
            "contacts"=>$contacts
        ];
        $request = $client->request('POST', $url, [
            'form_params' => $body
        ]);
        $response = $request->getBody()->getContents();

        $status = substr($response,0,13);
        if($status=='SMS SUBMITTED') {
            $ext = substr($response, 0, 20);
            $submitId = str_replace($ext,'',$response);
            SmsSubmitId::create(['submit_id'=>$submitId,'created_by'=>\Auth::user()->id]);
            return "True";
        }else{
            return "false";
        }



    }
    static public function manyToMany($numbers,$messages)
    {

        $smsBody = [];
        foreach($numbers as $key => $number){
            $number = substr($number, -10);
            $number = '880'.$number;
            $smsBody[]=[
                'to'=>$number,
                'message'=>$messages[$key],
            ];
        }
        $client = new Client();
        $url = 'http://esms.mimsms.com/smsapimany';
        $body = [
            "api_key" => static::$apiKey,
            "senderid" => static::$sender,
            "messages" => $smsBody
        ];
        $request = $client->request('POST', $url, [
            'form_params' => $body
        ]);
        $response = $request->getBody()->getContents();

        $status = substr($response,0,13);
        if($status=='SMS SUBMITTED') {
            $ext = substr($response, 0, 20);
            $submitId = str_replace($ext,'',$response);
            SmsSubmitId::create(['submit_id'=>$submitId,'created_by'=>\Auth::user()->id]);
            return "True";
        }else{
            return "false";
        }



    }

    static public function deliveryReport()
    {
        $client = new Client();
        $deliveryUrl = "http://esms.mimsms.com/miscapi/".static::$apiKey."/"."getDLR/";
        try{
            $submitData = SmsSubmitId::pluck('created_by','submit_id');
            foreach($submitData as $submitId => $userId) {
                $request = $client->get($deliveryUrl . $submitId);

                $response = $request->getBody()->getContents();

                if(strpos($response, 'message') !== false){
                    $response=preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $response);
                }

                $xmls = simplexml_load_string($response);
                $json = json_encode($xmls);
                 $array = json_decode($json, TRUE);
                if (isset($array['message'])) {
                   
                   $messageArray = $array['message'];

                    if (isset($messageArray['ID'])) {
                        $smsText = rtrim($messageArray['SMS'],'"');
                        $smsText = ltrim($smsText,'"');
                        $smsText = ltrim($smsText,' ');
                        if(mb_strlen($smsText)==strlen($smsText)){
                            if(mb_strlen($smsText)>160){
                                $total_sms  = ceil(mb_strlen($smsText)/153);
                            }else{
                                $total_sms  = ceil(mb_strlen($smsText)/160);
                            }

                        }else{
                            if(mb_strlen($smsText)>160){
                                $total_sms  = ceil(mb_strlen($smsText)/67);
                            }else{
                                $total_sms  = ceil(mb_strlen($smsText)/70);
                            }
                        }
                        $input = [
                            'delivery_time' => date('Y-m-d H:i:s', strtotime($messageArray['DLRReceived'])),
                            'status' => $messageArray['DLRStatus'],
                            'sms_id' => $messageArray['ID'],
                            'sms' => $smsText,
                            'total_sms' => $total_sms,
                            'mobile_number' => $messageArray['MSISDN'],
                        ];
                        if($userId!=''){
                            $input['created_by']=$userId;
                        }
                        SmsLog::create($input);
                    } else {
                        foreach ($messageArray as $data) {
                            $smsText = rtrim($data['SMS'],'"');
                            $smsText = ltrim($smsText,'"');
                            $smsText = ltrim($smsText,' ');
                            if(mb_strlen($smsText)==strlen($smsText)){
                                if(mb_strlen($smsText)>160){
                                    $total_sms  = ceil(mb_strlen($smsText)/153);
                                }else{
                                    $total_sms  = ceil(mb_strlen($smsText)/160);
                                }

                            }else{
                                if(mb_strlen($smsText)>160){
                                    $total_sms  = ceil(mb_strlen($smsText)/67);
                                }else{
                                    $total_sms  = ceil(mb_strlen($smsText)/70);
                                }
                            }
                            $input = [
                                'delivery_time' => date('Y-m-d H:i:s', strtotime($data['DLRReceived'])),
                                'status' => $data['DLRStatus'],
                                'sms_id' => $smsText,
                                'sms' => $data['SMS'],
                                'total_sms' => $total_sms,
                                'mobile_number' => $data['MSISDN'],
                            ];
                            if($userId!=''){
                                $input['created_by']=$userId;
                            }
                            SmsLog::create($input);
                        }
                    }
                   
                    if(count($messageArray)>99){
                        SmsSubmitId::where('submit_id',$submitId)->delete();
                        static::deliveryReport();
                    }else{
                        SmsSubmitId::where('submit_id',$submitId)->delete();
                    }
                   
                }
            }
            return "true";
        }catch(Exception $e){
            return $e->errorInfo[2];
        }


    }

    static public function quickDeliveryReport($submitId)
    {

        $client = new Client();
        $deliveryUrl = "http://esms.mimsms.com/miscapi/".static::$apiKey."/getDLR/";
        try{

                $request = $client->get($deliveryUrl . $submitId);
                $response = $request->getBody()->getContents();
                $xmls = simplexml_load_string($response);
                $json = json_encode($xmls);
                $array = json_decode($json, TRUE);
                if (isset($array['message'])) {
                    $messageArray = $array['message'];

                    if (isset($messageArray['ID'])) {
                        $smsText = rtrim($messageArray['SMS'],'"');
                        $smsText = ltrim($smsText,'"');
                        $smsText = ltrim($smsText,' ');
                        if(mb_strlen($smsText)==strlen($smsText)){
                            if(mb_strlen($smsText)>160){
                                $total_sms  = ceil(mb_strlen($smsText)/153);
                            }else{
                                $total_sms  = ceil(mb_strlen($smsText)/160);
                            }

                        }else{
                            if(mb_strlen($smsText)>160){
                                $total_sms  = ceil(mb_strlen($smsText)/67);
                            }else{
                                $total_sms  = ceil(mb_strlen($smsText)/70);
                            }
                        }
                        $input = [
                            'delivery_time' => date('Y-m-d H:i:s', strtotime($messageArray['DLRReceived'])),
                            'status' => $messageArray['DLRStatus'],
                            'sms_id' => $messageArray['ID'],
                            'sms' => $smsText,
                            'total_sms' => $total_sms,
                            'mobile_number' => $messageArray['MSISDN'],
                        ];
                        if(\Auth::check()){
                            $input['created_by']=\Auth::user()->id;
                        }
                        SmsLog::create($input);
                    } else {
                        foreach ($messageArray as $data) {
                            $smsText = rtrim($data['SMS'],'"');
                            $smsText = ltrim($smsText,'"');
                            $smsText = ltrim($smsText,' ');
                            if(mb_strlen($smsText)==strlen($smsText)){
                                if(mb_strlen($smsText)>160){
                                    $total_sms  = ceil(mb_strlen($smsText)/153);
                                }else{
                                    $total_sms  = ceil(mb_strlen($smsText)/160);
                                }

                            }else{
                                if(mb_strlen($smsText)>160){
                                    $total_sms  = ceil(mb_strlen($smsText)/67);
                                }else{
                                    $total_sms  = ceil(mb_strlen($smsText)/70);
                                }

                            }
                            $input = [
                                'delivery_time' => date('Y-m-d H:i:s', strtotime($data['DLRReceived'])),
                                'status' => $data['DLRStatus'],
                                'sms_id' => $data['ID'],
                                'sms' => $smsText,
                                'total_sms' => $total_sms,
                                'mobile_number' => $data['MSISDN'],
                            ];
                            if(\Auth::check()){
                                $input['created_by']=\Auth::user()->id;
                            }
                            SmsLog::create($input);
                        }
                    }

                }

            return "true";
        }catch(\Exception $e){
            return $e->errorInfo[2];
        }


    }

}
