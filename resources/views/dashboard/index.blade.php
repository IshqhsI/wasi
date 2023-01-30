@extends('layouts.main')

@section('container')
    <div class="container">

        {{-- Content --}}
        <div class="m-5 card shadow">
            <div class="card-header bg-primary text-light">
                Selamat Datang {{ Auth::user()->name }}
            </div>
            <div class="card-body">
                <h5 class="card-title">APLIKASI WEBSITE DINAS PUPRP KAB. BANJAR BIDANG BINA JASA KONSTRUKSI</h5>
                <p class="card-text">Jika kalian ingin mendaftar data WASI (Pengawasan Kontruksi) silahkan mengclick
                    tombol/button di bawah ini !</p>
                <a href="/daftar" class="btn btn-primary">Daftar Data</a>
            </div>
        </div>
    </div>
@endsection
