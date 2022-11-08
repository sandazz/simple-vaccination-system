<?php
session_start();
include("dbs.php");

$query = "SELECT * FROM smartvaccination WHERE status ='requested';";
$result = $connect->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>smart vaccination MOH</title>
</head>
<body>
<?php 
include("navbar.php") ?>
    
    <table border ='1'>
        <tr>
            <th>NIC</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Mobile No</th>
        </tr>
<?php
while($row = $result->fetch_assoc()){
    ?>
        <tr>
            <td><?php echo $row["nic"] ?></td>
            <td><?php echo $row["fname"] ?></td>
            <td><?php echo $row["lname"] ?></td>
            <td><?php echo $row["address"] ?></td>
            <td><?php echo $row["mobile"] ?></td>
            <td><a href="backend/smart-vaccination-moh-back.php?status=veiw&vaccinationId=<?php echo $row['vaccination_id'] ?>"><button>veiw</button></a></td>
            <td><a href="backend/smart-vaccination-moh-back.php?status=approved&vaccinationId=<?php echo $row['vaccination_id'] ?>"><button>Approve</button></a></td>
            <td><a href="backend/smart-vaccination-moh-back.php?status=rejected&vaccinationId=<?php echo $row['vaccination_id'] ?>"><button>Reject</button></a></td>
        </tr>
<?php
}
?>
    </table>




</body>
</html>