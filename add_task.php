<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $query = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
    mysqli_query($conn, $query);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
    <link href="at-style.css" rel="stylesheet">
</head>
<body>
    <div class="contain">
    <h1>Add New Task</h1>
    <hr>
    <form  class="form "method="POST" action="">
        <label>Title:</label><br>
        <input type="text" name="title" required><br><br>
        <label>Description:</label><br>
        <textarea name="description"></textarea><br><br>
        <button type="submit">Add Task</button>
    </form>
    </div>
</body>
</html>
