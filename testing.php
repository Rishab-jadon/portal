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
        <style>
      
        p.big {
            line-height: 1.8;
        }
        .button{
    
            background-color: rgb(37, 116, 161);
            color: white;
            padding: 10px 30px;
            border: none;
            border-radius: 44px;
            cursor: pointer;
            float: left;
            position: absolute;
            left: 1%;
        }

        .button:hover {
            background-color: #45a049;
        }

        .dropbtn {
      background-color: green;
      color: white;
      margin: -200px 700px 60px ;
      font-size: 16px;
      cursor: pointer;
      padding: 4px 14px 4px 14px;
    }
    
    .dropbtn:hover {
      background-color: brown;
    }
    
    .dropdown {
      position: relative;
      display: inline-block;

    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: white;
      margin: -118px 719px -40px ;
      min-width: 140px;
      overflow: auto;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    }
    
    .dropdown-content a {
      color: black;
      padding: 4px 12px;
      text-decoration: none;
      display: block;
    }
    
    .dropdown a:hover {
       background-color: #ddd;
     }
    
    .show {
      display: block;
    }
        
        </style>

        <!-- <?php  
            //Select query 

                $conn=mysqli_connect('localhost','root','','workshop_portal');
                $select = "SELECT * FROM applied WHERE applied_workshop='AI'";
                $result = $conn->query($select);
                ?>
        <div class="container">

            <div id="target">
                <style>
                h2 {
                    text-align: center;
                }
                </style> -->

<script>
    /* methods to hide and show the dropdown content */
    function programmingList() {
      document.getElementById("myDropdown1").classList.toggle("show");
    }
    
    
    /* methods to redirect to tutorial page that user will select from dropdown list */
    function java() {
       window.location.replace("http://localhost:8080/portal/admin/co_attendance2.php");
    }
    function python() {
       window.location.replace("https://www.javatpoint.com/python-tutorial");
    }
    function cpp() {
       window.location.replace("https://www.javatpoint.com/cpp-tutorial");
    }
    function c() {
       window.location.replace("https://www.javatpoint.com/c-programming-language-tutorial");
    }
    
    
    
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>

                <h2>Applied for Workshops</h2>
              
    
                    <div class="dropdown" >
                        <div class="container text-center mx-50">
                           <button onclick="programmingList()" class="dropbtn">Workshop</button>
                        </div>
                    <div id="myDropdown1" class="dropdown-content">
                        <a href="#AI" onclick="java()">AI</a>
                        <a href="#python" onclick="python()">Machine Learning</a>
                        <a href="#c++" onclick="cpp()">Data Science</a>
                        <a href="#c" onclick="c()">Others</a>
                    </div>
                    </div>


                <!-- <?php   
                        // Loop the employee data
                        //echo '<table class="table table-bordered">';
                        while($row = $result->fetch_object()){
                        echo '<b>Particpant Name:</b>'.'&nbsp'
                        .$row->applied_name.'<br>'
                        .'<b>Workshop:</b>'.'&nbsp'
                        .$row->applied_workshop.'<br>'.'<p class="big"><br></p>';
                       
                        }
                  
                        ?> -->




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

<!-- following are for drop down+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->




    <html>
    <head>
    <style>
    .dropbtn {
      background-color: green;
      color: white;
      padding: 14px;
      font-size: 16px;
      cursor: pointer;
    }
    
    .dropbtn:hover {
      background-color: brown;
    }
    
    .dropdown {
      position: relative;
      display: inline-block;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: white;
      min-width: 140px;
      overflow: auto;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    }
    
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    
    .dropdown a:hover {
       background-color: #ddd;
     }
    
    .show {
      display: block;
    }
    </style>
    </head>
    <body>
    
    <h2>List of tutorials using Dropdown menu</h2>
    <p>Click on the button to open the tutorial dropdown menu.</p>
    
    <div class="dropdown">
      <button onclick="programmingList()" class="dropbtn">Programming</button>
      <div id="myDropdown1" class="dropdown-content">
        <a href="#AI" onclick="java()">AI</a>
        <a href="#python" onclick="python()">Machine Learning</a>
        <a href="#c++" onclick="cpp()">Data Science</a>
        <a href="#c" onclick="c()">Others</a>
      </div>
    </div>
    
    
    <script>
    /* methods to hide and show the dropdown content */
    function programmingList() {
      document.getElementById("myDropdown1").classList.toggle("show");
    }
    
    
    /* methods to redirect to tutorial page that user will select from dropdown list */
    function java() {
       window.location.replace("http://localhost:8080/portal/testing.php");
    }
    function python() {
       window.location.replace("https://www.javatpoint.com/python-tutorial");
    }
    function cpp() {
       window.location.replace("https://www.javatpoint.com/cpp-tutorial");
    }
    function c() {
       window.location.replace("https://www.javatpoint.com/c-programming-language-tutorial");
    }
    
    
    
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>
    
    </body>
    </html>
    
     
    