<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
</head>
<body>
    <h2>penggunaan upload</h2>
    <?php
    $nama_file=$HTTP_POST_FILES["file1"]["name"];
    $tmp_dir=$HTTP_POST_FILES["file1"]["temp_nama"];
    copy($tmp_dir,"c:/upload_dir/$nama_file");
    echo("nama file : <b>$nama_file</b>");
    ?>
</body>
</html>