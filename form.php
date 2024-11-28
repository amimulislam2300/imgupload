<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
</head>
<body>
    <form action="#" method="post">
        <input type="file" name="imgFile" id="file">
        <button type="submit" name="btn" id=submit>upload</button>
    </form>

</body>
</html>
<?php
if(isset($_POST['btn'])){
    $filename= $_FILES['imgFile']['name'];
    $temp_file = $filename['tmp_file'];
    $file_size = $filename['size'];
    $img = "image/";
    $kb = $file_size/1024;

    if($kb>700){
        echo "File is too large";
    }else{
        move_uploaded_file("$temp_file", "$img".$filename);
        echo "Successfully";
    }
}
?>

<?php
    if(isset($_POST['btn'])){
        echo "<img src='$img/$filename' width='300px'>";
    }
?>