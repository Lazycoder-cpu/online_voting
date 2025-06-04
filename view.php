<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register new Account</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
    crossorigin="anonymous"
  />
  <link rel="stylesheet" href="css/front.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    rel="stylesheet"
  />

</head>
<body>
  <div
    class="container-fluid boxmain d-flex justify-content-center align-items-center min-vh-100 p-3"
  >
    <div class="row shadow rounded overflow-hidden w-100" style="max-width: 900px;">
      <!-- Left: Welcome Message -->
      <div
        class="col-12 col-md-12 vote d-flex flex-column justify-content-center align-items-center p-4 p-md-5 position-relative"
      >
        <div
          class="overlay position-absolute top-0 start-0 w-100 h-100"
        ></div>

        <div class="position-relative text-center px-3 px-md-0" style="z-index:2;">
          <h4 class="fw-bold mb-4 text-uppercase text-break">
            Welcome to Minsu Online Voting System
          </h4>

          <div class="position-relative d-flex justify-content-center">
           <p id="ghost" class="fs-3 fs-md-2 mb-4 fst-italic text-light text-center m-0">
  Secure. Simple. Transparent.
</p>
<p id="typing" class="fs-3 fs-md-2 mb-4 fst-italic text-light text-center m-0"></p>

          </div>

          <p class="fs-6">
            Participate in shaping the future — cast your vote with confidence
            through our reliable and user-friendly platform.<br />
            Log in to your account to get started, or register now to become an
            eligible voter in the upcoming election.
          </p>
          <div class="d-grid gap-2 d-md-block">
            <a href="login.php" class="btn btn-primary mt-5">Let's get started</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- js -->
  <script src="js/icon.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"
  ></script>
  <script>
    const text = "Secure. Simple. Transparent.";
    const typingElement = document.getElementById("typing");
    let index = 0;
    let isDeleting = false;

    function typeLoop() {
      if (!isDeleting) {
        typingElement.textContent = text.substring(0, index + 1);
        index++;
        if (index === text.length) {
          isDeleting = true;
          setTimeout(typeLoop, 1000); // pause before deleting
          return;
        }
      } else {
        typingElement.textContent = text.substring(0, index - 1);
        index--;
        if (index === 0) {
          isDeleting = false;
        }
      }
      setTimeout(typeLoop, isDeleting ? 50 : 80);
    }

    window.addEventListener("DOMContentLoaded", typeLoop);
  </script>
</body>
</html>
