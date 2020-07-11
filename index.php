<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">მთავარი</a>
    <h1>შესვლა</h1>
    <form action="login.php" method="POST">
    <h5></h5>
    მომხმარებელი:
        <p>
            <input type='text' name="username">
        </p>
    პაროლი:
        <p>
            <input type='password' name="password">
        </p>
        <button>შესვლა</button>
        <button type='button' onclick="window.location.href='register.php'">რეგისტრაცია</button>    
    </form>
    
</body>
</html>

