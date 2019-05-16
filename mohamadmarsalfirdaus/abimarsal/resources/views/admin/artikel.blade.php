@extends('layouts.auth')

@section ('title')
Artikel - Abi Corp
@endsection

@section('body')

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

@include('layouts.components.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

@include('layouts.components.topbar')


      </div>
      <!-- End of Main Content -->
  <div class="card shadow mb-4">
      <div class="table-responsive">
        <table class="table table-hover cold-md-6" id="dataTable">
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
                <td> <img src="/img/{{$artikel->img}}" width="50px"> </td>
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
                            $("#imgedit").html
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
        {{$dataartikel->links() }}
      </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
