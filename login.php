<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="wrap-login col-md-4 col-md-offset-4">
                    <form action="process_login.php" method="POST">
                        <h2 class="logintitle text-center">Login</h2>
                        <div class="form-group">
                            <label for="username">Username:</label><br>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Enter Your Username" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label><br>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Your Password" required>
                        </div>

                        <button type="submit" class="btn-login btn btn-default pull-right">Login</button>
                        <a href="index.php" class="btn-cancel btn btn-default pull-right">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>