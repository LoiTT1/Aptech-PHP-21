<!doctype html>
<html lang="en">
  <head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>

      <br>
      <br>
      <br>
      <br>
    <h1 class="form-sign-in d-flex justify-content-center align-items-center">Đăng Ký Facebook </h1>

    <div class="form-sign-in d-flex justify-content-center align-items-center" id="form-sign-in">
        <a class="btn btn-out text-white" id = "close-form" onclick="closeFormSignIn()">X</a>
        <div class="container bg-white-opacity w-25 h-50 shadow">
            <form action="./checkbaitap.php" method="POST" class="flex-column align-items-center h-100 d-flex justify-content-center">
                <h2 class="pb-4 text-black">Sign in</h2>
                <form action="./checkbaitap.php" method="POST">
                  <input type="email" placeholder="email" name="email">
                  <input type="password" placeholder="password" name="password">
                  <input type="password again" placeholder="password again" name="password again">
                  
                  <br>
                  <button type="submit">Dang Nhap</button>

            </form>
        </div>
    </div>
  
    </div>
    

  </body>
</html>