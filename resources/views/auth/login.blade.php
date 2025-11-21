<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Pengguna LPK Seikou</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
  {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  }

body {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: url('img/lpk1.jpg') center/cover no-repeat;
  font-family: "Poppins", sans-serif;
  padding: 1rem;
}

  body::before {
  content: "";
  position: fixed;
  inset: 0;
  background: rgba(0, 48, 135, 0.75); /* biru transparan */
  z-index: 0;
  }  

/* Container */
.login-container {
  background: #ffffff;
  width: 100%;
  max-width: 900px;
  display: flex;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 20px 60px rgba(0,0,0,0.25);
  z-index: 1;
}

/* Logo Section */
.logo-section {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  border-right: 1px solid #f0f0f0;
  padding: 3rem;
}

.logo-wrapper img {
  width: 250px;
  height: auto;
}

/* Form Section */
.form-section {
  flex: 1;
  padding: 3rem 3.5rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.form-title {
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: 2rem;
}

/* Input */
.form-group {
  margin-bottom: 1.5rem;
}

.form-label {
  font-size: 0.9rem;
  font-weight: 600;
  margin-bottom: 0.3rem;
  display: block;
}

.form-control {
  border: none;
  border-bottom: 2px solid #e0e0e0;
  padding: 0.7rem 0;
  font-size: 1rem;
  background: transparent;
}

.form-control:focus {
  box-shadow: none;
  border-bottom-color: #003087;
}

/* Password toggle */
.password-wrapper {
  position: relative;
}

.toggle-password {
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  background: none;
  border: none;
  cursor: pointer;
  padding: 0.4rem;
  color: #777;
}

/* Forgot */
.forgot-link {
  text-align: right;
  margin-top: -5px;
  margin-bottom: 1.5rem;
}

.forgot-link a {
  font-size: 0.9rem;
  text-decoration: none;
  color: #0066cc;
}

.forgot-link a:hover {
  color: #003087;
}

/* Button */
.btn-submit {
  width: 100%;
  padding: 0.9rem;
  background: #003087;
  border: none;
  color: white;
  border-radius: 8px;
  font-weight: 600;
  transition: 0.3s;
}

.btn-submit:hover {
  background: #00247d;
}

/* Alert */
.alert {
  background: #ffe6e6;
  color: #dc3545;
  border-left: 4px solid #dc3545;
  border-radius: 8px;
  padding: 0.8rem 1rem;
  margin-bottom: 1.5rem;
  font-size: 0.9rem;
}

/* RESPONSIVE */ 
@media (max-width: 992px) {
  .login-container {
    flex-direction: column;
    max-width: 480px;
  }

  .logo-section {
    border-right: none;
    border-bottom: 1px solid #f0f0f0;
    padding: 2rem;
  }

  .logo-wrapper img {
    width: 180px;
  }

  .form-section {
    padding: 2rem 1.7rem;
  }

  .form-title {
    text-align: center;
    font-size: 1.7rem;
  }
}

@media (max-width: 480px) {
  .form-section {
    padding: 1.5rem 1rem;
  }

  .form-title {
    font-size: 1.4rem;
  }

  .form-control {
    font-size: 0.9rem;
  }

  .btn-submit {
    padding: 0.8rem;
    font-size: 0.9rem;
  }
}


  </style>
</head>

<body>
  <div class="login-container">
    
    <!-- Logo / Left side -->
    <div class="logo-section">
      <div class="logo-wrapper">
        <img src="{{ asset('img/logo1.png') }}" alt="LPK Seikou Logo">
      </div>
    </div>

    <!-- Form -->
    <div class="form-section">
      <h1 class="form-title">Masuk</h1>

      <form method="POST" action="{{ url('/login') }}">
        @csrf

        @if ($errors->any())
          <div class="alert" role="alert">
            <i class="bi bi-exclamation-circle me-2"></i>
            {{ $errors->first() ?: 'Terjadi kesalahan saat mencoba masuk.' }}
          </div>
        @endif

        <!-- Email -->
        <div class="form-group">
          <label class="form-label" for="email">Email</label>
          <input id="email" type="email" name="email" value="{{ old('email') }}"
                 required placeholder="Masukkan email"
                 class="form-control @error('email') is-invalid @enderror">
          @error('email')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <!-- Password -->
        <div class="form-group">
          <label class="form-label" for="password">Password</label>
          <div class="password-wrapper">
            <input id="password" type="password" name="password" required
                   placeholder="Masukkan password"
                   class="form-control @error('password') is-invalid @enderror">
            <button type="button" class="toggle-password" id="togglePassword">
              <i class="bi bi-eye-slash" id="toggleIcon"></i>
            </button>
          </div>
          @error('password')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <!-- Forgot -->
        <div class="forgot-link">
          <a href="#">Lupa password?</a>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn-submit">Masuk</button>
        <input type="hidden" name="remember" value="1">
      </form>
    </div>
  </div>

  <script>
    const togglePassword = document.getElementById("togglePassword");
    const password = document.getElementById("password");
    const toggleIcon = document.getElementById("toggleIcon");

    togglePassword.addEventListener("click", () => {
      password.type = password.type === "password" ? "text" : "password";
      toggleIcon.classList.toggle("bi-eye");
      toggleIcon.classList.toggle("bi-eye-slash");
    });
  </script>
</body>
</html>