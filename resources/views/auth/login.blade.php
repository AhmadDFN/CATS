<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title>{{ $page }} | DimsumBliss</title>

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
        :root {
            --background-color: #fef3e2;
            --primary-color: #fab12f;
            --secondary-color: #fbd288;
            --accent-color: #fa4032;
            --hover-color: #fa812f;
            --text-color: #ffffff;
            --heading-color: #fb3f33;
        }

        body {
            background-color: var(--background-color);
            font-family: "Arial", sans-serif;
        }

        .card {
            background-color: var(--primary-color);
            border: none;
            border-radius: 12px;
        }

        .logo {
            font-size: 3rem;
            color: var(--accent-color);
        }

        .card-title {
            color: var(--heading-color);
        }

        .card-text {
            color: var(--secondary-color);
        }

        .form-label {
            color: var(--text-color);
        }

        .form-control {
            background-color: var(--secondary-color);
            border: 1px solid var(--hover-color);
            color: var(--text-color);
            border-radius: 8px;
        }

        .form-control:focus {
            border-color: var(--hover-color);
            box-shadow: 0 0 4px var(--hover-color);
        }

        .btn-accent {
            background-color: var(--accent-color);
            color: var(--text-color);
            border-radius: 8px;
            border: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-accent:hover {
            background-color: var(--hover-color);
            transform: translateY(-2px);
        }

        .text-accent {
            color: var(--accent-color);
            text-decoration: none;
            font-weight: bold;
        }

        .text-accent:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container-xxxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            @if ($errors->has('username'))
                <div id="toast-container"></div>
            @endif
            <div class="card p-4 shadow-lg" style="min-width: 450px; border-radius: 12px">
                <div class="card-body text-center">
                    <img class="rounded-circle" src="{{ asset('assets/img/Logo.jpg') }}" alt="DimsumBliss"
                        style="width: 100px; height: 100px;margin-right: 10px;margin-top:-5px;">
                    <h2 class="card-title mb-2">Welcome Back!</h2>
                    <form action="{{ url('auth/login') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter your username"
                                name="username" required />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password"
                                name="password" required />
                        </div>
                        <button type="submit" class="btn btn-accent w-100 py-2">
                            Login
                        </button>
                    </form>
                    <p class="mt-3 text-muted">
                        Tidak ada akun? Kontak ke <span style="color: Red">Admin</span>
                    </p>
                </div>
            </div>
        </div>
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
