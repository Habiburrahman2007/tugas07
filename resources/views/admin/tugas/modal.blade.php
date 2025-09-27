<!-- Modal Destroy-->
<div class="modal fade" id="modalTugasDestroy{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header bg-danger text-white">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus {{ $title }}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body text-left">
            <div class="row">
                <div class="col-6">
                    Nama
                </div>
                <div class="col-6">
                    : {{ $item->user->nama }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Email
                </div>
                <div class="col-6">
                    :
                    <span class="badge badge-primary">
                        {{ $item->user->email }}
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Jabatan
                </div>
                <div class="col-6">
                    :
                        <span class="badge badge-info">
                            {{ $item->user->jabatan }}
                        </span>
                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">
                <i class="fas fa-times"></i>
                Tutup
            </button>
            <form action="{{ route('tugasDestroy', $item->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash"></i> Hapus
                </button>
            </form>

        </div>
        </div>
    </div>
</div>

<!-- Modal Show-->
<div class="modal fade" id="modalTugasShow{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header bg-info text-white">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail {{ $title }}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body text-left">
            <div class="row">
                <div class="col-6">
                    Nama
                </div>
                <div class="col-6">
                    : {{ $item->user->nama }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Email
                </div>
                <div class="col-6">
                    :
                    <span class="badge badge-primary">
                        {{ $item->user->email }}
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Jabatan
                </div>
                <div class="col-6">
                    :
                        <span class="badge badge-info">
                            {{ $item->user->jabatan }}
                        </span>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>