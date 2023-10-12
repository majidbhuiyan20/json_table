
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="main form">
        <div class="forum">
            <p>Enter Book Informations</p>
            <form action="add.php" method = "get" class="form-group">
               <div class="form-group">
                 <div class="name">
                    <label for="Atitle">Title</label>
                    <input id="Atitle" type="text" name="title" placeholder="Enter Book Title" required>
                </div>
                <div class="pass">
                    <label for="Aname">Author's Name</label>
                    <input id="Aname" type="text" name="author" placeholder="Enter Author Name" required>
                </div>
                <div class="pass">
                    <label for="Aase">Avaiable</label>
                    <input id="Aase" type="number" name="available" placeholder="How many book avilable" required>
                </div>
                <div class="pass">
                    <label for="Apage">Page</label>
                    <input id="Apage" type="number" name="pages" placeholder="Enter Page Number" required>
                </div>
                
               </div>
                <input class = "btn-success" type="submit" aria-label="submit">
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


