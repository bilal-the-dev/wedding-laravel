<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Festivo Sign Up</title>
    <style>
      body {
        font-family: sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #f5f5f5;
      }

      .container {
        background-color: #fff;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 350px;
      }

      h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
      }

      input[type="text"],
      input[type="email"],
      input[type="password"] {
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      button {
        background-color: #f44336;
        color: white;
        padding: 12px 20px;
        margin: 10px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
      }

      button:hover {
        opacity: 0.9;
      }

      .social-login {
        text-align: center;
        margin-top: 20px;
      }

      .social-login button {
        background-color: #fff;
        color: #333;
        border: 1px solid #ccc;
        padding: 10px 20px; /* Fixed missing semicolon */
        margin: 5px;
        border-radius: 4px;
        cursor: pointer;
      }

      .social-login button:hover {
        background-color: #f0f0f0;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <h2>Sign Up</h2>
      <form id="signup-form">
        <input type="text" id="username" placeholder="Username" required />
        <input type="email" id="email" placeholder="Email" required />
        <input type="password" id="password" placeholder="Password" required />
        <button type="submit">Create Account</button>
      </form>
      <div class="social-login">
        <p>Or sign up with</p>
        <button id="google-signup">Google</button>
        <button id="facebook-signup">Facebook</button>
      </div>
    </div>
    <script>
      document
        .getElementById("signup-form")
        .addEventListener("submit", function (event) {
          event.preventDefault();
          const username = document.getElementById("username").value;
          const email = document.getElementById("email").value;
          const password = document.getElementById("password").value;

          console.log("User signed up with:", { username, email, password });

          // Redirect to the next page after successful sign-up
          window.location.href = "welcome page.html"; // Change '---.html' to your desired URL
        });

      document
        .getElementById("google-signup")
        .addEventListener("click", function () {
          alert("Google sign up is not implemented yet.");
        });

      document
        .getElementById("facebook-signup")
        .addEventListener("click", function () {
          alert("Facebook sign up is not implemented yet.");
        });
    </script>
  </body>
</html>
