<?php
if(function_exists('not_empty')){
   function not_empty($filds = []){
       if(count($filds) != 0 ){
           foreach($filds as $fild){
               if(empty($_POST[$fild]) || trim($_POST[$fild]) == " "){

                   return false;

               }
           }
           return true;
       }
   }
}
if(function_exists('is_already_in_use')){
    function already_in_use($fild, $value, $table){
        global $db;

        $q = $db->prepare("SELECT id FORM $table WHERE fild = ?");
        $q->execute([$value]);

        $count = $q->rowCount();

        $q->closeCursor();

        return $count;
    }
}
