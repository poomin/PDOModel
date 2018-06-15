<?php

/**
 * Created by PhpStorm.
 * User: EPOP
 * Date: 6/15/2018
 * Time: 2:27 PM
 */
require_once __DIR__.'/../model/_DBPDO.php';

class DateCheck extends _DBPDO
{
    public $DB = "date_check";

    function insertCheck($input){
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

    //list = 'student_id:check_status,1:come,2:late, ... '
    function insertCheckList($list , $date){
        $this_db = $this->DB;
        //connect DB
        $this->connect();
        $count = 0;
        $list = explode(',',$list);

        foreach ($list as $item){
            $count++;
            $cut = explode(":",$item);
            $student_id = $cut[0];
            $check_status = $cut[1];

            $sql = "INSERT INTO $this_db (student_id,date_at,check_status)
            VALUES (:student_id,:date_at,:check_status)";
            $params = [
                'student_id'=>$student_id,
                'check_status'=>$check_status,
                'date_at'=>$date
            ];
            $lastId = $this->insert($sql,$params);

            if($lastId<=0){
                $sql = "UPDATE $this_db SET check_status=:check_status 
                WHERE student_id=:student_id AND date_at=:date_at";
                $params = [
                    'student_id'=>$student_id,
                    'check_status'=>$check_status,
                    'date_at'=>$date
                ];
                $result = $this->update($sql,$params);
            }


        }

        //close DB
        $this->close();
        return $count;
    }

    function updateCheck($input , $condition){
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

    function deleteCheck($id){
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

}