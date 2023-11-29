<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <form action="home.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <div style="display:flex;justify-content:space-evenly;align-items:center;">

        <button type="submit" style="width:5rem">Login</button>
        
        <button type="reset" style="width:5rem">cancel</button>
      </div>
    </form>
    <!-- <p>Not a Member? <a href="signup.php">Signup</a></p> -->
  </div>
  <script src="script1.js"></script>
</body>
</html>
