@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Kamu berhasil masuk!

                    <h2>{{$judul}}</h2>
                    <table class="table table-light">
                        <thead class="thead-dark">
                            <tr>
                            <th>Judul</th>
                            <th>Pengarang</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($objek as $row)
                            <tr>
                                <td>{{ $row->judul }}</td>
                                <td>{{ $row->pengarang }}</td>
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
