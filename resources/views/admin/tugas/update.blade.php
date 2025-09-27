@extends('layouts/app')
@section('content')
    <i class="fas fa-plus"></i>
    <h1 class="h3 mb-4 text-gray-800 mr-2">{{ $title }}</h1>
    <div class="card">
        <div class="card-header bg-warning">
            <a href="{{ route('tugas') }}" class="btn btn-sm btn-success">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">
            <form action="{{ route('tugasUpdate', $tugas->id) }}" method="POST">
                @csrf
            <div class="row mb-2">

                <div class="col-xl-12">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Nama :
                    </label>
                    <input type="text" class="form-control" disabled value="{{ $tugas->user->nama }}">
                </div>

                <div class="col-xl-12">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Tugas:
                    </label>
                        <textarea name="tugas" rows="10" class="form-control @error('tugas') is-invalid @enderror">
                            {{ $tugas->tugas }}
                        </textarea>
                        @error('tugas')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                </div>

                <div class="col-xl-6">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Tanggal Mulai:
                    </label>
                        <input type="date" name="tanggal_mulai" value="{{ $tugas->tanggal_mulai }}" class="form-control  @error('tanggal_mulai') is-invalid @enderror">
                        @error('tanggal_mulai')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                </div>
                <div class="col-xl-6">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Tanggal Selesai:
                    </label>
                        <input type="date" name="tanggal_selesai" value="{{ $tugas->tanggal_selesai }}" class="form-control  @error('tanggal_selesai') is-invalid @enderror">
                        @error('tanggal_selesai')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                </div>
                <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn btn-sm btn-warning">
                        <i class="fas fa-edit mr-2"></i>
                        Edit
                    </button>
                </div>
                </form>
            </div>
        </div>
@endsection