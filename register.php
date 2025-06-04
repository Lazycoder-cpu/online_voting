<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register New Account</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container-fluid boxmain d-flex justify-content-center align-items-center min-vh-100 p-3 bg-light">
   <div class="col-12 col-md-6 col-lg-5 bg-white p-4 rounded shadow">


      <form method="POST" action="#" autocomplete="off">
        <h4 class="mb-4 text-center text-primary fw-bold">Create a New Account</h4>

        <!-- Name -->
        <div class="row g-2 mb-3">
          <div class="col">
            <input type="text" name="firstname" class="form-control" placeholder="First name" required>
          </div>
          <div class="col">
            <input type="text" name="lastname" class="form-control" placeholder="Last name" required>
          </div>
        </div>

        <!-- Student ID & Department -->
        <div class="row g-2 mb-3">
          <div class="col">
            <input type="text" name="student_id" class="form-control" placeholder="Student ID" required>
          </div>
          <div class="col">
            <input type="text" name="department" class="form-control" placeholder="Department" required>
          </div>
        </div>

        <!-- Email & Username -->
        <div class="row g-2 mb-3">
          <div class="col">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="col">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
          </div>
        </div>

        <!-- Passwords -->
        <div class="row g-2 mb-3">
          <div class="col">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="col">
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
          </div>
        </div>

        <!-- Hidden Default Fields -->
        <input type="hidden" name="role" value="Voters">
        <input type="hidden" name="voter_status" value="Ineligible">
        <input type="hidden" name="status" value="Inactive">
        <input type="hidden" name="created_at" value="<?= date('Y-m-d H:i:s'); ?>">

        <!-- Submit Button -->
       <div class="d-grid gap-3 mt-4 justify-content-center">
  <div style="width: 100%;">
    <input type="submit" class="btn btn-primary w-100" value="Register">
  </div>

  <div class="d-flex align-items-center text-muted">
    <hr class="flex-grow-1" />
    <span class="px-2 small fw-semibold">OR</span>
    <hr class="flex-grow-1" />
  </div>

  <div style="width: 100%;">
    <button type="button" class="btn-google w-100 d-flex align-items-center justify-content-center gap-2">
      <img src="image/google.png" alt="Google logo" width="20" height="20">
      <span>Continue with Gmail</span>
    </button>
  </div>
</div>


        <div class="d-flex justify-content-center mt-4">
          <span class="me-2">Already have an account?</span>
          <a href="login.php" class="text-primary text-decoration-none">Sign In</a>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
