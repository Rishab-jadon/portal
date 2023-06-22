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

// Include configuration file  
// <!-- require ('config.php'); -->
 
//Select query 

$conn=mysqli_connect('localhost','root','','workshop_portal');
session_start();
$usrchk=$_SESSION['useremail'];
$select = "SELECT * FROM cordinator where cordinator_email='$usrchk'";
$result = $conn->query($select);
?>
        <div class="container">

            <style>
            table {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            th,
            td {
                border: 1px solid #ddd;
                padding: 10px;
                text-align: left;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            tr:hover {
                background-color: #ddd;
            }

            th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
            }
            </style>



            <section>
                <h1>General Details</h1>

                <table>


                    <!-- 
            <tr>
                <th width='100' scope="col">Participant Name</th>
                <th width='100' scope="col">Date of birth</th>
                <th width='100' scope="col">Email</th>
                <th width='100' scope="col">Gender</th>
                <th width='100' scope="col">Phone</th>
            </tr> -->



                    <?php   
			// Loop the employee data
				echo '<table class="table table-bordered">';
				while($row = $result->fetch_object()){
					echo '<tr>'.'<th width="100" scope="col">Co-ordinator Name</th>'
						.'<td width="283">'.$row->cordinator_name.'</td>'.'</tr>'

                        .'<tr>'.'<th width="100" scope="col">Co-ordinator Email</th>'
						.'<td width="283">'.$row->cordinator_email.'</td>'.'</tr>'
                        .'<tr>'.'<th width="100" scope="col">Co-ordinator Date of birth</th>'
						.'<td width="283">'.$row->cordinator_dob.'</td>'.'</tr>'
                        .'<tr>'.'<th width="100" scope="col">Co-ordinator Gender</th>'
                        .'<td width="283">'.$row->cordinator_gender.'</td>'.'</tr>'
                        .'<tr>'.'<th width="100" scope="col">Co-ordinator Phone</th>'
                        .'<td width="283">'.$row->cordinator_mno.'</td>'.'</tr>';
				}
				echo '</table>';
                        ?>






                </table>
                <style>
                    .update-button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 20px;
  margin:10px 92%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
}
                    </style>
                <button class="update-button"><a href="/portal/admin/co-editupdate.php">Update</a></button>
            </section>



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