@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                {{-- // include  --}}
                @include('artikel.tambah')
                @include('artikel.edit')
                @include('artikel.delete')

                <div class="card-body">

                        <table class="table">
                                <tr>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th> Action </th>
                                </tr>

                                @foreach ($dataartikel as $artikel)
                             <tr>
                                    <td> {{ $artikel->judul }} </td>
                                    <td> {{ $artikel->kategori }} </td>
                                 <td>
                                       {{-- button edit  --}}
                                        <button
                                            class="btn btn-primary btn-sm"   
                                            onclick="editartikel({{ $artikel }})"
                                            >
                                            edit
                                        </button>
                                        <script>
                                            function editartikel(artikel){
                                                // supaya data yang telah diinput terlihat
                                                $("#edit-id").val(artikel.id)
                                                $("#edit-judul").val(artikel.judul)
                                                $("#edit-kategori").val(artikel.kategori)
                                                $("#edit-isi").val(artikel.isi)

                                                $("#modal-editartikel").modal("show");
                                            }
                                        </script>
                                        
                                        {{-- button delete --}}
                                        <button
                                            class="btn btn-danger btn-sm"
                                            onclick="deleteartikel({{ $artikel }})"
                                            >
                                            delete
                                        </button>
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


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
