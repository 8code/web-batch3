@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Artikel</div>
                @include('artikel.tambah')
                <div class="card-body">


                    <table class="table table-hover">
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Image</th>
                            <th>Video</th>
                            <th>Isi</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($dataartikel as $artikel)
                        <tr>
                            <td> {{ $artikel->judul }}</td>
                            <td> {{ $artikel->kategori }}</td>
                            <td> {{ $artikel->img }}</td>
                            <td> {{ $artikel->video }}</td>
                            <td> {{ $artikel->isi }}</td>
                            <td>
                                <button
                                    class="btn btn-primary btn-sm"
                                    onclick="editartikel({{ $artikel }})"
                                >
                                    Edit
                                </button>
                                @include('artikel.edit')
                                <script>
                                    function editartikel(artikel){
                                        $("#edit-id").val(artikel.id);
                                        $("#edit-judul").val(artikel.judul);
                                        $("#edit-kategori").val(artikel.kategori);
                                        $("#edit-isi").val(artikel.isi);
                                        $("#edit-img").val(artikel.img);
                                        $("#edit-video").val(artikel.video);

                                        $("#modal-editartikel").modal("show");

                                    }
                                </script>

                                <button
                                    class="btn btn-danger btn-sm"
                                    onclick="deleteartikel({{ $artikel }})"
                                >
                                    Delete
                                </button>
                                @include('artikel.delete')
                                <script>
                                    function deleteartikel(artikel){
                                      $("#delete-id").val(artikel.id);

                                        $("#modal-deleteartikel").modal("show");

                                    }
                                </script>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
