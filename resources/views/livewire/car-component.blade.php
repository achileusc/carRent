@livewireStyles()
<div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h4 class="card-title">Daftar Mobil</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Merk</th>
                <th>Model</th>
                <th>Nomor Plat</th>
                <th>Tarif</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($car as $data)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $data->merk }}</td>
                    <td>{{ $data->model }}</td>
                    <td>{{ $data->nomorplat }}</td>
                    <td>{{ $data->tarif }}</td>
                    <td>
                        <button class="btn btn-info" wire:click="edit({{ $data->id }})">Edit</button>
                        <button class="btn btn-danger" wire:click="edit({{ $data->id }})">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
          {{ $car->links() }}
          <button wire:click="create" class="btn btn-primary">Tambah</button>
        </div>
      </div>
    </div>
  </div>
  @if ($addPage)
  @include('car.create')
  @endif
  @if ($editPage)
      @include('car.edit')
  @endif
  @livewireScripts()