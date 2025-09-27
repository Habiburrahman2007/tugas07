@extends('layouts/app')
@section('content')
    <i class="fas fa-user"></i>
    <h1 class="h3 mb-4 text-gray-800 mr-2">{{ $title }}</h1>
    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-beetween">
            <div class="mb-1 mr-2">
                <a href="{{ route('userCreate') }}" class="btn btn-sm btn-primary">
                    <i class="fas fa-plus mr-2"></i>
                    Tambah Data
                </a>
                </div>
                <div>
                <a href="{{ route('userExcel') }}" class="btn btn-sm btn-success">
                    <i class="fas fa-file-excel mr-2"></i>
                    Excel
                </a>
                </div>
                <div>
                <a href="{{ route('userPdf') }}" target="_blank" class="btn btn-sm btn-danger">
                    <i class="fas fa-file-excel mr-2"></i>
                    PDF
                </a>
                </div>
            </div>
        <div class="card-body">
            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-primary text-white">
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jabatan</th>
                                            <th>Status</th>
                                            <th>
                                                <i class="fas fa-cog"></i>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $item)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama}}</td>
                                                <td class="text-center">
                                                    <span class="badge badge-info">
                                                        {{ $item->email }}
                                                    </span>
                                                </td>
                                                <td class="text-center">
                                                    @if ($item->jabatan == 'Admin')
                                                        <span class="badge badge-primary">
                                                            {{ $item->jabatan }}
                                                        </span>
                                                    @else
                                                        <span class="badge badge-info">
                                                            {{ $item->jabatan }}
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    @if ($item->is_tugas == false)
                                                        <span class="badge badge-danger">
                                                            Belum ditugaskan
                                                        </span>
                                                    @else
                                                        <span class="badge badge-success">
                                                            Sudah ditugaskan
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                <a href="{{ route('userEdit', $item->id) }}" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                @include('admin/user/modal')
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
        </div>
    </div>
@endsection