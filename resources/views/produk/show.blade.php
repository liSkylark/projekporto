@extends('admin.admin')

@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detail Produk</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_ produk">Nama Produk:</label>
                            <p>{{ $produk->nama_produk}}</p>
                        </div>

                        <div class="form-group">
                            <label for="jenis">Jenis:</label>
                            <p>{{ $produk->jenis }}</p>
                        </div>

                        <div class="form-group">
                            <label for="jenis">Foto:</label>
                        </div>
                        @if ($produk->foto)
                        <img src="{{ asset('images/' .$produk->foto) }}" alt="{{ $produk->nama_produk }}"
                        class="img-fluid" style="max-width: 20%; height: auto;">
                        @else
                        <p>Foto tidak tersedia</p>
                        @endif
                    </div>
                </div>
                <a href="{{ route('produk.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
