<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title>{{ $page }} | CATS</title>

    <!-- Favicon -->
    <link href="{{ asset('assets/img/Logo.jpg') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #91c8e4, #f6f4eb);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Arial", sans-serif;
        }

        .login-card {
            background: #fff;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 400px;
            width: 100%;
        }

        .login-card .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #4682a9;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #91c8e4;
        }

        .btn-login {
            background-color: #91c8e4;
            color: #fff;
            border-radius: 10px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn-login:hover {
            background-color: #4682a9;
        }

        .forgot-password-link {
            font-size: 0.9rem;
            color: #749bc2;
            text-decoration: none;
        }

        .forgot-password-link:hover {
            color: #4682a9;
        }

        .signup-link {
            font-size: 0.9rem;
            color: #4682a9;
            font-weight: bold;
        }

        .signup-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-card">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <a href="{{ url('auth/login') }}" class="">
                <h3 class="text-primary"><img class="rounded-circle" src="{{ asset('assets/img/Logo.jpg') }}"
                        alt="CATS" style="width: 200px; height: 50px;margin-right: 10px;margin-top:-5px;">
                </h3>
            </a>
            <h3>Log In</h3>
        </div>
        <form action="{{ url('auth/login') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Enter your email"
                    name="username" />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password"
                    name="password" />
            </div>
            <button type="submit" class="btn btn-login w-100 mb-3">Login</button>
            <div class="text-center">
                <span>Dont have an account? Call Admin</span>
            </div>
        </form>
    </div>
    <!-- JavaScript Libraries -->

    {{--  NPM  --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    {{--  Lib  --}}
    <script src="{{ asset('assets/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        function showToast(message) {
            var toast = $('<div class="toast">' + message + '</div>');
            $('#toast-container').append(toast);
            setTimeout(function() {
                toast.addClass('show');
            }, 100);
            setTimeout(function() {
                toast.removeClass('show');
                setTimeout(function() {
                    toast.remove();
                }, 300);
            }, 3000); // Sesuaikan durasi tampilan pesan di sini
        }

        // Contoh pemanggilan
        showToast('Login gagal. Username Atau Password Kamu Mungkin salah !!!.');
    </script>
</body>

</html>
