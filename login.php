<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Princess Touch</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
</head>
    
<body>
  <section class="vh-100" style="background-color: #FAECEC;">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-lg-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
            
              <div class="col-md-6 d-none d-md-block">
                <img src="img/log.jpg" alt="login image" class="img-fluid img-left" style="border-radius: 1rem 0 0 1rem;"/>
              </div>

              <div class="col-md-6 d-flex align-items-center">
                <div class="login-container text-center w-100">
                  <h1>PRINCESS TOUCH</h1>
                  <h5 class="mt-2 mb-3">WELCOME BACK!</h5>
                  <p class="mb-4 px-4">
                    Log in to access your account, track orders, and get personalized skincare tips. New here?
                    Sign up to discover our latest products and offers. Your privacy is important to us.
                  </p>

                  <form>
                    <!-- EMAIL -->
                    <div class="form-outline mb-3 d-flex mb-3 pb-1">
                      <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="fa-regular fa-envelope"></i></span>
                        <input type="email" class="form-control form-control-lg border-start-0" placeholder="Email" required />
                      </div>
                    </div>

                    <!-- PASSWORD -->
                    <div class="form-outline mb-4 d-flex mb-3 pb-1">
                      <div class="input-group">
                        <span class="input-group-text bg-white border-end-0">
                          <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" id="password" class="form-control form-control-lg border-start-0 border-end-0" placeholder="Password" required />
                        <span class="input-group-text bg-white border-start-0">
                          <i class="fa-regular fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                        </span>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-login w-50 mb-4 py-2" style="background-color: #CF8888; color: white"><b>Log in</b></button>

                    <p class="mb-3">Don't have an account? 
                      <a href="reg.php" class="fw-semibold text-decoration-none" style="color:#7a5b5b;">Sign Up</a>
                    </p>
                    <a href="index.php" class="d-block mb-4" style="color: #7a5b5b;">Back to website</a>

                    <hr class="my-4" />
                    <p class="mb-3"><b>or</b></p>

                    <div class="d-flex justify-content-center gap-3">
                      <button class="btn btn-light border social-btn px-4"><i class="fab fa-google"></i> Google</button>
                      <button class="btn btn-light border social-btn px-4"><i class="fab fa-facebook-f"></i> Facebook</button>
                    </div>

                    <div class="footer-links mt-4 d-flex justify-content-center gap-3">
                      <a href="ToS.php">Terms of Service</a>
                      <a href="policy.php">Privacy Policy</a>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    const togglePassword = document.getElementById("togglePassword");
    const password = document.getElementById("password");

    togglePassword.addEventListener("click", function () {
      // Toggle the type attribute
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);
      
      // Toggle the icon
      this.classList.toggle("fa-eye-slash");
    });
  </script>
</body>
</html>
