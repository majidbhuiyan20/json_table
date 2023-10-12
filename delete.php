<?php
require __DIR__.'/users.php'; 
if (!isset($_GET['isbn'])) {
    echo "ISBN not provided.";
    exit;
}

$isbnToDelete = $_GET['isbn'];

$users = getUser();

$foundIndex = null;
foreach ($users as $index => $user) {
    $ok = $user['isbn'];
    if ($user['isbn'] == $isbnToDelete) {
        $foundIndex = $index;
        break;
    }
}

if ($foundIndex === null) {
    echo "User (book) not found.";
    exit;
}

array_splice($users, $foundIndex, 1);

if (file_put_contents(__DIR__.'/books.json', json_encode($users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES), LOCK_EX)) {
    echo "Successfully deleted.";
} else {
    echo "Error deleting data.";
}
?>
