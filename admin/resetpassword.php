<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/notification.css">
    <title>Admin Sign-In</title>
</head>

<body>

<?php 
ob_start();
    include 'partials/dbconnect.php';
    error_reporting (0);
    $token = $_GET['token'];  
    if ( $_GET['updatepassword']=="false") 
    {
      echo '<div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-700 px-4 py-3 shadow-md" role="alert">
      <div class="flex">
      <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div class="py-2">
          <p class="font-bold translate-y-1">Error! Password is not Updated.</p>
          
          </div>
        </div>
      </div>
      ';
    }

    if ($_GET['passwordnotmatch']=="true") 
    {
      echo '<div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-700 px-4 py-3 shadow-md" role="alert">
      <div class="flex">
      <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
          <div class="py-2">
          <p class="font-bold translate-y-1">Please Confirm Your Password.</p>
          
          </div>
        </div>
      </div>
      ';
    }

    ?>

    <form action="partials/handlepassword.php" method="post">
        <div class="admin">
            <div class="container">
                <div class="logo1">
                    <img class="logo" src="img/white.png" alt="logo">
                </div>
                <div class="line">
                    <h2>Reset Your Password </h2>
                </div>
                <div class="field">
                    <div class="field1">
                    <input type="hidden" value="<?php print $token;?>" name="token" >
                        <input required type="password" id="password" class="password" name="password"
                            placeholder="Password">
                    </div>
                    <div class="field2">
                        <input required type="password" id="cpassword" class="password" name="cpassword"
                            placeholder="Confirm password">
                    </div>
                </div>
                <input style="padding-left: 6px;" type="submit" class="btn" value="Sign In">
                <p class="line3">Have an account ? <a href="signup.php">Sign In!</a></p>
            </div>
        </div>
    </form>
</body>

</html>