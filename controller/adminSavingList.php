<?php
/**
 * Created by PhpStorm.
 * User: EPOP
 * Date: 6/15/2018
 * Time: 10:34 AM
 */
require_once __DIR__.'/../model/Saving.php';

$modelSaving = new Saving();

$fn = isset($_REQUEST['fn'])?$_REQUEST['fn']:'';

if($fn=='addSaving'){
    $user_id = $modelSaving->input('user_id','2');
    $active_user = $modelSaving->input('active_user','1');
    $event = $modelSaving->input('event','deposit');
    $balance = $modelSaving->input('balance','5');
    $year = $modelSaving->input('year','2018');
    $date_at = $modelSaving->input('date_at','2561-06-15');
    if($date_at!==''){
        $cutBD = explode('-',$date_at);
        $y= $cutBD[0];
        $m= $cutBD[1];
        $d= $cutBD[2];
        if($y>2500){
            $y = $y-543;
        }
        $date_at= $y.'-'.$m.'-'.$d;
    }

    $input = [
        'user_id'=>$user_id,
        'active_user'=>$active_user,
        'event'=>$event,
        'balance'=>$balance,
        'year'=>$year,
        'date_at'=>$date_at
    ];

    $result = $modelSaving->insertSaving($input);
    if($result>0){
        echo "Id insert:".$result;
    }else{
        echo "error";
    }


}

elseif ($fn=='editSaving'){

    $id = $modelSaving->input('id','1');
    $user_id = $modelSaving->input('user_id');
    $active_user = $modelSaving->input('active_user');
    $event = $modelSaving->input('event','deposit');
    $balance = $modelSaving->input('balance');
    $year = $modelSaving->input('year');
    $date_at = $modelSaving->input('date_at');
    if($date_at!==''){
        $cutBD = explode('-',$date_at);
        $y= $cutBD[0];
        $m= $cutBD[1];
        $d= $cutBD[2];
        if($y>2500){
            $y = $y-543;
        }
        $date_at= $y.'-'.$m.'-'.$d;
    }

    $input = [
        'user_id'=>$user_id,
        'active_user'=>$active_user,
        'event'=>$event,
        'balance'=>$balance,
        'year'=>$year,
        'date_at'=>$date_at
    ];

    $result = $modelSaving->updateSaving($input,['id'=>$id]);
    if($result>0){
        echo "count update:".$result;
    }else{
        echo "error";
    }

}

elseif ($fn=='deleteSaving'){
    $id = $modelSaving->input('id');

    $result = $modelSaving->deleteSaving($id);
    if($result>0){
        echo "count delete:".$result;
    }else{
        echo "error";
    }

}

