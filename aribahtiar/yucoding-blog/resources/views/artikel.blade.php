@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Artikel</div>
<<<<<<< HEAD
                @include('artikel.tambah')
                <div class="card-body">


                    <table class="table table-hover">
=======
                @include('artikel.edit')
                @include('artikel.delete')
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <table class="table">
>>>>>>> b31d277a0a89b3fd082bfdbb027b9383f68f5ed9
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Image</th>
                            <th>Video</th>
                            <th>Isi</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($dataartikel as $artikel)
                        <tr>
                            <td> 
                                <img src="/img/{{ $artikel->img }}" width="50px">    
                            </td>
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

<<<<<<< HEAD
                                        $("#modal-editartikel").modal("show");
=======
                                        $("#imgedit").html(`
                                            <img src="/img/${artikel.img}" width="150px">
                                        `)

                                        $("#edit-id").val(artikel.id)
                                        $("#edit-judul").val(artikel.judul)
                                        $("#edit-kategori").val(artikel.kategori)
                                        $("#edit-isi").val(artikel.isi)
>>>>>>> b31d277a0a89b3fd082bfdbb027b9383f68f5ed9

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

<<<<<<< HEAD
=======
                    {{ $dataartikel->links() }}
>>>>>>> b31d277a0a89b3fd082bfdbb027b9383f68f5ed9
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
