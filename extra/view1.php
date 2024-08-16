<?php
$host = 'localhost';
$dbname = 'studentdb';
$username = 'root';
$password = 'sinchu_123';

$con = mysqli_connect($host,$username,$password,$dbname);
$rqs = "select * from students"; //Retrieve Query String
$rq = mysqli_query($con,$rqs); //Retrieve Query

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <h1>Student Information</h1>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>State</td>
            <td>Phone</td>
            <td>Gender</td>
            <td>Action</td>
            <td>Action</td>
        </tr>
        <?php
            foreach($rq as $eachItem){?>
                <tr>
                    <td><?=$eachItem['Name']?></td>
                    <td><?=$eachItem['EmailID']?></td>
                    <td><?=$eachItem['State']?></td>
                    <td><?=$eachItem['PhoneNumber']?></td>
                    <td><?=$eachItem['Gender']?></td>
                    <td>
                        <form action="view1.php" method="post">
                            <input type="hidden" name="viewId" value="<?=$eachItem['AdharNumber']?>">
                            <button type="submit">View Details</button>
                        </form>
                    </td>
                    <td>
                        <form action="delete.php" method="post">
                            <input type="hidden" name="deleteId" value="<?=$eachItem['AdharNumber']?>">
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php }
        ?>
    </table>
    <hr>
</body>
</html>