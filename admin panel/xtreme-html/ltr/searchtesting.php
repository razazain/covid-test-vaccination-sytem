<?php
include('conn.php');

function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "covid_db");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `patient_detail` WHERE CONCAT (`patient_id`,`patient_name`,`patient_address`,`patient_city`,`patient_num`,`patient_email`,`patient_age`,`patient_img`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `patient_detail`";
    $search_result = filterTable($query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>
</head>
<body>
    
</body>
</html>
<form action="searchtesting.php" method="post">
<input type="text" name="valueToSearch" placeholder="Value To Search">
<input type="submit" name="search" value="Filter">

<table>
<tr>
        <th>PATIENT ID</th>
        <th>PATIENT NAME</th>
        <th>PATIENT ADDRESS</th>   
        <th>PATIENT CITY</th>   
        <th>PATIENT NUMBER</th>   
        <th>PATIENT EMAIL</th>   
        <th>PATIENT AGE</th>
        <th>PATIENT IMAGE</th>
        <th>ACTION</th>
    </tr>

<!-- populate table from mysql database -->
    <?php while($row = mysqli_fetch_array($search_result)):?>
    <tr>
        <td><?php echo $row['patient_id'];?></td>
        <td><?php echo $row['patient_name'];?></td>
        <td><?php echo $row['patient_address'];?></td>
        <td><?php echo $row['patient_city'];?></td>
        <td><?php echo $row['patient_num'];?></td>
        <td><?php echo $row['patient_email'];?></td>
        <td><?php echo $row['patient_age'];?></td>
        <td> <img src='./img_rec/$row[patient_img]' width='100px' height='100px'> </td>
        <td><div class='dropdown dropdown-action'>
												<a href='#' class='action-icon dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a>
												<div class='dropdown-menu dropdown-menu-right'>
													<a class='dropdown-item' href='edit_pateint_detail.php?pid=$row[patient_id]'><i class='fa fa-pencil m-r-5'></i>Edit</a>
													<a class='dropdown-item' href='delete_pateint_detail.php?pid=$row[patient_id]'><i class='fa fa-trash-o m-r-5'></i>Delete</a>
												</div>
											</div></td>
    </tr>
    <?php endwhile;?>
</table>
</form>