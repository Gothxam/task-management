<?php
include 'db.php';

$id = $_GET['id'];
$query = "SELECT * FROM tasks WHERE id = $id";
$result = mysqli_query($conn, $query);
$task = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $update_query = "UPDATE tasks SET title = '$title', description = '$description' WHERE id = $id";
    mysqli_query($conn, $update_query);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form method="POST" action="">
        <label>Title:</label><br>
        <input type="text" name="title" value="<?php echo $task['title']; ?>" required><br><br>
        <label>Description:</label><br>
        <textarea name="description"><?php echo $task['description']; ?></textarea><br><br>
        <button type="submit">Update Task</button>
    </form>
</body>
</html>
