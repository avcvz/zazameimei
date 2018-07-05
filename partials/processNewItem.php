<?php  
include "connect.php";
$itemName = $_POST ['itemName'];
$category = $_POST ['category'];
$price = $_POST ['price'];
$desc = $_POST ['description'];

$filename = $_FILES['gameImg']['name'];
$filesize = $_FILES['gameImg']['size'];
$file_tmpname = $_FILES['gameImg']['tmp_name'];
$file_type = $_FILES['gameImg']['type'];
// echo "<h2>$filename</h2>";   <------ FOR TESTING
// echo "<h2>$filesize</h2>";
// echo "<h2>$file_tmpname</h2>";
// echo "<h2>$file_type</h2>";
// echo "<h2>$ItemName</h2>";
// echo "<h2>$catergory</h2>";
// echo "<h2>$price</h2>";
// echo "<h2>$desc</h2>";
//$_FILES[name in the form][property]
//list of properties commonly used;
//name, size
$final_filepath = "assets/images/".$filename;
$sql= "INSERT INTO items (name, price, img_path, description, category_id) VALUES ('$itemName',$price, '$final_filepath', '$desc', '$category')";


$result = mysqli_query($conn, $sql);
move_uploaded_file($file_tmpname, "../".$final_filepath);
header('Location: ../testAddItemSuccess.php');


//                  TEST              







mysqli_close($conn);

?>


