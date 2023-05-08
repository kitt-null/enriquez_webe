<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <main>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Login</h1>
                    </div>
                    <div class="col-md-6">
                        <h1>Register</h1>
                        <form id="registration">
                            <div class="from-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            
                            <div class="from-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username">
                            </div>

                            <div class="from-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>

                            <div>
                                <button type="button" class="btn btn-success mt-2 register">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>
</body>
</html>