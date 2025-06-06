
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


      <form method="POST" action="register-db.php" autocomplete="off" class="needs-validation" novalidate>
        <h4 class="mb-4 text-center text-primary fw-bold">Create a New Account</h4>

        <!-- Name -->
       <div class="row g-2 mb-3">
          <div class="col">
            <input type="text" class="form-control" name="firstname" id="validationCustom01" placeholder="First name" required>
           <div id="validationServerUsernameFeedback" class="invalid-feedback">
              Firstname is required.
            </div>
          </div>

          <div class="col">
            <input type="text" name="lastname" class="form-control" id="validationCustom02" placeholder="Last name" required>
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
             Lastname is required.
            </div>
          </div>
      </div>


        <!-- Student ID & Department -->
        <div class="row g-2 mb-3">
          <div class="col">
            <input type="text" name="student_id" class="form-control" placeholder="Student ID" required>
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              Student ID is required.
            </div>
          </div>
          <div class="col">
            <input type="text" name="department" class="form-control" placeholder="Department" required>
             <div id="validationServerUsernameFeedback" class="invalid-feedback">
              Please choose a department.
            </div>
          </div>
        </div>

        <!-- Email & Username -->
        <div class="row g-2 mb-3">
          <div class="col">
            <input type="email" name="email" class="form-control" placeholder="Email" required>

             <div id="validationServerUsernameFeedback" class="invalid-feedback">
              Email must have @.
            </div>
          </div>
          <div class="col">
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
             <div id="usernameFeedback" class="invalid-feedback">
              Username is required.
            </div>
          </div>
        </div>

        <!-- Passwords -->
        <div class="row g-2 mb-3">
          <div class="col">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              Password is require.
            </div>
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
    <input type="submit" class="btn btn-primary w-100" name="register" value="Register">
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

  <!-- Modal -->
<?php if (isset($_GET['status']) && in_array($_GET['status'], ['success', 'error'])): ?>
<!-- Status Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header <?php echo ($_GET['status'] === 'success') ? 'bg-success' : 'bg-danger'; ?>">
        <h5 class="modal-title text-white" id="statusModalLabel">
          <?php echo ($_GET['status'] === 'success') ? 'Success' : 'Error'; ?>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
        if ($_GET['status'] === 'success') {
          echo "Registration successful — Go to login!";
        } elseif ($_GET['status'] === 'error') {
          echo htmlspecialchars($_GET['message']);
        }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>


<?php if (isset($_GET['status']) && in_array($_GET['status'], ['success', 'error'])): ?>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const modalEl = document.getElementById('statusModal');
    const modal = new bootstrap.Modal(modalEl);
    modal.show();

    // Clean up URL
    const url = new URL(window.location.href);
    url.searchParams.delete('status');
    url.searchParams.delete('message');
    window.history.replaceState({}, document.title, url.pathname);
  });
</script>
<?php endif; ?>
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const usernameInput = document.getElementById('username');
  const feedback = document.getElementById('usernameFeedback');
  const form = document.querySelector('.needs-validation');

  let usernameIsValid = false;

  function validateUsername() {
    const username = usernameInput.value.trim();

    if (username === '') {
      usernameIsValid = false;
      usernameInput.classList.add('is-invalid');
      usernameInput.classList.remove('is-valid');
      feedback.textContent = 'Username is required.';
      return;
    }

    // Username not empty, check with server
    fetch(`check-username.php?username=${encodeURIComponent(username)}`)
      .then(response => response.json())
      .then(data => {
        if (data.exists) {
          usernameIsValid = false;
          usernameInput.classList.add('is-invalid');
          usernameInput.classList.remove('is-valid');
          feedback.textContent = 'Username is already taken.';
        } else {
          usernameIsValid = true;
          usernameInput.classList.remove('is-invalid');
          usernameInput.classList.add('is-valid');
          feedback.textContent = '';
        }
      })
      .catch(error => {
        usernameIsValid = false;
        console.error('Error checking username:', error);
      });
  }

  usernameInput.addEventListener('blur', validateUsername);

  form.addEventListener('submit', function (event) {
    validateUsername(); // Validate one more time on submit

    // Because validateUsername() uses fetch async, we need to check validity synchronously here:
    // So block submit if field empty or invalid
    if (usernameInput.value.trim() === '') {
      event.preventDefault();
      event.stopPropagation();
      usernameInput.classList.add('is-invalid');
      feedback.textContent = 'Username is required.';
    } else if (!usernameIsValid) {
      event.preventDefault();
      event.stopPropagation();
      usernameInput.classList.add('is-invalid');
      feedback.textContent = 'Username is already taken.';
    }

    form.classList.add('was-validated');
  });
});

</script>
                             

</body>
</html>
