@extends('layouts.mainAdmin')

@section('container')
    <div class="container">

        {{-- Content --}}
        <div class="container-fluid px-4">
            <div class="row g-3 my-2 mb-5">
                <div class="col-md-4">
                    <div class="p-3 bg-success shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">{{ $jumlahUser }}</h3>
                            <p class="fs-5">Jumlah User Pendaftar</p>
                        </div>
                        <i class="fas fa-user fs-1 bg-white primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 bg-success shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">{{ $jumlahDaftar }}</h3>
                            <p class="fs-5">Jumlah File Pendaftar</p>

                        </div>
                        <i class="fas fa-file fs-1 bg-white  primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <h3 class="fs-4 mb-3 mt-5">List Data Pendaftar</h3>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Dinas / Pengguna Jasa</th>
                        <th>PPK</th>
                        <th>Nama Perusahaan</th>
                        <th>Alamat Perusahaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($row as $item)
                        @php
                            
                            $one = DB::select(
                                'select users.name, users.email FROM users INNER JOIN paket_pekerjaans 
                                    ON users.id = paket_pekerjaans.id_user
                                    WHERE paket_pekerjaans.id_user = ?;',
                                [$item->id_user],
                            );
                            $one = $one[0];
                        @endphp
                        <tr>

                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $one->name }}</td>
                            <td>{{ $one->email }}</td>
                            <td>{{ $item->dinas }}</td>
                            <td>{{ $item->pejabat_pembuat_komitmen }}</td>
                            <td>{{ $item->nama_perusahaan }}</td>
                            <td>{{ $item->alamat_perusahaan }}</td>
                            <td>
                                <a href="/admin/detail/{{ $item->id }}" class="btn btn-success m-1 p-1"><i
                                        class="fa fa-user"></i> View </a>
                                <a href="/admin/edit/{{ $item->id }}" class="btn btn-primary m-1 p-1"><i
                                        class="fa fa-pen-to-square"></i>
                                    Edit</a>
                                <a href="/admin/hapus/{{ $item->id }}" class="btn btn-danger m-1 p-1"><i
                                        class="fa fa-trash"></i>Hapus</a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>
    </div>
    </div>
@endsection
