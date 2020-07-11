<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">მთავარი</a>
    <h1>რეგისტრაცია</h1>
    <form action="" method="POST">
    მომხმარებელი:
        <p>
            <input type='text' name="user">
        </p>
    პაროლი:    
        <p>
            <input type='password' name="pass">
        </p>
    გაიმეორეთ პაროლი:
        <p>
            <input type='password' name="pass_re">
        </p>
        <button>რეგისტრაცია</button>
    </form>
    <?php
        $register_repositor = false;
        $data_file_name = 'array.json';
        $decoded_data = json_decode(file_get_contents($data_file_name), true);
        $user_name = $_POST['user'];
        $user_pass = $_POST['pass'];
        $user_pass_re = $_POST['pass_re'];
                
        if (strlen($user_pass) >= 4 & strlen($user_name) >= 4){
            if ($user_pass==$user_pass_re){
                foreach ($decoded_data as $data_len => $dataa){
                    $data_user = $dataa['username'];
                    if ($data_user==$user_name){
                        echo 'მომხმარებელი უკვე არსებობს ბაზაში !';
                        break;
                    }
                    elseif($data_user!=$user_name & count($decoded_data)==$data_len+1){
                        $data = ['username'=> $user_name, 'password' => $user_pass];
                        array_push($decoded_data,$data);
                        $recordable_data = $decoded_data;
                        file_put_contents($data_file_name,json_encode($recordable_data));
                        echo 'წარმატებით გაიარეთ რეგისტრაცია !';
                    }
                }
                
            }
            else{
                echo 'პაროლი არ ემთხვევა!';
            }
        }
        else{
            echo 'პაროლი და მომხმარებელი მინიმუმ 4 ციფრისგან უნდა შედგებოდეს';
        } 
    ?>
    
</body>
</html>
