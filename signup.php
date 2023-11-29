<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Signup</h1>
    <form id="signupForm" action="home.php" method="post" onsubmit="return validateForm()">
      <input type="text" id="username" name="username" placeholder="Username" required>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
      <button type="submit">Signup</button>
    </form>
    <!-- <p>Already a Member? <a href="/reminder">Login</a></p> -->
  </div>
  <script src="script1.js"></script>
  <script>
    function validateForm() {
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;
      var confirm_password = document.getElementById('confirm_password').value;

      if (password !== confirm_password) {
        alert("Password and Confirm Password do not match");
        return false;
      }

      

      return true;
    }
  </script>
</body>
</html>
