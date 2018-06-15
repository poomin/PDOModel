<?php
/**
 * Created by PhpStorm.
 * User: EPOP
 * Date: 6/15/2018
 * Time: 3:09 PM
 */

$fn = isset($_REQUEST['fn'])?$_REQUEST['fn']:'';


//insert date check list : check student come to school
if($fn=='insertCheckList'){

    require_once __DIR__.'/../model/DateCheck.php';
    $MDC = new DateCheck();

    $date = $MDC->input('date');
    $list = $MDC->input('list');

    $result = $MDC->insertCheckList($list,$date);
    if($result > 0){
        echo json_encode([
            'status'=> true,
            'message'=> 'Success',
            'data'=>[]
        ]);
        exit;
    }else{
        echo json_encode([
            'status'=> false,
            'message'=> 'Error',
            'data'=>[]
        ]);
        exit;
    }

}

