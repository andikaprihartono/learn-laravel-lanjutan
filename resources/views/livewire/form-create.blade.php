<div>
    {{-- <form wire:submit="save">
        <livewire:Inputs wire:model="tugas" label="Tugas" name="tugas" placeholder="Isi Tugas "/>
        <livewire:Inputs wire:model="tanggal" type="date" label="Tanggal" name="tanggal" placeholder="Isi Tanggal "/>
        <livewire:Inputs wire:model="pic" label="PIC" name="pic" placeholder="Isi Nama "/>
        <livewire:Inputs wire:model="status" label="Status" name="status" placeholder="Isi Status Pekerjaan "/>
        <button type="submit">Save</button>
    </form> --}}
        {{-- <livewire:Button name="Simpan"/> --}}
<form wire:submit="save">
    <div class="mb-4">
        <label for="tugas" class="block text-gray-700">Tugas:</label>
        <input type="text" wire:model="tugas" id="tugas" class="form-input">
    </div>
    <div class="mb-4">
        <label for="pic" class="block text-gray-700">PIC:</label>
        <input type="text" wire:model="pic" id="pic" class="form-input">
    </div>
    <div class="mb-4">
        <label for="tanggal" class="block text-gray-700">Tanggal:</label>
        <input type="date" wire:model="tanggal" id="tanggal" class="form-input">
    </div>
    <div class="mb-4">
        <label for="status" class="block text-gray-700">Status:</label>
        <input type="text" wire:model="status" id="status" class="form-input">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>

</form>
</div>
