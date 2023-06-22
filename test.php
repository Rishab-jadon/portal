<?php
error_reporting(0);
 
$msg = "";
 
// If upload button is clicked ...
if (isset($_POST['upload'])) {
     
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $filename;
 
    $db = mysqli_connect("localhost", "root", "", "workshop_portal");
    $email=$_POST['email'];
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO image (filename,participant_email) VALUES ('$filename','$email')";
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<div class='alert alert-success'>
    <strong>Success!</strong>Image uploaded successfully!
  </div>";
        //  echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<div class='alert alert-warning'>
        <strong>Warning!</strong> Failed to upload image!
      </div>";
    }
}
?>
 
<!DOCTYPE html>
<html>
 
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="menu.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #3f0303de;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        
        .container {
            max-width: 650px;
            max-height: 800px;
            margin: 265px auto;
            padding: 30px;
            border: 1px solid #e2e2e2;
            border-radius: 30px;
            background-color: #0a47c078;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .form-group {
            margin-bottom: 30px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
            font-weight: bold;
            color: #555;
        }
        
        .form-group input[type="file"] {
            padding: 4px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f6f6f6;
            color: #555;
            font-size: 14px;
            transition: border-color 0.3s ease;
            width: 100%;
            box-sizing: border-box;
        }
        
        .form-group input[type="file"]:focus {
            outline: none;
            border-color: #66afe9;
        }
        
         .form-group input[type="email"] {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f6f6f6;
            color: #555;
            font-size: 14px;
            transition: border-color 0.3s ease;
            width: 100%;
            box-sizing: border-box;
        }
        
        .form-group input[type="file"]:focus {
            outline: none;
            border-color: #66afe9;
        }
        
        .form-group input[type="submit"] {
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            background-color: #428bca;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            box-sizing: border-box;
        }
        
        .form-group input[type="submit"]:hover {
            background-color: #3276b1;
        }
        
        @media screen and (max-width: 480px) {
            .container {
                padding: 20px;
            }
        }
    </style>
 
<body>

        
                <div class="container mt-20" id="content">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="image" style="color:white;">Select an image:</label>
                            <input class="form-control" type="file" name="uploadfile" value="" />
                        </div>
                        <div class="from-group">
                        <label for="email" style="color:white;">Email Address:</label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Enter your Email" required>
                            </div>
                        <div class="text-center mt-2">
                            <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
                        </div>
                    </form>
                </div>
                <!-- <div id="display-image">
                    <?php
                    $query = " select * from image ";
                    $result = mysqli_query($db, $query);
            
                    while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                        <img src="./image/<?php echo $data['filename']; ?>">
            
                    <?php
                    }
                    ?>
                </div> -->
    
    <?php require "ftr.php"; ?>
</body>
 
</html>