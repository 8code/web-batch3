{{-- <button 
    type="button" 
    class="btn btn-primary" 
    data-toggle="modal" 
    data-target="#exampleModal">
    Tambah Artikel
</button> --}}

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url("/artikel") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Judul</label>
                <input class="form-control" type="text" name="judul" placeholder="Judul Artikel" required>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input class="form-control" type="text" name="kategori" placeholder="Kategori" required>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input id="uploadimage" class="form-control" type="file" name="image" required>
                <img id="imagepreview" src="" width="100px">
                <script>
                    $("#uploadimage").change(function(){
                        // alert("test")
                        $("#imagepreview").attr("src",$(this).val())
                    })
                </script>
            </div>
            <div class="form-group">
                <label>Video</label>
                <input class="form-control" type="text" name="video" placeholder="Video Link">
            </div>
            <div class="form-group">
                <label>Isi Konten</label>
                <textarea name="isi" class="form-control" required>
                </textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Tambahkan
            </button>

            {{-- Form --}}
        </form>
      </div>
    </div>
  </div>
</div>