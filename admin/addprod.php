<?php
require_once("connection.php");

$name = $_POST['book_name'];
  $author = $_POST['book_author'];
  $price = $_POST['book_price'];
  $description = $_POST['book_description'];
  $image = $_POST['book_photo'];

  //$image = $_FILES['book_photo']['name'];
  //$target = "../im/".basename($image);

  $sql = "INSERT INTO product (Product_name, Product_price, Product_image, Author, description) VALUES ('$name','$price','$image','$author','$description')";

  

  if (mysqli_query($db, $sql)) {
        $message = 'Successfully Inserted';
    echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('$message');
        window.location.replace(\"product.php\");
                </SCRIPT>";
    }else{
        $msg = "Failed to upload image";
    }

?>