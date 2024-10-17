@extends('admin.admin')

@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <!-- Button to Create New Record -->
                    <div class="card-title">
                        <a href="{{ route('kategori.create') }}" class="btn btn-success btn-sm">Isi Kategori</a>
                    </div>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="float-right form-control" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="p-0 card-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Jenis</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategoris as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama_produk }}</td>
                                    <td>{{ $item->jenis }}</td>
                                    <td>
                                        @if ($item->foto)
                                            <img src="{{ asset('nama_kategori/foto/jenis/' . $item->foto) }}" alt="{{ $item->nama_produk }}"
                                                width="50">
                                        @else
                                            <p>Foto tidak tersedia</p>
                                        @endif
                                        <!-- Tombol hapus jika diperlukan -->
                                        <a href="{{ route('kategori.show', $item->id) }}"
                                            class="btn btn-info btn_sm">Lihat</a>
                                        <a href="{{ route('kategori.edit', $item->id) }}"
                                            class="btn btn-primary btn_sm">Edit</a>
                                        <form action="{{ route('kategori.destroy', $item->id) }}"
                                            method="POST"style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
