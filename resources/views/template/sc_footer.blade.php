<!-- JavaScript Libraries -->

{{--  NPM  --}}
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
{{--  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>  --}}
<!-- Bootstrap JS + Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


{{--  Lib  --}}
<script src="{{ asset('assets/lib/chart/chart.min.js') }}"></script>
<script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<script src="{{ asset('assets/js/datatables.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>


<script>
    const toggleSidebar = document.getElementById("toggleSidebar");
    const sidebar = document.getElementById("sidebar");
    const content = document.getElementById("content");
    const navbar = document.getElementById("navbar");

    toggleSidebar.addEventListener("click", () => {
        sidebar.classList.toggle("hidden");
        content.classList.toggle("full-width");
        navbar.classList.toggle("hidden");
    });
</script>

<script>
    function showToast(message, isSuccess) {
        var toastClass = isSuccess ? 'success' : 'error';
        var toast = $('<div class="toast ' + toastClass + '">' + message + '</div>');
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
    showToast('Login Berhasil !! - Selamat Datang di DimsumBliss', true); // Untuk notifikasi berhasil
    // showToast('Login gagal. Kata sandi yang Anda masukkan salah.', false); // Untuk notifikasi gagal
</script>
