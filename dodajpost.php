
<?php
    $slika= $_FILES["file"]["name"];
     $target_dir = "uploads/";
$target_file = $target_dir . basename($slika);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File je slika - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    require ('baza.php');

    $ime=$_POST["ime"];
    $cijena=$_POST["cijena"];
    $model=$_POST["model"];
    $sql="INSERT INTO auto (naziv,cijena,slika,model) VALUES ('$ime','$cijena','$slika','$model')";
    $result = $con->query($sql);

    echo($sql);

    header("Location: index.php");

?>