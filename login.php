<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  
</head>
<body>
  <div class="container-fluid boxmain d-flex justify-content-center align-items-center min-vh-100 bg-light p-3">
    <div class="col-11 col-sm-9 col-md-5 col-lg-4 bg-white p-4 rounded shadow-sm">
      <form class="w-100" method="POST" action="#">
        <h4 class="mb-4 text-center text-primary fw-bold">Create a New Account</h4>

        <!-- Username -->
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person"></i></span>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required />
          </div>
        </div>

        <!-- Password -->
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <div class="input-group position-relative">
            <span class="input-group-text"><i class="bi bi-lock"></i></span>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required />
            <span id="togglePassword" title="Show/Hide Password">
              <i class="bi bi-eye"></i>
            </span>
          </div>
          <div class="d-flex justify-content-between align-items-center mt-2">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="rememberMe" />
              <label class="form-check-label" for="rememberMe">Remember Me</label>
            </div>
            <a href="forgot.php" class="text-decoration-none text-primary fw-light">Forgot Password?</a>
          </div>
        </div>

        <!-- Submit -->
        <div class="d-grid gap-3 col-12 col-md-10 mx-auto mt-4">
          <button type="submit" class="btn btn-primary w-100">Login</button>

          <div class="d-flex align-items-center text-muted">
            <hr class="flex-grow-1" />
            <span class="px-2 small fw-semibold">OR</span>
            <hr class="flex-grow-1" />
          </div>

          <button type="button" class="btn btn-google w-100 d-flex align-items-center justify-content-center gap-2">
            <img src="image/google.png" alt="Google logo" width="20" height="20" />
            <span class="fw-light">Continue with Gmail</span>
          </button>
        </div>

        <!-- Sign Up Link -->
        <div class="text-center mt-4">
          <span class="me-1">Don't have an account?</span>
          <a href="register.php" class="text-primary text-decoration-none">Sign Up</a>
        </div>
      </form>
    </div>
  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Toggle password visibility
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("password");

    togglePassword.addEventListener("click", function () {
      const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
      passwordInput.setAttribute("type", type);
      this.innerHTML = type === "password" ? '<i class="bi bi-eye"></i>' : '<i class="bi bi-eye-slash"></i>';
    });
  </script>
</body>
</html>
