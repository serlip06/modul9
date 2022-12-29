<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pemrosesan file</title>
</head>
<body>
    <title>download</title>
    <h2>penggunaan download</h2>
Click <a href="download.php?file=include.php">here</a>untuk download file
</body>


</html>
<?php
header("content-type:application/zip");
header("content-legth:.filesize($file");
header("content-disposition:attachment;filename$file");
readfile($file);
?>