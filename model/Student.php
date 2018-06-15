<?php

/**
 * Created by PhpStorm.
 * User: EPOP
 * Date: 6/14/2018
 * Time: 3:07 PM
 */
require_once __DIR__."/_DBPDO.php";

class Student extends _DBPDO
{
    private $DB = 'student';

    function insertStudent($input){
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

    function insertStudentList($student_list_id,$class,$year){
        $this_db = $this->DB;
        //set parameter
        $count = 0;

        //connect DB
        $this->connect();

        $sql = "SELECT * FROM $this_db WHERE id IN ($student_list_id)";
        $result = $this->queryNoParams($sql);
        foreach ($result as $item){
            $sql = "INSERT INTO $this_db (user_id,class,year,parent)
             VALUES (:user_id,:class,:year,:parent)";
            $params = [
                ':user_id'=>$item['user_id'],
                ':class'=>$class,
                ':year'=>$year,
                ':parent'=>$item['parent']
            ];
            $lastId = $this->insert($sql,$params);
            if($lastId>0){
                $count++;
            }
        }

        //close DB
        $this->close();


        return $count;
    }

    function editStudent($input , $condition){
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

    function deleteStudent($id){
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