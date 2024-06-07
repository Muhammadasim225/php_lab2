<?php

include "db.php";
    // $sql = "INSERT INTO `product` (`Name`, `Expiry_date`, `Price`) VALUES ('$name', '$expiry_date', '$price')";
    $sql="SELECT * FROM `product`";
    $res = mysqli_query($conn,$sql);

    if($res==TRUE){
        echo "<br>";
        echo "Display successful";

    } else {
        echo "Error ".$sql."<br>".$conn->error;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
            /* body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

       
        .add-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #28a745;
            border-radius: 4px;
        }

        .add-btn:hover {
            background-color: #218838;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .insert-button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            margin-top: 10px;
            margin-left:500px;
            /* display: block; */
            /* width: 90%;
            text-align: center;
            text-decoration: none;
        }
        .insert-button:hover {
            background-color: #0056b3;
        } */ 
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background-color: #f4f4f4;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin: 10px;
    padding: 20px;
    width: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.card img {
    width: 100%; /* Ensure image fills the entire width of the card */
    height: 200px; /* Maintain aspect ratio */
    border-radius: 8px;
    margin-bottom: 10px;
    object-fit: cover; /* Ensure the image covers the entire container */
}

.card-content {
    text-align: center;
}

.card-content p {
    margin: 10px 0;
}

.comun{
    display:flex;
    justify-content:center;
    gap:15px;
}
        /* .carddd{
            background-color:yellow;
        } */

        .carddd a{
            padding: 5px 10px;
            padding-top:12px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 4px;
            width:200px;
            height:25px;


        }

       

        .add-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
            margin: 20px auto;
            text-align: center;
            text-decoration: none;
            display: block;
        }

        .add-btn:hover {
            background-color: #0056b3;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #0056b3;
        } 
      



</style>
<body>
  
    
        
        
        <br>
        <br>
        <a href="insert-product.php" class="insert-button">Insert New</a>

    </table> 
    
    <div class="carddd">
        <a href="insert-product.php" class="add-btn">Insert New Product</a>
        </div>
    <div class="container">

       
        <?php 
        if(mysqli_num_rows($res) > 0){
            while($fff=mysqli_fetch_assoc($res)){
        ?>
                <div class="card">
                <img src="Pictures/<?php echo $fff['file']; ?>" alt="<?php echo $fff['Name']; ?>">
                        <div class="card-content">
                        <p><strong><?php echo $fff['Name']; ?></strong></p>
                        <p>Price: $<?php echo $fff['Price']; ?></p>
                        <p>Expiry Date: <?php echo $fff['Expiry_date']; ?></p>
                        <p>Sr. No: <?php echo $fff['Sr_no']; ?></p>
                        <div class=comun>
                        <p><a href='update.php?Sr_no=<?php echo $fff['Sr_no']; ?>' class='btn'>Update</a></p>
                        <p><a href='popup.php?Sr_no=<?php echo $fff['Sr_no']; ?>' class="btn">Delete</a></p>
                        </div>
                        <!-- Add more content here if needed -->
                    </div>
                </div>
        <?php

            }
        }
        ?>

    </div>
    <div>
        
                       
                        </div>
</body>
</html>