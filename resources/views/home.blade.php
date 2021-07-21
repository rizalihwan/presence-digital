@extends('layouts.app')

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
                        <!-- Medal Card -->
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>Selamat datang 🎉</h5>
                                    <p class="card-text font-small-3"> {{ Str::upper(auth()->user()->name) }}</p>
                                    <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/badge.svg"
                                        class="congratulation-medal" alt="Medal Pic" />
                                </div>
                            </div>
                        </div>
                        <!--/ Medal Card -->

                        <!-- Statistics Card -->
                        <div class="col-xl-8 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">Informasi Pesan</h4>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <div class="col-xl-12 col-sm-12 col-12 mb-2 mb-xl-0">
                                            <div class="media">
                                                <div class="avatar bg-light-primary mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="user" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                @if (auth()->user()->role == 'guru')
                                                    <h4>{{ $students }}</h4>
                                                    <small class="ml-1">Jumlah Semua Data Absen Siswa.</small>
                                                @endif
                                                @if (auth()->user()->role == 'siswa')
                                                    <h4>Silahkan klik menu "absen sekarang" untuk mengisi kehadiran.</h4>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
@endsection
