<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


session_start();


$servername = "localhost";
$username = "todo_user";
$password = "todo123";
$database = "todo_app";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['add'])) {
    $task = trim($_POST['task']);
    if ($task != "") {
        $stmt = $conn->prepare("INSERT INTO tasks (description) VALUES (?)");
        $stmt->bind_param("s", $task);
        $stmt->execute();
        $stmt->close();
    }
}

if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();


    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}


$result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");
$tasks = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $tasks[] = $row;
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TodoApp with MySQL</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            justify-content: center;
        }

        .container {
            width: 500px;
            padding: 40px;
            border: 6px solid lightblue;
            border-radius: 10px;
            margin: 45px auto;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            padding: 8px;
            margin-bottom: 5px;
            background-color: lightblue;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        a {
            text-decoration: none;
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h4>To Do List:</h4>

    <form method="post">
        <input type="text" name="task" placeholder="Enter Task..." />
        <button type="submit" name="add">Add</button>
    </form>

    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?= htmlspecialchars($task['description']) ?>
                <a href="?delete=<?= $task['id'] ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

</body>
</html>



