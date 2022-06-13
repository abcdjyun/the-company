<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<body class="bg-light">
<div style="height: 100vh;">
  <div class="row h-100 m-0">
    <div class="card w-25 my-auto mx-auto p-3">
      <h1 class="text-center">LOGIN</h1>

      <div class=" card-body">
        <form action="../actions/login.php" method="post">
          <input type="text" name="username" class="form-control mb-1" required autofocus placeholder="USERNAME">
          <input type="password" name="password" class="form-control" required placeholder="PASSWORD">

          <button type="submit" class="btn btn-primary w-100 mt-4 mb-3">LOG IN</button>
          <a href="register.php" class="text-center mb-3">Create Account</a>
        </form>
      <div>

    </div>
  </div>
</div>

    


  
</body>
</html>