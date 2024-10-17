@extends('admin.admin')

@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Kategori</h3>
                </div>
                {{-- card header --}}
                <div class="card-body">
                    {{-- form untuk mengedit entri anda --}}
                    <form action="{{ route('kategori.update', $kategori->id) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')

                         <div class="form-group">
                            <label for="nama_produk">Tambahkan Kategori</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                                placeholder="Enter Nama Guru" value="{{ old('nama_produk', $kategori->nama_produk) }}">
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <input class="form-control" id="jenis" name="jenis" placeholder="Enter Deskripsi"
                                value="{{ old('jenis', $kategori->jenis) }}">
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                            @if ($kategori->foto)
                                <div class="mt-2">
                                    <img src="{{ asset('images/' . $kategori->foto) }}" alt="{{ $kategori->nama_produk }}"
                                        width="150">
                                </div>
                            @else
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
