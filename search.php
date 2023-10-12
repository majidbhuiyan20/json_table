<?php 
    include __DIR__.'/users.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search_result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
        $id = $_GET['Search'];
        $users = getUser();
        $user = getUserById($id);
    
        if(!$user){
            echo "Invalid Id";
            exit;
        }
    ?>
    <div class="ok pl-3">
        <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Available</th>
                        <th>Pages</th>
                    </tr>
                </thead>
                <?php
                    foreach ($users as $ind): ?>
                    <?php 
                        if($ind['isbn'] != $id) continue;
                    ?>
                    <tr>
                        <td> <?php echo $ind['title'] ?></td>
                        <td> <?php echo $ind['author'] ?></td>
                        <td> <?php echo $ind['available'] ?></td>
                        <td> <?php echo $ind['pages'] ?></td>
                    </tr>
                <?php endforeach;; ?>     
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>