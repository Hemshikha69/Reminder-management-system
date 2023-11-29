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

$id= $_COOKIE['id'] || 0;

if($id==0)
    die("Invalid cookie")
?>



<!DOCTYPE html>
<html>
<head>
  <title>Notebook Reminders</title>
  <link rel="stylesheet" href="file.css">
  <script src="script2.js"></script>
</head>
<body>
  <div class="container">
    <header>
      <h1>View your Reminders</h1>
    </header>
    <main>
      <form action="#">
        <div class="form-row">
          <label for="start-date">Select from date:</label>
          <input type="date" name="start-date" id="start-date">
        </div>
        <div class="form-row">
          <label for="end-date">Select To Date:</label>
          <input type="date" name="end-date" id="end-date">
        </div>
        <div class="form-row">
          <label for="subject">Subject:</label>
          <select name="subject" id="subject">
            <option value="">All</option>
            <option value="work">Work</option>
            <option value="personal">Personal</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="form-row">
          <label for="reminder-name">Reminder Name:</label>
          <input type="text" name="reminder-name" id="reminder-name">
        </div>
        <div class="form-row">
          <label for="reminder-description">Reminder Description:</label>
          <textarea name="reminder-description" id="reminder-description"></textarea>
        </div>
        <div class="form-row">
          <label for="email-control">Email:</label>
          <input type="checkbox" name="email-control" id="email-control">
        </div>
        <div class="form-row">
          <label for="sms-control">SMS:</label>
          <input type="checkbox" name="sms-control" id="sms-control">
        </div>
        <button type="submit">Submit</button>
      </form>
    </main>
    <footer>
      <p>Copyright &copy; 2023 Bard</p>
    </footer>
  </div>
</body>
</html>
