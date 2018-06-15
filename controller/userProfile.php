<?php

/**
 * Created by PhpStorm.
 * User: EPOP
 * Date: 6/14/2018
 * Time: 12:13 PM
 */
require_once __DIR__.'/../model/User.php';

$fn = isset($_REQUEST['fn'])?$_REQUEST['fn']:'';
if($fn=='editUser'){
    $modelUser = new User();

    $id = $modelUser->input('id');
    $name = $modelUser->input('name');
    $surname = $modelUser->input('surname');
    $id_card = $modelUser->input('id_card');
    $birthday = $modelUser->input('birthday');
    $address = $modelUser->input('address');
    $phone = $modelUser->input('phone');
    $img_path = $modelUser->input('img_path');
    $gender = $modelUser->input('gender','f');
    $status = $modelUser->input('status','student');
    if($birthday!==''){
        $cutBD = explode('-',$birthday);
        $y= $cutBD[0];
        $m= $cutBD[1];
        $d= $cutBD[2];
        if($y>2500){
            $y = $y-543;
        }
        $birthday= $y.'-'.$m.'-'.$d;
    }
    $input = [
        'name'=> $name,
        'surname'=> $surname,
        'id_card'=> $id_card,
        'birthday'=> $birthday,
        'address'=> $address,
        'phone'=> $phone,
        'img_path'=> $img_path,
        'gender'=> $gender,
        'status'=> $status
    ];

    $result = $modelUser->updateUser($input,['id'=>$id]);
    if($result>0){
        echo "Count update:".$result;
    }else{
        echo "error";
    }

}

elseif ($fn=='editPassword'){
    $modelUser = new User();

    $id = $modelUser->input('id');
    $username = $modelUser->input('username');
    $old = $modelUser->input('old_password');
    $new = $modelUser->input('new_password');

    $result = $modelUser->updatePassword($id,$username,md5($old),md5($new));
    if($result>0){
        echo "Count update:".$result;
    }else{
        echo "Error";
    }



}

