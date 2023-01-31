@extends('layouts.mainHome')
@section('container')
    <div class="d-flex" id="wrapper">
        <div class="wasi" id="sidebar-wrapper">
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-house me-2"></i>Home</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text "><i
                        class="fas fa-folder me-2"></i>Tutorial</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text "><i
                        class="fas fa-id-badge me-2"></i>Contact</a>
            </div>
        </div>



        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4 wasinav">
                <div class="d-flex align-items-center">
                    <i class="fas fa-bars primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 wasilogo">WASI | APLIKASI BINA JASA KONTRUKSI</h2>
                </div>
            </nav>

            <section id="lp-text">
                <div class="gambarmob">
                    <img src="assets/img/login/logo1.png" class="logo-text" alt="Landing Image">
                </div>
                <div class="home">
                    <h1>Selamat Datang di Website <span>WASI DINAS PUPRP KAB. BANJAR BIDANG BINA JASA
                            KONSTRUKSI</span></h1>
                    <p>Aplikasi Pengawasan Kontruksi Kabupaten Banjar, jika anda sudah memiliki account silahkan login &
                        jika anda belum memiliki account silahkan daftar, pada tombol di bawah ini ! </p>
                    <a class="btn-alt-bar" href="/login">Login Account</a>
                    <a class="btn-alt-baru" href="/register">Daftar Account</a>
                </div>
                <div class="gambar">
                    <img src="assets/img/login/logo2.png" class="logo-text" alt="Landing Image">
                </div>
            </section>
        </div>
    </div>
@endsection
