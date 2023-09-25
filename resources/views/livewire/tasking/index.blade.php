<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">

            <!-- flash message -->
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <!-- end flash message -->

            <a href="/create" wire:navigate class="btn btn-md btn-success rounded shadow-sm border-0 mb-3">ADD NEW POST</a>
            <div>
                <input type="text" wire:model="search" placeholder="Cari...">
            </div>
            <div class="card border-0 rounded shadow-sm">
                <div class="card-body">
                    <table class="">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">Tugas</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">PIC</th>
                                <th scope="col">Status</th>
                                <th scope="col" >Actions</th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach ($taskings as $tasking)
                            <tr>
                                <td>{{$tasking->tugas}}</td>
                                <td>{{$tasking->tanggal}}</td>
                                <td>{{$tasking->pic}}</td>
                                <td>{{$tasking->status}}</td>
                                <td>
                                    <a href="/edit/{{ $tasking->id }}" wire:navigate class="btn btn-sm btn-primary">EDIT</a>
                                    <button wire:click="destroy({{ $tasking->id }})" class="btn btn-sm btn-danger">DELETE</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
