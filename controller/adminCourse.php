<?php

/**
 * Created by PhpStorm.
 * User: EPOP
 * Date: 6/14/2018
 * Time: 4:55 PM
 */

require_once __DIR__.'/../model/Subject.php';
require_once __DIR__.'/../model/Course.php';

$modelSubject = new Subject();
$modelCourse = new Course();

$fn = isset($_REQUEST['fn'])?$_REQUEST['fn']:'';

if ($fn=='addSubject'){

    $name = $modelSubject->input('name');
    $detail = $modelSubject->input('detail');

    $input = [
        'name'=>$name,
        'detail'=>$detail
    ];

    $result = $modelSubject->insertSubject($input);
    if($result>0){
        echo "Id insert:".$result;
    }else{
        echo "error";
    }
}

elseif ($fn=='editSubject'){

    $id = $modelSubject->input('id','1');
    $name = $modelSubject->input('name','ภาษาไทย');
    $detail = $modelSubject->input('detail');
    $input = ['name'=>$name,'detail'=>$detail];

    $result = $modelSubject->updateSubject($input,['id'=>$id]);
    if($result>0){
        echo "Count Edit:".$result;
    }else{
        echo "Error";
    }
}

elseif ($fn=='deleteSubject'){
    $id = $modelSubject->input('id');

    $result = $modelSubject->deleteSubject($id);

    if($result>0){
        echo "Count delete:".$result;
    }else{
        echo "error";
    }
}

elseif ($fn=='addCourse'){
    $classroom = $modelCourse->input('classroom');
    $subject_id = $modelCourse->input('subject_id');
    $teacher_id = $modelCourse->input('teacher_id');
    $year = $modelCourse->input('year');
    $year = ($year>2500)?$year-543:$year;

    $input = [
        'classroom'=>$classroom,
        'subject_id'=>$subject_id,
        'teacher_id'=>$teacher_id,
        'year'=>$year
    ];

    $result = $modelCourse->insertCourse($input);
    if($result>0){
        echo "Id insert:".$result;
    }else{
        echo "error";
    }
}

elseif ($fn=='editCourse'){
    $id = $modelCourse->input('id');
    $classroom = $modelCourse->input('classroom');
    $subject_id = $modelCourse->input('subject_id');
    $teacher_id = $modelCourse->input('teacher_id');
    $year = $modelCourse->input('year');
    $year = ($year>2500)?$year-543:$year;

    $input = [
        'classroom'=>$classroom,
        'subject_id'=>$subject_id,
        'teacher_id'=>$teacher_id,
        'year'=>$year
    ];

    $result = $modelCourse->updateCourse($input,['id'=>$id]);
    if($result>0){
        echo "Count edit:".$result;
    }else{
        echo "error";
    }
}

elseif ($fn=='deleteCourse'){
    $id = $modelCourse->input('id');

    $result = $modelCourse->deleteCourse($id);
    if($result>0){
        echo "Count delete:".$result;
    }else{
        echo "error";
    }
}