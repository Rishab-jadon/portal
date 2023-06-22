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
                    <span class="links_name">Create Workshop</span>
                </a>
                <span class="tooltip">Create Workshop</span>
               
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