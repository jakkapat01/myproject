<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="signin.css">
</head>
<body class="text-center" style="background-color: black;">
    <main class="form-signin">
        <img class="mb-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmpoF2Aol7AY3XKax3LuAbB-alssb5q9yU7Q&s" alt="" width="75" height="80">
        <form action="process-register.php" method="post">
            <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
            
            <div class="form-floating mb-3">
                <input name="username_account" type="text" class="form-control" id="floatingUsername" placeholder="Username" required>
                <label for="floatingUsername">Username</label>
            </div>
            
            <div class="form-floating mb-3">
                <input name="email_account" type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" required>
                <label for="floatingEmail">Email address</label>
            </div>
            
            <div class="form-floating mb-3">
                <input name="password_account1" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            
            <div class="form-floating mb-3">
                <input name="password_account2" type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password" required>
                <label for="floatingPasswordConfirm">Confirm Password</label>
            </div>
        
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
            <a href="login.php" class="d-block mt-2" >Sign in</a>
            <p class="mt-5 mb-3 text-muted">© 2025</p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
            crossorigin="anonymous"></script>
</body>
</html>