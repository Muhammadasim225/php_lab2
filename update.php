<?php 
include "db.php";
$name='';
$Sr_no='';
$expiry_date='';
$price='';


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $expiry_date=$_POST['exp_dte'];
    $price=$_POST['price'];
    $Sr_no=$_POST['Sr_no'];
    $img=$_POST['image'];
    $sqwl = "UPDATE `product` SET `Name`='$name', `Expiry_date`='$expiry_date', `Price`='$price' , `file`='$img' WHERE `Sr_no`='$Sr_no'";

$ikek=mysqli_query($conn,$sqwl);
if($ikek){
    header("Location: view1.php"); 
    exit();
}
else{
  echo "Error on updating the data";
  echo "<br>";
}
}
if(isset($_GET['Sr_no'])){
    $Sr_no=$_GET['Sr_no'];
    $sql = "SELECT * FROM `product` WHERE `Sr_no`='$Sr_no'";
    $ssa = mysqli_query($conn, $sql);
    $epq = mysqli_num_rows($ssa);

    if($epq > 0){
        while($fff = mysqli_fetch_assoc($ssa)){
            $name = $fff['Name'];
            $expiry_date = $fff['Expiry_date'];
            $price = $fff['Price'];
            $img=$fff['file'];
        }
    }
}
else{
    echo "Error on displaying the data";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: auto;
        }
        input[type="text"],
        input[type="date"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<form action="" method="POST">

    <input type="hidden" name="Sr_no" value="<?php echo $Sr_no; ?>">
        Name: <input type="text" name="name" value=<?php echo $name; ?>><br>
        Expiry Data: <input type="date" name="exp_dte" id="expp"  value=<?php echo $expiry_date; ?>><br>
        Price: <input type="text" name="price"  value=<?php echo $price; ?>><br>
        File: <input type="file" name="image"><br> <!-- File input field -->
        <input type="submit" value="update" name="submit">
    </form>
</body>
</html>