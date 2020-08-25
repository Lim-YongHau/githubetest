<html>
<head>
<title>user login and registration</title>
<link rel="stylesheet" type="text/css" href="loginNTD/style.css">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
    <div class="login-box">
    <div class="row">
    <div class="col-md-6 login-left">
    <h2>Login here</h2>
    <form action="validation.php" method="post">
    <div class="form-group">
    <label>Username</label>
    <input type="text" name="user" class="form-control" required >
    </div>

    <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control"  minlength="6"  maxlength="6" required >
    </div>
<button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>

    <div class="col-md-6 login-right">
    <h2>Register here</h2>
    <form action="registration.php" method="post">
    <div class="form-group">
    <label>Username</label>
    <input type="text" name="user" class="form-control" required >
    </div>

    <div class="form-group">
    <label>E-mail</label>
    <input type="text" name="email" class="form-control" required>
    </div>

    <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control" required>
    </div>

    <div class="form-group">
    <label>Phone</label>
    <input type="text" name="phone" class="form-control" required>
    </div>


    <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control"  minlength="6"  maxlength="6" required >
    </div>

    <div class="form-group">
    <label>Comform Password</label>
    <input type="password" name="password2" class="form-control"  minlength="6" maxlength="6" >
    </div>

<button type="submit" class="btn btn-primary">Register</button>
    </form>
    </div>
    </div>

    </div>
    </div>
</body>
</html> 