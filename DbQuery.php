<?php
/**
 * Created by PhpStorm.
 * User: Debanik
 * Date: 07-08-2017
 * Time: 00:37
 */

class DbQuery
{
    function insert(mysqli $con, $table_name, $values, $where_clause){
        $value_string = $values[0];
        for($i=1;$i<count($values);$i++){
            $value_string = ",".$value_string.$values[$i];
        }

        $query = "INSERT INTO ".$table_name." VALUES (".$value_string.")"." ".$where_clause;
        $stmt = $con->prepare($query);
        if(!$stmt->execute()){
            $con->rollback();
        }
    }

    function insert_student_meta(mysqli $con, $details){
        $value_string = $details[0];
        for($i=1;$i<count($details);$i++){
            $value_string = ",".$value_string.$details[$i];
        }

        $query = "INSERT INTO ".STDENT_M." VALUES (".$value_string.")";
        $stmt = $con->prepare($query);
        if(!$stmt->execute()){
            $con->rollback();
        }
    }

    function insert_teacher_meta(mysqli $con, $details){
        $value_string = $details[0];
        for($i=1;$i<count($details);$i++){
            $value_string = ",".$value_string.$details[$i];
        }

        $query = "INSERT INTO ".TEACHER_M." VALUES (".$value_string.")";
        $stmt = $con->prepare($query);
        if(!$stmt->execute()){
            $con->rollback();
        }
    }
}

