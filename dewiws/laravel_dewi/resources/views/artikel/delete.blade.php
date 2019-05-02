<div class="modal fade" id="modal-deleteartikel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route("delete_artikel")}}">
          @csrf
          {{-- tambahkan id --}}
            <input type="hidden" name="id" id="delete-id">
            <label class="w-100">Apakah yakin akan menghapus artikel?</label>
            <button type="submit" class="btn btn-primary">OK</button>
        </form>


      </div>
     
    </div>
  </div>
</div>