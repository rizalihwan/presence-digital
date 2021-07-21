@extends('layouts.app')

@push('style')
    <style>
        #results {
            padding: 20px;
            border: 1px solid;
            background: #ccc;
        }

    </style>
@endpush
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Statistics Card -->
                        <div class="col-md-12">
                            <div class="card card-statistics">
                                {{-- @if ($now != $student->tanggal) --}}
                                <div class="card-header">
                                    <h4><strong>Data Semua Absen Siswa.</strong></h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Siswa</th>
                                                    <th>Foto Absen</th>
                                                    <th>Tanggal Absensi</th>
                                                    <th>Jam Absensi</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($students as $student)
                                                    <tr>
                                                        <th>{{ $loop->iteration + $students->firstItem() - 1 . '.' }}</th>
                                                        <td>
                                                            <span class="badge badge-success">{{ $student->user->name }}</span>
                                                        </td>
                                                        <td>
                                                            <img src="{{ asset('potosiswa/'.$student->foto_siswa) }}" alt="thumbnail" srcset="" width="100px">
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-info">{{ $student->tanggal }}</span>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-info">{{ $student->jam }}</span>
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('guru.destroy', $student->id) }}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('yakin hapus data?');">Delete</button>
                                                            </form>
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
            </div>
            </section>
        </div>
    </div>
    </div>
@endsection
