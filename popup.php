

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Confirmation</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0); /* semi-transparent background */
}

.popup {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* shadow effect */
}

.popup-content {
    text-align: center;
}

.button-container {
    margin-top: 20px;
}

.delete-button, .cancel-button {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.delete-button {
    background-color: #dc3545; /* red */
    color: #fff;
    margin-right: 10px;
}

.cancel-button {
    background-color: #6c757d; /* gray */
    color: #fff;
}

.delete-button:hover, .cancel-button:hover {
    background-color: #bd2130; /* darker red for delete button */
    background-color: #5a6268; /* darker gray for cancel button */
}

    </style>
    
</head>
<body>

<div class="popup">
    <div class="popup-content">
        <p>Are you sure you want to delete the field?</p>
        <div class="button-container">
            <button class="delete-button">Yes</button>
            <button class="cancel-button">No</button>
        </div>
    </div>
</div>
<script>
    const delButton=document.getElementsByClassName("delete-button")[0];
    const cancelButton=document.getElementsByClassName("cancel-button")[0];
    const popContent=document.getElementsByClassName("popup")[0];
    const urlParams = new URLSearchParams(window.location.search);
    const Sr_no = urlParams.get('Sr_no');
            // window.location.href = "view1.php";

    // console.log(Sr_no);
   
    cancelButton.addEventListener("click",function(){
        
        // if($res){
        //     echo "Successfully deleted!!!!!";
        //     header("Location: view1.php");
        //     echo "<br>";
        // }  
        popContent.remove();
        window.location.href = "view1.php";
 
    })
    delButton.addEventListener("click",function(){
        //      else{
        //         echo "ERROR IN DELETING";
        //         echo "<br>";
        //     } 
        fetch(`delete.php?Sr_no=${Sr_no}`).then((res)=>{
            if(!res.ok){
                throw new Error('Network response was not ok');
            }
            else{
                return res.text();
            }

         })
         .then((dd)=>{
            window.location.reload();

            window.location.href = "view1.php";


         }).catch((err)=>{
            console.error("There was a problem with a fetch operation",err);
            console.error("Error in detecting the data");
         })
    
           })

</script>

</body>
</html>
