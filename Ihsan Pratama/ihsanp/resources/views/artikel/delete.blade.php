

<div class="modal fade" id="modal-deleteartikel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">pesan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route("delete-id") }}">
         @csrf
         
        <input type="hidden"name="id" id="delete-id">
        <label class="w-100">
          Apakah anda yakin menghapus artikel ini ?
        </label>

       <button type="submit" class="btn btn-danger">
         iya
        </button>
       
      </div>
    </div>
  </div>
</div>