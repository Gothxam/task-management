<?php
include 'db.php';

$query = "SELECT * FROM tasks ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <link href="style.css" rel="stylesheet">
    </head>
<body>
    
    <div class="contain">
    <h1>Task Manager</h1>
    <div class="task">
    <hr><hr></div>
    <div class="button-container">
    <button class="button"><a href="add_task.php">Add New Task</a></button>
    </div>
    <hr>
    <h2>Task List</h2>
    <hr>
    <ul class="grid">
        <?php while ($task = mysqli_fetch_assoc($result)) { ?>
            <li>
                <strong><?php echo $task['title']; ?></strong><br>
                <?php echo $task['description']; ?><br>
                <div class="button2">
                <a class="edit" href="edit_task.php?id=<?php echo $task['id']; ?>">Edit</a>
                <a class="delete" href="delete_task.php?id=<?php echo $task['id']; ?>">Delete</a>
                </div>
            </li>
        <?php } ?>
    </ul>
    </div>
</body>
</html>
