<!DOCTYPE html>
<html>

<head>
    <title>Workshop-portal

    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1">

    <link rel="stylesheet" type="text/css" href="workshop.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

    <script>
        $(document).ready(function () {
            $('#icon').click(function () {
                $('ul').toggleClass('show')

            });




        });


    </script>
</head>

<body>
    <nav>

        <img src="piet23.jpg" alt="Paris">

        <label class="logo"><marquee width="67%" direction="right" height="75px"> Poornima Institute Of Engineering & Technology</marquee></label>
        <ul>
            <li><a class="active" href="/portal">Home</a></li>
            <!-- <li><a href="#">About</a></li> -->
            <!-- <li><a href="#">Feedback</a></li> -->
            <!-- <li><a href="login.php">Login </a></li> -->
            <li><a href="/portal/register.php">Signup</a></li>
        </ul>
        <label id="icon">
            <i class="fas fa-bars"></i>
        </label>
    </nav>
    <style>
        body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("/portal/piet1.jpg");

  /* Control the height of the image */
  min-height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position:absolute;
    right: 849px;
    margin: 121px;
    width: 399px;
    height:399px;
    padding: 69px;
    padding-top:50px;
    background-color: #2552849e;;
}

body {
        background-color: #002886bf;
        font-family: Arial, sans-serif;
      }
      .login-container {
        background-color: #FFFFFF;
        border-radius: 1px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        margin: auto;
        margin-top: 50px;
        padding: 20px;
        width: 400px;
      }
      .login-container h2 {
        color: #333333;
        text-align: center;
      }
      .input-group {
        margin-bottom: 29px;
      }
      .input-group label {
        display: block;
        margin-bottom: 4px;
      }
      .input-field input,
    select {
        outline: none;
        font-size: 14px;
        font-weight: 400;
        color: #333;
        border-radius: 44px;
        border: 1px solid #aaa;
        padding: 0 55% 0 15px;
        height: 39px;
        margin: 9px 0;
        margin-bottom: 10px;
    }
      .input-group input {
        border-radius: 20px;
        border: 1px solid #CCCCCC;
        box-sizing: border-box;
        padding: 10px;
        width: 100%;
        margin-top: 0px;
        margin-bottom: -10px;
      }
      .submit-btn {
        background-color: #007BFF;
        border: none;
        border-radius: 20px;
        color: #FFFFFF;
        cursor: pointer;
        font-size: 16px;
        padding: 10px;
        width: 100%;
      }
      .submit-btn:hover {
        background-color: #0069D9;
      }
        </style>

    <div class="bg-img">
    <div class="container">
      <h2 style="text-align:center">Login</h2>
      <form action="/portal/partials/_handlelogin.php" method="post">
      <div class="input-field">
                    <select id="role" name="role" required>
                        <option value="sel">Select role</option>
                        <option value="participant">Participant</option>
                        <option value="coordinator">Co-ordinator</option>
                    </select>
                </div>
        <div class="input-group">
          <label for="username">Username</label>
          <input type="email" id="username" name="username" required>
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="submit-btn">Login</button>
      </form>
    </div>
    </div> 

    <?php require "partials/footer.php"; ?>
</body>

</html>
<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "workshop_portal";

$conn = mysqli_connect($servername, $username, $password, $dbname);
//echo " success";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?> -->