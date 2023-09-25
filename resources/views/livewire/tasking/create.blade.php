<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form wire:submit="store" enctype="multipart/form-data">



                        <div class="form-group mb-4">
                            <label class="fw-bold">Tugas</label>
                            <input type="text" class="form-control @error('tugas') is-invalid @enderror" wire:model="tugas" placeholder="Masukkan Tugas">

                            <!-- error message -->
                            @error('tugas')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label class="fw-bold">PIC</label>
                            <input type="text" class="form-control @error('pic') is-invalid @enderror" wire:model="pic" placeholder="Masukkan Nama Anda">

                            <!-- error message -->
                            @error('pic')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label class="fw-bold">Tanggal</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" wire:model="tanggal" placeholder="Masukkan Tanggal">

                            <!-- error message -->
                            @error('tanggal')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label class="fw-bold">Status</label>
                            <input type="text" class="form-control @error('status') is-invalid @enderror" wire:model="status" placeholder="Masukkan Status Anda">

                            <!-- error message -->
                            @error('status')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class=" ">SIMPAN</button>
                        <button type="reset" class="">Cancel</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
