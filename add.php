<?php
    include __DIR__.'/users.php';
    $users = getUser();
    $array = array(
        'title' => $_GET['title'],
        'author'=> $_GET['author'],
        'available'=> $_GET['available'],
        'pages'=> $_GET['pages'],
        'isbn'=> $_GET['isbn']
    );
    array_push($users,$array);
    $data_to_save = $users;
    if(!file_put_contents(__DIR__.'/books.json',json_encode($data_to_save,JSON_PRETTY_PRINT),LOCK_EX))
    {
        echo "ERROR to save";
    }
    else
    {
        echo "Successfully saved";
    }
?>