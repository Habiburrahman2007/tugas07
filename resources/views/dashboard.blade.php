@extends('layouts.app')
@section('content')
<div class="d-flex align-item-center gap-2">
        <i class="fas fa-tachometer-alt"></i>
    <h1 class="h3 mb-4 text-gray-800 mr-2">{{ $title }}</h1>
</div>
    <div class="row">
        @if (auth()->user()->jabatan == 'Admin')
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total User</div>
                            <div class="h5 mb-0 font-weight-bold text-primary">
                                {{ $jumlahUser }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-dark font-weight-bold text-primary text-uppercase mb-1">
                                Total Admin</div>
                            <div class="h5 mb-0 font-weight-bold text-dark">
                                {{ $jumlahAdmin }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-info font-weight-bold text-primary text-uppercase mb-1">
                                Total Karyawan</div>
                            <div class="h5 mb-0 font-weight-bold text-info">
                                {{ $jumlahKaryawan }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-success font-weight-bold text-success text-uppercase mb-1">
                                Total Ditugaskan</div>
                            <div class="h5 mb-0 font-weight-bold text-success">
                                {{ $jumlahDitugaskan }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-danger font-weight-bold text-uppercase mb-1">
                                Total Belum Ditugaskan</div>
                            <div class="h5 mb-0 font-weight-bold text-danger">
                                {{ $jumlahBelumDitugaskan }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-times fa-2x text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if (auth()->user()->jabatan == 'Karyawan'&& auth()->user()->is_tugas == true)
            <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-success font-weight-bold text-uppercase mb-1">
                                Status</div>
                            <div class="h5 mb-0 font-weight-bold text-success">
                                <span class="badge badge-success">
                                    Ditugaskan
                                </span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if (auth()->user()->jabatan == 'Karyawan'&& auth()->user()->is_tugas == false)
            <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-danger font-weight-bold text-uppercase mb-1">
                                Status</div>
                            <div class="h5 mb-0 font-weight-bold text-danger">
                                <span class="badge badge-danger">
                                    Belum Ditugaskan
                                </span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-times fa-2x text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection