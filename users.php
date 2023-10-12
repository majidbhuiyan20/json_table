<?php 

    function getUser(){
        return json_decode(file_get_contents(__DIR__.'/books.json'), true);
    }
    function getUserById($id){
        $users = getUser();
        foreach ($users as $user){
            if($user['isbn'] == $id){
                return $user;
            }
        }
        return null;
    }

?>