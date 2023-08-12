<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup and Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

    
    <section class='index-login'>
        <div class='wrapper'>
            <div class='index-login-signup'>
                <h4>Signup</h4>
                <p>Don't an account yet? sign up here</p>
                <form action='include/signup.inc.php' method=''POST>
                    <input class="form-control" type='text' name='uid' placeholder="username">
                    <input class="form-control" type='password' name='pwd' placeholder="password">
                    <input class="form-control" type='password' name='pwdrepeat' placeholder="repeat password">
                     <input class="form-control" type='text' name='email' placeholder="Emaile"><br>
                     <button type="button" class="btn btn-outline-primary">Signup</button>



                </form>
            </div>
        </div>
        <div class='index-login-login'>
            <h4>Login</h4>
            <form action='include/login.inc.php' method='POST'>
                <input type='text' class="form-control"   name='uid' placeholder="username">
                <input type='password' class="form-control"   name='pwd' placeholder="password">
                <button type='submit' class="btn btn-outline-info" name='submit'>Login</button>

            </form>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

</body>
</html>