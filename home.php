<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("select * from users")

?>
<!DOCTYPE html>
<html>

<head>
    <title>Reminder Application</title>
    <style>
    body {
        font-family: sans-serif;
        margin: 0;
    }

    .container {
        width: 500px;
        margin: 0 auto;
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .reminder {
        border: 1px solid black;
        padding: 10px;
        margin-bottom: 10px;
    }

    .title {
        font-size: 16px;
        font-weight: bold;
    }

    .date {
        font-size: 14px;
    }

    .description {
        font-size: 12px;
    }

    .buttons {
        text-align: center;
    }

    button {
        background-color: #6666ff;
        color: #fff;
        padding: 10px;
        border: 1px solid #ccc;
        margin-bottom: 10px;
    }

    a {
        color: #6666ff;
    }
    </style>

</head>

<body>
    <div class="container">
        <div class="header">
            <?php
  
    $username = $_POST['username'];
    $password = $_POST['password'];
  
  // Assuming $username and $password are sanitized and validated before use
  $sql = "SELECT * FROM users WHERE username='" . $username . "' AND password='" . $password . "'";
    // Execute the query
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id = $row['id'];

    setcookie("id", $id, time() + 3600, "/"); 
   
    ?>
            <h1>Reminder Application</h1>
            <h2>Welcome, <?php echo $row['username']; ?></h2>
            <h3>Today is <span id="date"></span></h3>
        </div>
    </div>

    <div style="height:60vh;display:flex;justify-content:evenly; flex-direction:column;align-items:center;">
        <h3><a href="set.php"> Set Reminder Screen </a></h3>
        <h3><a href="delete.php"> Modify Reminder</a></h3>
        <h3><a href="disable.php"> Disable Reminder</a></h3>
        <h3><a href="enable.php">Enable Reminder</a></h3>
        <h3><a href="index.php">Delete Reminder </a></h3>
        <h3><a href="modify.php"> View Your Reminder</a></h3>
        <!-- <h3><a href="view.php"> view all reminder</a></h3> -->
    </div>
    <div style="display:flex;justify-content:space-evenly;align-items:center;">

        <button type="submit" style="width:5rem;">back</button>

        <button type="reset" style="width:5rem">logout</button>
    </div>
    <script>
    // This script will handle the logic for the buttons
    const buttons = document.querySelectorAll('button');
    document.getElementById("date").innerHTML = new Date().toDateString();
    buttons.forEach(button => {
        button.addEventListener('click', () => {});
    }); <
    /> < /
    body >

        <
        /html>