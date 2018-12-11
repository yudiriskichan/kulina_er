<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>    
    <title>Halaman Utama</title>
</head>

<body>
Add New User

    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "";
        echo "";
        echo "";
        echo "";    
        echo ""; 
        echo "";    
        echo "";       
    }
    ?>

".$user_data['order_id']."
".$user_data['product_id']."
".$user_data['user_id']."
".$user_data['rating']."
".$user_data['review']."

</body>
</html>