

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>json table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
        $users = json_decode(file_get_contents(__DIR__.'/books.json'), true);
    ?>
    <div class="ok pl-3">
        <div class="di">
            <div class = "mt-3">
                <a href="./create.php" class = "btn btn-sm btn-warning">Create New Book</a>
            </div>
            <form class = "mt-3 fr" action="search.php" method="get">
                <input type="search" id="Search" name = "Search">
                <button type="submit" class  ="btn btn-primary">Search</button>

                <!-- <a href="./search.php">Search</a> -->
            </form>
        </div>
        <table class="table">
                <thead>
                    <tr>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Available</th>
                        <th>Pages</th>
                    </tr>
                </thead>
                <?php 
            
                foreach ($users as $user): ?>
                    <tr>
                        <td> <?php echo $user['title'] ?></td>
                        <td> <?php echo $user['author'] ?></td>
                        <td> <?php echo $user['available'] ?></td>
                        <td> <?php echo $user['pages'] ?></td>
                        <td>
                            <a href='./view.php?isbn=<?php echo $user['isbn'] ?>' class = "btn btn-sm btn-success">View</a>
                            <a href='./delete.php?isbn=<?php echo $user['isbn'] ?>' class = "btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;; ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>