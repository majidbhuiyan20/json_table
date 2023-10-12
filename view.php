<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<?php
 require __DIR__.'/users.php';

    $userId = $_GET['isbn'];
    $user = getUserById($userId);

    

?>
<table class = "table">
    <tbody>
        <tr>
            <th>Book Title : </th>
            <td> <?php echo $user['title'] ?> </td>
        </tr>
        <tr>
            <th>Author:</th>
            <td> <?php echo $user['author'] ?> </td>
        </tr>
        <tr>
            <th>Available:</th>
            <td> <?php echo $user['available'] ?> </td>
        </tr>
        <tr>
            <th>Pages:</th>
            <td> <?php echo $user['pages'] ?> </td>
        </tr>
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>