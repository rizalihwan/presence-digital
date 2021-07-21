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
                                {{-- @if($now != $student->tanggal) --}}
                                <div class="card-header">
                                    <h4 class="card-title"><strong>Silahkan absen menggunakan GCAM berikut.</strong>
                                        <hr /><span>Untuk mengakses camera silahkan izin kan terlebih dahulu.</span>
                                    </h4>
                                </div>
                                <div class="card-body statistics-body">
                                    <form method="POST" action="{{ route('attendance.store') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="my_camera"></div>
                                                <br />
                                                <input type="button" class="mb-3 btn btn-danger" value="Take Snapshot"
                                                    onClick="take_snapshot()">
                                                <input type="hidden" name="image" class="image-tag">
                                            </div>
                                            <div class="col-md-12">
                                                <div id="results" class="mb-2">Your captured image will appear here...</div>
                                                <div class="form-group">
                                                    <label for="name">Nama Siswa : </label>
                                                    <input type="text" name="name" id="name"
                                                        value="{{ auth()->user()->name }}" class="form-control" readonly
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tanggal">Anda Absen Tanggal :</label>
                                                    <input type="text" name="tanggal" id="tanggal" class="form-control"
                                                        readonly required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jam">Anda Absen Pukul :</label>
                                                    <input type="text" name="jam" id="jam" class="form-control" readonly
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <br />
                                            <button type="submit" class="btn btn-success">KIRIM ABSEN</button>
                                        </div>
                                    </form>
                                </div>
                                {{-- @else
                                    <h1 style="color: red;" class="p-3">Anda sudah melakukan absensi hari ini!</h1>
                                @endif --}}
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </section>
    </div>
    </div>
    </div>
    <script language="JavaScript">
        let today = new Date();
        const date = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
        const time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        document.getElementById('tanggal').value = date;
        document.getElementById('jam').value = time;
        // webcam
        Webcam.set({
            width: 490,
            height: 390,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.attach('#my_camera');

        function take_snapshot() {
            Webcam.snap(function(data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<center><img src="' + data_uri + '"/></center>';
            });
        }

    </script>
@endsection
