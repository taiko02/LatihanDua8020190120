@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <a href="{{ url('admin/buku/tambah', []) }}" class="btn btn-primary btn-sm">Tambah</a>
                        <h3>Halaman data buku</h3>
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Judul</th>
                                    <th>Pengarang</th>
                                    <th>Tanggal buat</th>
                                    <th>Tanggal update</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($objek as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td style="width: 15%">{{ $item->pengarang }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td>
                                            <a href="{{ url('admin/buku/edit/' . $item->id, []) }}"
                                                class="btn btn-success btn-sm">
                                                Edit
                                            </a>
                                            <a href="{{ url('admin/buku/hapus/' . $item->id, []) }}"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah anda yakin mengahapus data ini?')">
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
