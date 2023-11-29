// Validate the login form
function validateLoginForm() {
    var username = document.getElementById('username');
    var password = document.getElementById('password');
  
    if (username.value === '') {
      alert('Please enter your username.');
      username.focus();
      return false;
    }
  
    if (password.value === '') {
      alert('Please enter your password.');
      password.focus();
      return false;
    }
  
    return true;
  }
  
  // Submit the login form
  function submitLoginForm() {
    var form = document.getElementById('login-form');
  
    if (validateLoginForm()) {
      form.submit();
    }
  }
  