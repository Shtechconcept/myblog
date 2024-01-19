<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../carousel/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6"></div>
        <div class="col-lg-6">
          <p id="formEroor" class="bg-danger text-white"></p>
          <form id="scoppReg">
            <div class="form-group">
              <label>Full name </label>
              <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Enter your full name">
            </div>
            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="enter your email">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" id="userPassword" name="userPassword"> 
              
            </div>
            <div class="form-group">
              <label>Confirm Password</label>
              <input type="password" class="form-control" id="confUserPassword" name="confUserPassword">
            </div>
            <p class="text-danger" id="passwordEroor"></p>
            <div class="form-group">
              <a href="../scopp/dashboard/index.php" button type="submit"  class="btn btn-info">Create an Account</button>
            </div>
          </form>
          <a href="login.html" class="text-success">Already a member? Sign in</a>
          <br>
          <a href="index.html" class="text-primary"> Click here to go back home</a>
        </div>
      </div>
    </div>  
    
</body>
</html>