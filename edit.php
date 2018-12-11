<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $order_id=$_POST['order_id'];
    $product_id=$_POST['product_id'];
    $user_id=$_POST['user_id'];
    $rating=$_POST['rating'];
    $review=$_POST['review'];

    $result = mysqli_query($mysqli, "UPDATE users SET order_id='$order_id',product_id='$product_id',user_id='$user_id',rating='$rating',review='$review' WHERE id=$id");

    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $order_id = $user_data['order_id'];
    $product_id = $user_data['product_id'];
    $user_id = $user_data['user_id'];
    $rating = $user_data['rating'];
    $review = $user_data['review'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    Home
    
    <form name="update_user" method="post" action="edit.php">
        
OrderID	<input type="text" name="order_id" value=<?php echo $order_id;?>>
ProductID <input type="text" name="product_id" value=<?php echo $product_id;?>>
UserID	<input type="text" name="user_id" value=<?php echo $user_id;?>>
Rating  <input type="text" name="rating" value=<?php echo $rating;?>>
Review  <input type="text" name="review" value=<?php echo $review;?>>
<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>	<input type="submit" name="update" value="Update">

    </form>
</body>
</html>