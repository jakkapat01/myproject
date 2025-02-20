<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sigin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="signin.css">
</head>
<body class="text-center" style="background-color: black;">
        <main class="form-signin">
            <img class="mb-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmpoF2Aol7AY3XKax3LuAbB-alssb5q9yU7Q&s" alt="" width="75" height="80">
            <form action="process-login.php" method="post">
              <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
              <div class="form-floating">
                <input name="email_account" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mt-2">
                <input name="password_account" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
          
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
              <div class="d-flex justify-content-center align-items-center mt-3 mb-3">
                <p class="text-muted mb-0 me-1">Don't have an account?</p>
                <a href="signup.php">Sign up</a>
              </div>
              <p class="mt-5 mb-3 text-muted">© 2025</p>
            </form>
          </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>