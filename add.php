<html>
<head>
    <title>Menambahkan Data</title>
</head>

<body>
    Go to Home
    
    <form action="add.php" method="post" name="form1">
        
OrderID	    <input type="text" name="order_id">
ProductID	<input type="text" name="product_id">
UserID	    <input type="text" name="user_id">
Rating      <input type="text" name="rating">
Review      <input type="text" name="review">
<input type="submit" name="Submit" value="Add">

    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $order_id = $_POST['order_id'];
        $product_id = $_POST['product_id'];
        $user_id = $_POST['user_id'];
        $rating = $_POST['rating'];
        $review = $_POST['review'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO users(order_id,product_id,user_id,rating,review) VALUES('$order_id','$product_id','$user_id','$rating','$review')");
    }
    ?>
</body>
</html>