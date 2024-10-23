<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Page 1</title>
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <form action="">
            <h1><img src="/assets/images/marinternet.png" alt="Logo" class="logo"></h1>
            <div class="input-box">
                <i class='bx bxs-user'></i><input type="text" placeholder="Username" required> 
            </div>
            <div class="input-box">
                <i class='bx bxs-lock-alt' ></i><input type="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn">Login</button>
            <div class="forgot-link">
                <p><a href="#">Forget Password</a></p>
            </div>
            
        </form>
</body>

</html>
