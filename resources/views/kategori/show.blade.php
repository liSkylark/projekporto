@extends('admin.admin')

@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detail Kategori</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_ kategori">Nama Kategori:</label>
                            <p>{{ $kategori->nama_produk}}</p>
                        </div>

                        <div class="form-group">
                            <label for="jenis">Jenis:</label>
                            <p>{{ $kategori->jenis }}</p>
                        </div>

                        <div class="form-group">
                            <label for="jenis">Foto:</label>
                        </div>
                        @if ($kategori->foto)
                        <img src="{{ asset('images/' .$kategori->foto) }}" alt="{{ $kategori->nama_produk }}"
                        class="img-fluid" style="max-width: 20%; height: auto;">
                        @else
                        <p>Foto tidak tersedia</p>
                        @endif
                    </div>
                </div>
                <a href="{{ route('kategori.index') }}" class="btn btn-primary">Back to Lists</a>
            </div>
        </div>
    </div>
@endsection
=
