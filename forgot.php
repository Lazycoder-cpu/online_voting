<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reset Password</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <div class="container-fluid boxmain d-flex justify-content-center align-items-center min-vh-100 bg-light p-3">
    <div class="col-11 col-sm-9 col-md-5 col-lg-4 bg-white p-4 rounded shadow-sm">
      <form class="w-100" method="POST" action="#">

        <h4 class="mb-3 text-center text-primary fw-bold">Forgot Your Password?</h4>
        <p class="text-center text-muted small mb-4">
          Enter the email address associated with your account and we’ll send you a link to reset your password.
        </p>

        <!-- Email Field -->
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              placeholder="example@domain.com"
              required
            />
          </div>
        </div>

        <!-- Submit & Back -->
        <div class="d-flex justify-content-between gap-3 col-12 mx-auto mt-4">
          <a href="login.php" class="btn btn-outline-secondary">Back to Login</a>
          <button type="submit" class="btn btn-primary">Send Reset Link</button>
        </div>

        <p class="text-center mt-4 mb-0 small text-muted">
          Need help? <a href="support.php" class="text-decoration-none">Contact support</a>
        </p>
        
      </form>
    </div>
  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
