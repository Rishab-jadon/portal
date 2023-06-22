<!DOCTYPE html>

<html lang="en" dir="ltr">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.0-beta.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.1.135/jspdf.min.js"></script>
<script type="text/javascript" src="http://cdn.uriit.ru/jsPDF/libs/adler32cs.js/adler32cs.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2014-11-29/FileSaver.min.js
"></script>
<script type="text/javascript" src="libs/Blob.js/BlobBuilder.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.addimage.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.standard_fonts_metrics.js">
</script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.split_text_to_size.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.from_html.js"></script>
<script type="text/javascript" src="js/basic.js"></script>

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
            margin: 0 0 16px;
        }

        input[type=email],
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
            border: 1px solid rgb(70, 68, 68);
            padding: 15px;
            height: 42px;
            width: 360px;
            margin: 20px 60px;
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
        
        
        <?php  
            //Select query 

                $conn=mysqli_connect('localhost','root','','workshop_portal');
                $select = "SELECT * FROM applied WHERE applied_workshop='Data science'";
                $result = $conn->query($select);
                ?>
        <div class="container">

            <div id="target">
                <style>
                h2 {
                    text-align: center;
                }
                </style>



                <h2>Applied for Workshops</h2>
              


                <?php   
                        // Loop the employee data
                        //echo '<table class="table table-bordered">';
                        while($row = $result->fetch_object()){
                        echo '<b>Particpant Name:</b>'.'&nbsp'
                        .$row->applied_name.'<br>'
                        .'<b>Workshop:</b>'.'&nbsp'
                        .$row->applied_workshop.'<br>'.'<p class="big"><br></p>';
                       
                        }
                  
                        ?>




            </div>
        </div>

        <div id="editor"></div>
        <button class= "button" id="cmd" >Download</button>
        <!-- download pdf data -->
        <script>
        $(function() {

            var specialElementHandlers = {
                '#editor': function(element, renderer) {
                    return true;
                }
            };
            $('#cmd').click(function() {
                var doc = new jsPDF();
                doc.fromHTML(
                    $('#target').html(), 5, 5, {
                        'width': 120,
                        'elementHandlers': specialElementHandlers
                    },
                    function() {
                        doc.save('attendance.pdf');
                    }
                );

            });
        });
        </script>

        <h2>Post Attendance</h2>
        <div class="container">
            <form action="/portal/admin/attdb.php" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="sname">Student Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="sname" name="sname" placeholder="Student name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="email">Student Mail Id</label>
                    </div>
                    <div class="col-75">
                        <input type="email" id="email" name="email" placeholder="Student mail id..">
                    </div>
                </div>
                <div class="input-field">
                    <label>Attendance</label>
                    <input type="number" id="no" name="no" placeholder="give attendance" required>
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

