<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrosesan file</title>
</head>
<body>
    <h2>pembacaan data</h2>
    <?php
    $file='C:\\Text.txt';
    if(file_exixts($file))
    {
        $fo=fopen($file,"r");
        $isi=fread($fo,filesize("$file"));
        echo("Isi dari file <b> $file </b> adalah <b>\"sisi\"<br>");
        fclose($fo);
    }else
    {
        echo("File <b> $file </b> tidak ada !");

    }
    ?>
</body>
</html>