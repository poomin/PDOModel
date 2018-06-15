<?php

/**
 * Created by PhpStorm.
 * User: EPOP
 * Date: 5/24/2018
 * Time: 11:38 AM
 */
require_once __DIR__."/_DBPDO.php";

class User extends _DBPDO
{
    public $DB = "user";

    function login($username,$password){
        $this_db = $this->DB;

        //connect DB
        $this->connect();
        $sql = "SELECT * FROM $this_db WHERE username=:username AND password=:password ";
        $params= array(':username'=> $username , ':password'=>$password);
        $result = $this->query($sql,$params);
        //close DB
        $this->close();

        return $result;
    }

    function insertUser($input){
        $this_db = $this->DB;

        $data_sql = $this->convertArrayToInsert($input);
        if(count($data_sql)<=0){
            return 0;
        }else{

            //connect DB
            $this->connect();
            $sql_value = $data_sql['value'];
            $sql = "INSERT INTO $this_db $sql_value";
            $params = $data_sql['params'];
            $lastId = $this->insert($sql,$params);

            //close DB
            $this->close();
            return $lastId;
        }
    }

    function updateUser($input , $condition){
        $this_db = $this->DB;

        $data_sql = $this->convertArrayToUpdate($input,$condition);
        if(count($data_sql)<=0){
            return 0;
        }else {
            //connect DB
            $this->connect();
            $sql_value = $data_sql['value'];
            $sql = "UPDATE $this_db $sql_value";
            $params = $data_sql['params'];
            $lastId = $this->update($sql,$params);

            //close DB
            $this->close();
            return $lastId;
        }
    }

    function updatePassword($id,$username,$old,$new){
        $this_db = $this->DB;

        //connect DB
        $this->connect();
        $sql = "SELECT * FROM $this_db WHERE id=:id AND password=:password ";
        $params= array(':id'=> $id , ':password'=>$old);
        $result = $this->query($sql,$params);
        if(isset($result['id'])){
            $sql = "UPDATE $this_db SET username=:username , password=:password WHERE id=:id ";
            $params= array(':username'=> $username , ':password'=>$new , ':id'=>$result['id']);
            $result = $this->update($sql,$params);
        }else{
            $result =0;
        }

        //close DB
        $this->close();

        return $result;
    }

    function deleteUser($id){
        $this_db = $this->DB;
        //set parameter

        //connect DB
        $this->connect();
        $sql = "DELETE FROM $this_db WHERE id=:id";
        $params= array(':id'=> $id);
        $rowUpdate = $this->update($sql,$params);
        //close DB
        $this->close();


        return $rowUpdate;
    }

    function selectByStatus($status=''){
        $this_db = $this->DB;
        //set parameter

        //connect DB
        $this->connect();
        $sql = "SELECT * FROM $this_db WHERE status=:status";
        $params= array(':status'=> $status);
        $result = $this->queryAll($sql,$params);
        //close DB
        $this->close();


        return $result;
    }


}