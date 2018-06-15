<?php
/**
 * Created by PhpStorm.
 * User: EPOP
 * Date: 6/14/2018
 * Time: 11:58 AM
 */
require_once __DIR__.'/../model/User.php';

$fn = isset($_REQUEST['fn'])?$_REQUEST['fn']:'';
if($fn=='login'){
    $username = isset($_REQUEST['username'])?$_REQUEST['username']:'';
    $password = isset($_REQUEST['password'])?$_REQUEST['password']:'';

    $modelUser = new User();
    $result = $modelUser->login($username,md5($password));
    if(isset($result['id'])){
        echo json_encode($result);
    }else{
        echo "error";
    }

}



