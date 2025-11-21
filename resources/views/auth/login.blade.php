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
    /* === Global Styles === */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #003087;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      font-family: "Poppins", sans-serif;
      overflow: hidden;
      background: url('img/lpk1.jpg') no-repeat center center fixed;
    }

    /* Background Pattern */
    body::before {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(0, 48, 135, 0.75); /* Overlay biru transparan */
      z-index: 0;
    }

    /* Floating shapes */
    .shape {
      position: absolute;
      opacity: 0.05;
      pointer-events: none;
    }

    .shape-1 {
      width: 300px;
      height: 300px;
      background: white;
      border-radius: 50%;
      top: -100px;
      left: -100px;
      animation: float 20s infinite ease-in-out;
    }

    .shape-2 {
      width: 200px;
      height: 200px;
      background: white;
      border-radius: 50%;
      bottom: -50px;
      right: -50px;
      animation: float 15s infinite ease-in-out reverse;
    }

    @keyframes float {
      0%, 100% { transform: translate(0, 0) rotate(0deg); }
      33% { transform: translate(30px, -30px) rotate(120deg); }
      66% { transform: translate(-20px, 20px) rotate(240deg); }
    }

    /* === Container === */
    .login-container {
      position: relative;
      z-index: 1;
      background: white;
      border-radius: 20px;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
      overflow: hidden;
      width: 90%;
      max-width: 900px;
      display: flex;
      min-height: 500px;
    }

    /* === Left Side - Logo === */
    .logo-section {
      flex: 1;
      background: white;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 3rem;
      border-right: 1px solid #f0f0f0;
    }

    .logo-wrapper {
      text-align: center;
    }

    .logo-wrapper img {
      width: 280px;
      height: auto;
      max-width: 100%;
      animation: fadeInScale 0.8s ease-out;
    }

    @keyframes fadeInScale {
      from { 
        opacity: 0; 
        transform: scale(0.9);
      }
      to { 
        opacity: 1; 
        transform: scale(1);
      }
    }

    /* === Right Side - Form === */
    .form-section {
      flex: 1;
      padding: 3rem 3.5rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      animation: slideIn 0.8s ease-out;
    }

    @keyframes slideIn {
      from { 
        opacity: 0; 
        transform: translateX(30px);
      }
      to { 
        opacity: 1; 
        transform: translateX(0);
      }
    }

    .form-title {
      font-size: 2rem;
      font-weight: 700;
      color: #1a1a1a;
      margin-bottom: 2.5rem;
      text-align: left;
    }

    /* === Form Styles === */
    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-label {
      display: block;
      font-size: 0.9rem;
      font-weight: 600;
      color: #666;
      margin-bottom: 0.5rem;
      text-transform: capitalize;
    }

    .form-control {
      width: 100%;
      padding: 0.75rem 0;
      font-size: 1rem;
      color: #333;
      background: transparent;
      border: none;
      border-bottom: 2px solid #e0e0e0;
      outline: none;
      transition: border-color 0.3s ease;
      font-family: "Poppins", sans-serif;
    }

    .form-control::placeholder {
      color: #999;
    }

    .form-control:focus {
      border-bottom-color: #003087;
    }

    .form-control.is-invalid {
      border-bottom-color: #dc3545;
    }

    /* Password Toggle */
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
      color: #999;
      cursor: pointer;
      padding: 0.5rem;
      transition: color 0.3s ease;
    }

    .toggle-password:hover {
      color: #003087;
    }

    /* Forgot Password Link */
    .forgot-link {
      text-align: right;
      margin-top: 0.5rem;
      margin-bottom: 2rem;
    }

    .forgot-link a {
      color: #0066cc;
      text-decoration: none;
      font-size: 0.9rem;
      transition: color 0.3s ease;
    }

    .forgot-link a:hover {
      color: #003087;
      text-decoration: underline;
    }

    /* Submit Button */
    .btn-submit {
      width: 100%;
      padding: 0.9rem;
      background: #003087;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      text-transform: capitalize;
    }

    .btn-submit:hover {
      background: #00247d;
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(0, 48, 135, 0.3);
    }

    .btn-submit:active {
      transform: translateY(0);
    }

    /* Alert */
    .alert {
      padding: 0.75rem 1rem;
      margin-bottom: 1.5rem;
      border-radius: 8px;
      font-size: 0.9rem;
      border-left: 4px solid #dc3545;
      background: #ffe6e6;
      color: #dc3545;
    }

    .invalid-feedback {
      color: #dc3545;
      font-size: 0.85rem;
      margin-top: 0.25rem;
      display: block;
    }

    /* === Responsive === */
@media (max-width: 992px) {
  .login-container {
    flex-direction: column;
    width: 95%;
    max-width: 480px;
  }

  .logo-section {
    border-right: none;
    border-bottom: 1px solid #f0f0f0;
    padding: 2rem 1rem;
  }

  .logo-wrapper img {
    width: 180px;
  }

  .form-section {
    padding: 2rem 1.5rem;
  }

  .form-title {
    font-size: 1.6rem;
    margin-bottom: 1.5rem;
    text-align: center;
  }

  .form-group {
    margin-bottom: 1.25rem;
  }

  .btn-submit {
    font-size: 1rem;
    padding: 0.8rem;
  }
}

@media (max-width: 480px) {
  body {
    padding: 1rem;
  }

  .login-container {
    border-radius: 15px;
  }

  .form-section {
    padding: 1.5rem 1rem;
  }

  .form-title {
    font-size: 1.4rem;
  }

  .form-control {
    font-size: 0.95rem;
  }

  .btn-submit {
    font-size: 0.95rem;
    padding: 0.75rem;
  }
}

  </style>
</head>

<body>
  <!-- Background Shapes -->
  <div class="shape shape-1"></div>
  <div class="shape shape-2"></div>

  <div class="login-container">
    <!-- Logo Section -->
    <div class="logo-section">
      <div class="logo-wrapper">
        <img src="{{ asset('img/logo1.png') }}" alt="LPK Seikou Logo">
      </div>
    </div>

    <!-- Form Section -->
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
          <label for="email" class="form-label">Email</label>
          <input 
            id="email" 
            type="email" 
            name="email"
            value="{{ old('email') }}" 
            required 
            placeholder="contoh@mail.com"
            class="form-control @error('email') is-invalid @enderror">
          @error('email')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <!-- Password -->
        <div class="form-group">
          <label for="password" class="form-label">Password</label>
          <div class="password-wrapper">
            <input 
              id="password" 
              type="password" 
              name="password" 
              required
              placeholder="Minimal 8 karakter"
              class="form-control @error('password') is-invalid @enderror">
            <button class="toggle-password" type="button" id="togglePassword">
              <i class="bi bi-eye-slash" id="toggleIcon"></i>
            </button>
          </div>
          @error('password')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <!-- Forgot Password -->
        <div class="forgot-link">
          <a href="#">Lupa password?</a>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn-submit">
          Masuk
        </button>

        <!-- Remember Me (Hidden but can be enabled) -->
        <input type="hidden" name="remember" value="1">
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const togglePassword = document.getElementById('togglePassword');
      const password = document.getElementById('password');
      const toggleIcon = document.getElementById('toggleIcon');

      if (togglePassword) {
        togglePassword.addEventListener('click', function (e) {
          e.preventDefault();
          const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
          password.setAttribute('type', type);
          toggleIcon.classList.toggle('bi-eye');
          toggleIcon.classList.toggle('bi-eye-slash');
        });
      }
    });
  </script>
</body>
</html>