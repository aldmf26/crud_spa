<!-- Modal -->
<div wire:ignore.self class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                    <form wire:submit.prevent="store">
                    
                        <div class="form-group">
                            <label>TITLE</label>
                            <input type="text" wire:model="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan Title">
                            @error('title')
                                <span class="invalid-feedback">
                                        {{ $message }}
                                 </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>KONTEN</label>
                           <textarea wire:model="content" class="form-control @error('content') is-invalid @enderror" rows="4" placeholder="Masukkan Konten"></textarea>
                           @error('content')
                                <span class="invalid-feedback">
                                        {{ $message }}
                                 </span>
                            @enderror
                        </div>
                    
                    </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save changes</button>
            </div>
        </div>
    </div>
</div>