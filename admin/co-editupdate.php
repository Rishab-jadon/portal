<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/portal/menu.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">


            <div class="logo_name">PIET</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="/portal/admin/profile.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Profile</span>
                </a>
                <span class="tooltip">Profile</span>
            </li>
            <li>
                <a href="/portal/admin/co_workshop.php">
                    <i class='bx bx-data'></i>
                    <span class="links_name">Post Workshops</span>
                </a>
                <span class="tooltip">Post Workshops</span>

            </li>
            <li>
                <a href="/portal/admin/co_attendance.php">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Post Attendence</span>
                </a>
                <span class="tooltip">Post Attendence</span>
            </li>
            <li>
                <a href="/portal/test.php">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Certification</span>
                </a>
                <span class="tooltip">Certification</span>
            </li>


            <li class="profile">
                <div class="profile-details">
                    <!--<img src="profile.jpg" alt="profileImg">-->
                    <div class="name_job">
                        <div class="name">TEAM POWER</div>
                        <div class="job">Web designer</div>
                    </div>
                </div>
                <a href="/portal/admin/_logout.php" class='bx bx-log-out' id="log_out"></a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text">Dashboard</div>


<?php
// start the session
session_start();

// establish a connection to the database
$conn = mysqli_connect("localhost", "root", "", "workshop_portal");

// retrieve the user's data from the database
$usrchk=$_SESSION['useremail'];
$select = "SELECT * FROM cordinator where cordinator_email='$usrchk'";
$result = $conn->query($select);
$user_data = mysqli_fetch_assoc($result);

// display the current user data in a form
echo "<form method='post' style='background-color: #f2f2f2; padding: 20px;'>
<label style='display: inline-block; width: 150px; font-weight: bold;'>Participant Name</label>
<input type='text' name='name' value='" . $user_data['cordinator_name'] . "' style='padding: 5px;'><br>
<label style='display: inline-block; width: 150px; font-weight: bold;'>Date of birth</label>
<input type='text' name='dob' value='" . $user_data['cordinator_dob'] . "' style='padding: 5px;'><br>
<label style='display: inline-block; width: 150px; font-weight: bold;'>Email:</label>
<input type='email' name='email' value='" . $user_data['cordinator_email'] . "' style='padding: 5px;'><br>
<label style='display: inline-block; width: 150px; font-weight: bold;'>Gender</label>
<select name='gender' style='padding: 5px;'>
  <option value='male'>Male</option>
  <option value='female'>Female</option>
  <option value='other'>Other</option>
</select><br>
<label style='display: inline-block; width: 150px; font-weight: bold;'>Phone</label>
<input type='text' name='phone' value='" . $user_data['cordinator_mno'] . "' style='padding: 5px;'><br>
<input type='submit' name='submit' value='Update' style='background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;'>
</form>
";

// if the form is submitted, update the user's data in the database
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];

    $query = "UPDATE cordinator SET cordinator_name='$name',cordinator_dob='$dob', cordinator_email='$email' ,cordinator_gender='$gender', cordinator_mno='$phone' WHERE cordinator_email='$usrchk'";
    mysqli_query($conn, $query);

    echo "User data updated successfully!";
}
?>

</div>
    </section>
    <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
        } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
        }
    }
    </script>
   <?php require "ftr.php"; ?>
</body>

</html>