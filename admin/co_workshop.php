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
                    <span class="links_name">Create Workshops</span>
                </a>
                <span class="tooltip">Create Workshops</span>

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
        <style>
        * {
            box-sizing: border-box;
        }

        h2 {
            text-align: center;

        }

        input[type=text],
        select,
        textarea {
            width: 30%;
            padding: 12px;
            border: 1px solid rgb(70, 68, 68);
            border-radius: 4px;
            resize: vertical;
        }

        .input-field input,
        select {
            outline: none;
            font-size: 14px;
            font-weight: 400;
            color: #333;
            border-radius: 5px;
            border: 1px solid #aaa;
            padding: 15px;
            height: 42px;
            width: 360px;
            margin: 20px 30px;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: rgb(37, 116, 161);
            color: white;
            padding: 12px 70px;
            border: none;
            border-radius: 44px;
            cursor: pointer;
            float: left;
            position: absolute;
            left: 41%;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px 20px 60px;
        }

        .col-25 {
            float: left;
            width: 10%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        </style>
        <div class="container">
            <h2 class="text-center my-3">Workshops</h2>
            <div class="row">
                <?php
                    $conn=mysqli_connect('localhost','root','','workshop_portal');
                    $sql='select * from workshop';
                    $result=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($result)){
                        echo ' <div class="col-md-2 my-1">
                        <div class="card" style="width: 18rem;">
                            
                            <div class="card-body">
                            
                            <h3 class="card-title">'.$row['workshop_name'].'<a href="/portal/admin/delete.php?wid='.$row['workshop_id'].'"> Delete</a></h3>
                            <h4 class="card-title">End Date '.$row['workshop_date'].'</h4>
                                
                                <br>
                                </div>
                            </div>
                        </div>';


                     }
            
                ?>
            </div>
        </div>
  

        <h2>Create Workshop </h2>
        <div class="container">
            <form action="/portal/admin/wdb.php" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="wname">Workshop Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="wname" name="wname" placeholder="workshop name..">
                    </div>
                </div>
                <div class="input-field">
                    <label>Workshop Date</label>
                    <input type="date" id="wdate" name="wdate" placeholder="Enter workshop date" required>
                </div>
                <div class="text-center">
                    <input type="submit" value="Submit">
                </div>
            </form>
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