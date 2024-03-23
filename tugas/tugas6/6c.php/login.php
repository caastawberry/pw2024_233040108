<?php 

if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin1" && $_POST["password"] == "kopidulu") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 80%;
            color: white;
            background-color: white; 
            margin:auto ;
        }
        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            background-color: pink;
            width: 70vh;
            height: 70vh;
            font-size: 1rem;
            font-family: 'Segoe UI', Tahoma, 'Geneva', Verdana, sans-serif;
            border-radius: 20px;
        }
        
        h1 {
            color: white;
        }
        input {
            margin-top: 10px;
            border: 1px solid black;
            width: 200px;
            height: 25px;
        }
        button {
            margin-top: 20px;
            cursor: pointer;
            font-size: 1rem;
            background-color: orange;
            border-radius: 10px;
            padding: 5px;
            border: 2px solid black;
        }
        p {
            color: red;
        }
        .profile {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            background-image: url(img/img1.jpg);
            background-size: cover;
            background-position: center;
            border: 3px solid black;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="content">
        <div class="profile"></div>
                <h1><i>Login</i></h1>
            <?php if (isset($error)) : ?>
                <p>username atau password anda salah</p>
            <?php endif; ?>
            <form action="" method="post">
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
                <br>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
                <br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>