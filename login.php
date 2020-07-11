<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">მთავარი</a>
    <h1></h1>
</body>
</html>
<?php
    $data_file_name = 'array.json';
    $datas = json_decode(file_get_contents($data_file_name), true);
    foreach ($datas as $data_len => $data){
        $data_user = $data['username'];
        $data_pass = $data['password'];
        $input_user = $_POST['username'];
        $input_pass = $_POST['password'];
        if ($data_user==$input_user & $data_pass == $input_pass){
            $log_in = true;
            echo 'წარმატებით შედით ანგარიშზე !';
        break;
        }
        elseif ($data_len + 1 == count($datas)){
            echo 'შეცდომა';
        }
    }
?> 
