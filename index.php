<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Signin</title>

</head>
<body>
   
    <section class="bg-white position-absolute top-50 start-50 translate-middle p-4" >
        <div class="pt-2">
            <h1 class="border-start px-1 m-4 border-info border-5 ">E-classe</h1>
            <h3 class="text-center fs-5 mt-3">SIGN IN</h3>
            <p class="text-center text-muted mt-2">Enter your credentials to access your account</p>
            
        </div>
        <form class="mt-5" >
            
                <label for="mail">
                  <span>Email :</span>
                </label>
                <input type="email" id="mail" name="usermail" class="w-100 p-1 mt-2  text-muted" placeholder="Enter your email">
              </p>
              <p>
                <label for="pwd">
                  <span>Password :</span>
                </label>
                <input type="password" id="pwd" name="password" class="w-100 p-1 mt-2  text-muted" placeholder="Enter your password">
                <button type="submit" class="btn btn-info w-100 mt-4"><a href="home.php" class="text-white text-decoration-none">SIGN IN</a></button>
                <p class="text-center"><span class="text-muted">Forgot your password?</span> <a href="#">Reset Password</a></p>
              
        </form>
    </section>

</body>
</html>