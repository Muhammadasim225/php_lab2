<?php

include "db.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $expiry_date = $_POST['exp_dte'];
    $price = $_POST['price'];
    $file_name=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
    $folder = 'Pictures/'.$file_name;
    

    $sql = "INSERT INTO `product` (`Name`, `Expiry_date`, `Price`,`file`) VALUES ('$name', '$expiry_date', '$price','$file_name')";
    // $sql="SELECT * FROM `product`";
    $res = mysqli_query($conn,$sql);

// Move the uploaded file to the destination directory

if ($res) {
    echo "Insertion successful.";
    if (move_uploaded_file($tempname, $folder)) {
        echo "File uploaded successfully.";
        header("Location: view1.php");
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}
} else {
echo "Submit button not clicked.";
}

?>