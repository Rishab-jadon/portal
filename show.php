<?php 

// Include configuration file  
// <!-- require ('config.php'); -->
 
//Select query 
session_start();
$conn=mysqli_connect('localhost','root','','workshop_portal');
$select = "SELECT * FROM participants where participant_email=$_SESSION['useremail']";
$result = $conn->query($select);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>General Details</title>

    <link rel="stylesheet" href="#https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
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
</head>

<body>
    <section>
        <h1>General Details</h1>

        <table>



            <tr>
                <th width='200' scope="col">Participant Name</th>
                <th width='200' scope="col">Date of birth</th>
                <th width='200' scope="col">Email</th>
                <th width='200' scope="col">Gender</th>
                <th width='200' scope="col">Phone</th>
            </tr>



            <?php   
			// Loop the employee data
				echo '<table class="table table-bordered">';
				while($row = $result->fetch_object()){
					echo '<tr>'
						.'<td width="283">'.$row->applied_name.'</td>'
						.'<td width="283">'.$row->applied_dob.'</td>'
						.'<td width="283">'.$row->applied_email.'</td>'
						.'<td width="283">'.$row->applied_gender.'</td>'
						.'<td width="283">'.$row->applied_mno.'</td>'
						.'</tr>';
				}
				echo '</table>';
                        ?>
        </table>
    </section>
</body>

</html>