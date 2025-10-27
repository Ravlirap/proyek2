<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Pengguna LPK Seikou</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>
    /* === Global Styles === */
    body {
      background: linear-gradient(135deg, #007bff 0%, #6610f2 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      font-family: "Poppins", sans-serif;
    }

    /* === Login Card === */
    .login-card {
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.9);
      border-radius: 1rem;
      box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.25);
      padding: 2.5rem;
      width: 100%;
      max-width: 420px;
      animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* === Title === */
    .card-title {
      font-weight: 700;
      color: #0d6efd;
      letter-spacing: 0.5px;
    }

    /* === Inputs === */
    .form-label {
      font-weight: 600;
      color: #333;
    }

    .input-group-text {
      background-color: #f1f3f5;
      border: 1px solid #ced4da;
    }

    .form-control {
      border-left: none;
      transition: box-shadow 0.3s ease;
    }

    .form-control:focus {
      box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }

    /* === Buttons === */
    .btn-primary {
      background: linear-gradient(90deg, #0d6efd, #6610f2);
      border: none;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    /* === Links & Checkbox === */
    .text-primary {
      color: #0d6efd !important;
    }

    a.text-primary:hover {
      text-decoration: underline;
    }

    .form-check-label {
      color: #6c757d;
      font-size: 0.9rem;
    }

    /* === Alert === */
    .alert {
      font-size: 0.9rem;
    }
  </style>
</head>

<body>
  <div class="card login-card">
    <div class="card-body">
      <h1 class="card-title text-center mb-4 fs-3">
        <img src="{{ asset('img/logo1.png') }}" alt="logo" width="42" height="42"
           class="me-2 rounded-circle border-2 border-light">LOGIN LPK SEIKOU
      </h1>

      <form method="POST" action="{{ url('/login') }}">
        @csrf

        @if ($errors->any())
          <div class="alert alert-danger p-3 mb-4 small" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i> 
            {{ $errors->first() ?: 'Terjadi kesalahan saat mencoba masuk.' }}
          </div>
        @endif

        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Alamat Email</label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
            <input id="email" 
                   type="email" 
                   name="email"
                   value="{{ old('email') }}" 
                   required 
                   placeholder="contoh@mail.com"
                   class="form-control @error('email') is-invalid @enderror">
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <!-- Password -->
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <div class="input-group input-group-password">
            <span class="input-group-text"><i class="bi bi-lock"></i></span>
            <input id="password" 
                   type="password" 
                   name="password" 
                   required
                   placeholder="Minimal 8 karakter"
                   class="form-control @error('password') is-invalid @enderror">
            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
              <i class="bi bi-eye-slash" id="toggleIcon"></i>
            </button>
            @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <!-- Remember & Forgot -->
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="form-check">
            <input type="checkbox" name="remember" id="remember" class="form-check-input">
            <label class="form-check-label" for="remember">Ingat Saya</label>
          </div>
          <a href="#" class="text-primary small fw-semibold">Lupa Password?</a>
        </div>

        <!-- Submit Button -->
        <div class="d-grid">
          <button type="submit" class="btn btn-primary btn-lg rounded-pill fw-semibold">
            <i class="bi bi-box-arrow-in-right me-2"></i> Masuk
          </button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const togglePassword = document.getElementById('togglePassword');
      const password = document.getElementById('password');
      const toggleIcon = document.getElementById('toggleIcon');

      togglePassword.addEventListener('click', function () {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        toggleIcon.classList.toggle('bi-eye');
        toggleIcon.classList.toggle('bi-eye-slash');
      });
    });
  </script>
</body>
</html>
