<?php
include 'database_connection.php';
if(isset($_POST['submitOffer']))
{
//     $first_name = $_POST["first_name"];
//     $last_name = $_POST["last_name"];
//     $phone = $_POST["phone"];
//     $address = $_POST["address"];
//     $city = $_POST["city"];
//     $zip = $_POST["zip"];
//     $email = $_POST["email"];
//     $account = $_POST["account"];
//     $product_name = $_POST["product_name"];
//     $discount = $_POST["discount"];
//     $offer_description = $_POST["offer_description"];
//     $validity = $_POST["validity"];

//     // echo $validity;

//     $insert_offer = "insert into offer ( picture_source, productname, discount, validity, description, email, offerid) values('pic.png', 'computer', '30%', '3', 'great product. good quality', 'uzair.ziaulislam@gmail.com', '')";
// // 
//     // $select_offer = "select * from offer";

//     $insert_offer_execute = $conn->query($insert_offer);


//     $select_offer = "select * from offer";
//     $select_offer_execute = $conn->query($select_offer);

//     $rows = mysqli_fetch_assoc($select_offer_execute);

//     echo $rows['email'];
//     echo $rows['productname'];





$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["pic"]["filetoupload"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["pic"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["pic"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["pic"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>