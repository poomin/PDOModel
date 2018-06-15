<?php
/**
 * Created by PhpStorm.
 * User: EPOP
 * Date: 5/24/2018
 * Time: 11:37 AM
 */
require_once __DIR__.'/../model/User.php';


$fn = isset($_REQUEST['fn'])?$_REQUEST['fn']:'';
if ($fn==='register'){
    $modelUser = new User();

    $username = $modelUser->input('username');
    $password = $modelUser->input('password');
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
        'username'=> $username,
        'password'=> md5($password),
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
    $result = $modelUser->insertUser($input);
    if($result>0){
        echo "Id insert:".$result;
    }
    else{
        echo "Error";
    }

}



