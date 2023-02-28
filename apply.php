<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="menu.css">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="Rg.css">

    <!-- --===== Iconscout CSS =====
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> -->


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
                <a href="/portal/details.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name">General Details</span>
                </a>
                <span class="tooltip">General details</span>
            </li>
            <li>
                <a href="/portal/workshop.php">
                    <i class='bx bx-data'></i>
                    <span class="links_name">Workshops</span>
                </a>
                <span class="tooltip">Workshops</span>

            </li>
            <li>
                <a href="/portal/feed.php">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Feedback</span>
                </a>
                <span class="tooltip">Feedback</span>

            </li>
            <li>
                <a href="/portal/attendance.php">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Attendence</span>
                </a>
                <span class="tooltip">Attendence</span>
            </li>
            <li>
                <a href="/portal/applied.php">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">Applied workshops</span>
                </a>
                <span class="tooltip">Applied workshops</span>
            </li>



            <li class="profile">
                <div class="profile-details">
                    <!--<img src="profile.jpg" alt="profileImg">-->
                    <div class="name_job">
                        <div class="name">TEAM POWER</div>
                        <div class="job">Web designer</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text">Dashboard</div>
        <div class="container">

            <form action="/portal/partials/applydb.php" method="post">
                <div class="form first">
                    <div class="details personal">
                        <span class="title">Participant Details</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Full Name</label>
                                <input type="text" id="name" name="name" placeholder="Enter your name" required>
                            </div>

                            <div class="input-field">
                                <label>Date of Birth</label>
                                <input type="date" id="date" name="date" placeholder="Enter birth date" required>
                            </div>

                            <div class="input-field">
                                <label>Email</label>
                                <input type="text" id="email" name="email" placeholder="Enter your email" required>
                            </div>

                            <div class="input-field">
                                <label>Mobile Number</label>
                                <input type="number" id="mno" name="mno" placeholder="Enter mobile number" required>
                            </div>
                            <!-- add workshop names for new workshops  -->
                            <div class="input-field">
                                <label>workshop</label>
                                <select id="work" name="work" required>
                                    <option disabled selected>Select workshop</option>
                                    <option>AI</option>
                                    <option>ML</option>
                                    <option>Others</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label>Gender</label>
                                <select id="gender" name=" gender" required>
                                    <option disabled selected>Select gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Others</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Submit</span>

                    </button>
                </div>
        </div>


        </div>
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
     <!-- <?php require "partials/footer.php"; ?> -->
</body>

</html>