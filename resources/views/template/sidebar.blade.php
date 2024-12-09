<!-- Sidebar -->
<div class="sidebar shadow-lg border border-info" id="sidebar">
    <div class="mb-5" style="height: 50px"></div>
    <a id="none" href="{{ url('/') }}" style="padding: 0;margin: 0"><img class="border border-info"
            src="{{ asset('assets/img/Logo.jpg') }}"
            style="height: 100px;width: 200px;border-radius: 80px;border-end-end-radius: 50px;border-start-end-radius: 50px"
            alt="CATS Logo" /></a>
    <h2 id="judul">Welcome {{ @Auth::user()->username }}</h2>
    <a href="{{ url('/') }}" class="{{ $title == 'Dashboard' ? 'active' : '' }}">Dashboard</a>
    <a href="{{ url('/produk') }}" class="{{ $title == 'Produk' ? 'active' : '' }}">Menu Items</a>
    <a href="{{ url('/report') }}"
        class="{{ (($title == 'Report' ? 'active' : $title == 'Detail hutang') ? 'active' : $title == 'Pembayaran') ? 'active' : '' }}">Reports</a>
    <a href="{{ url('/pengadaan') }}" class="{{ $title == 'Pengadaan' ? 'active' : '' }}">Stuff</a>
    <a href="{{ url('/transaksi') }}" class="{{ $title == 'Transaksi' ? 'active' : '' }}">Transactions</a>
    <a href="{{ url('/pelanggan') }}" class="{{ $title == 'Pelanggan' ? 'active' : '' }}">Customers</a>
    <a href="{{ url('/akun') }}" class="{{ $title == 'Akun' ? 'active' : '' }}">Account</a>
    <a href="{{ route('signout') }}" style="color: red; background-color: black; text-transform: uppercase">Logout</a>
</div>
