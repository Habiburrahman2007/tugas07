@extends('layouts.app')
@section('content')
    <i class="fas fa-tasks"></i>
    <h1 class="h3 mb-4 text-gray-800 mr-2">{{ $title }}</h1>
    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-end justify-content-xl-beetween">
            @if (auth()->user()->is_tugas == true)
                <a href="{{ route('tugasPdf') }}" target="_blank" class="btn btn-sm btn-danger">
                    <i class="fas fa-file-excel mr-2"></i>
                    PDF
                </a>
            @endif
        </div>
            </div>
        <div class="card-body border">
            @if (auth()->user()->is_tugas == true)
                <div class="row">
                    <div class="col-6">
                        Nama
                    </div>
                    <div class="col-6">
                        : {{ $tugas->user->nama }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        Email
                    </div>
                    <div class="col-6">
                        : 
                        <span class="badge badge-info">
                            {{ $tugas->user->email }}
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        Tugas
                    </div>
                    <div class="col-6">
                        : {{ $tugas->tugas }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        Tanggal Mulai
                    </div>
                    <div class="col-6">
                        : 
                        <span class="badge badge-info">
                            {{ $tugas->tanggal_mulai }}
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        Tanggal Selesai
                    </div>
                    <div class="col-6">
                        : 
                        <span class="badge badge-info">
                            {{ $tugas->tanggal_selesai }}
                        </span>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-6">
                        Nama :
                    </div>
                    <span class="badge badge-danger mb-2">
                        {{ $tugas->user->nama }}
                    </span>
                </div>
                <div class="row">
                    <div class="col-6">
                        Status :
                    </div>
                    <span class="badge badge-primary">
                        Belum ditugaskan
                    </span>
                </div>
            @endif
        </div>
    @endsection
</div>

