@extends('admin.admin')

@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Produk Baru</h3>
                </div>
                {{-- card header --}}
                <div class="card-body">
                    {{-- Form untuk membuat entri baru --}}
                    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                                placeholder="Masukkan Nama Produk" value="{{ old('nama_produk') }}">
                            @error('nama_produk')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <input type="text" class="form-control" id="jenis" name="jenis"
                                placeholder="Masukkan jenis" value=" {{ old('jenis') }}">
                            @error('jenis')
                                <span class="text_danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto Produk</label>
                            <input type="file" class="form-control" id="foto" name="foto"
                                placeholder="Masukkan Nama Produk" value="{{ old('nama_produk') }}">
                            @error('foto')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('produk.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
                {{-- /.card-body --}}
            </div>
            {{-- /.card b --}}
        </div>
    </div>
@endsection
