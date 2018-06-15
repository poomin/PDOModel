<?php
/**
 * Created by PhpStorm.
 * User: EPOP
 * Date: 6/14/2018
 * Time: 3:07 PM
 */

require_once __DIR__.'/../model/Student.php';
$modelStudent = new Student();

$fn = isset($_REQUEST['fn'])?$_REQUEST['fn']:'';

if($fn=='addStudent'){

    $user_id = $modelStudent->input('user_id');
    $class = $modelStudent->input('class');
    $year = $modelStudent->input('year');
    $parent = $modelStudent->input('parent');
    $status = $modelStudent->input('status','learn');

    $year = ($year>2500)?$year-543:$year;

    $input = [
        'user_id'=>$user_id,
        'class'=>$class,
        'year'=>$year,
        'parent'=>$parent,
        'status'=>$status,
    ];

    $result = $modelStudent->insertStudent($input);
    if($result>0){
        echo "Id insert:".$result;
    }else{
        echo "error";
    }

}

elseif($fn=='addStudentList'){

    $student_list_id = $modelStudent->input('student_list'); //1,2,3,4
    $class = $modelStudent->input('class');
    $year = $modelStudent->input('year');

    $result = $modelStudent->insertStudentList($student_list_id,$class,$year);

    if($result>0){
        echo "Id insert:".$result;
    }else{
        echo "error";
    }


}

elseif($fn=='editStudent'){

    $id = $modelStudent->input('id');
    $parent = $modelStudent->input('parent');
    $input = ['parent'=>$parent];

    $result = $modelStudent->editStudent($input,['id'=>$id]);
    if($result>0){
        echo "Count Edit:".$result;
    }else{
        echo "Error";
    }

}

elseif ($fn=='deleteStudent'){
    $id = $modelStudent->input('id');

    $result = $modelStudent->deleteStudent($id);

    if($result>0){
        echo "Count delete:".$result;
    }else{
        echo "error";
    }
}

