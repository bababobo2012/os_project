<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>

<body>
    <?php include "componant/header.php"; ?>

    <!-- BODY -->
    <div class="container">
        <div class="text-center">
            <h1 class="text-uppercase">Login</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 ">
                    <hr>
                <form  action="php_backend/php_login.php" method="POST">
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail2">Email address</label>
                        <input type="email" class="form-control" name="username" placeholder ="email@example.com" >
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormPassword2">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="submit" value="Submit">Sign in</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>

</html>