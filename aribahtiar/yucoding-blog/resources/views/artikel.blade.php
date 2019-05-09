@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Artikel</div>
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
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th class="text-right">Action</th>
                        </tr>
                        @foreach ($dataartikel as $artikel)
                        <tr>
                            <td> {{ $artikel->judul }}</td>
                            <td> {{ $artikel->kategori }}</td>
                            <td class="text-right"> 
                                <button 
                                    class="btn btn-primary btn-sm"
                                    onclick="editartikel({{ $artikel }})"
                                >
                                    Edit
                                </button>
                                <button 
                                    class="btn btn-danger btn-sm"
                                    onclick="deleteartikel({{ $artikel }})"
                                    >
                                    Delete
                                </button>

                                <script>
                                    function editartikel(artikel){

                                        $("#edit-id").val(artikel.id)
                                        $("#edit-judul").val(artikel.judul)
                                        $("#edit-kategori").val(artikel.kategori)
                                        $("#edit-isi").val(artikel.isi)

                                        $("#modal-editartikel").modal("show")
                                        
                                    }
                                    function deleteartikel(artikel){

                                        // Tambahkan ID
                                        $("#delete-id").val(artikel.id)

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
