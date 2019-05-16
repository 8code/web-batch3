@extends('layouts.app')

@section('content')
  <div class="container">
    <form class="" action="{{route('artikel.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
          <label for="">Judul</label>
          <input type="text" name="judul" value="" class="form-control" placeholder="Judul Artikel">
        </div>

        <div class="form-group">
          <label for="">Slug</label>
          <input type ="plug" name="slug" rows="5" class="form-control" placeholder="Apa Slug"></input>
        </div>

        <div class="form-group">
          <label for="">Isi Artikel</label>
          <textarea name="isi" rows="5" class="form-control" placeholder="Isi Artikel"></textarea>
        </div>

        <div class="form-group">
          <label for="">Kategori</label>
          <select name="kategori" rows="5" class="form-control" placeholder="Kategori"></select>
        </div>

        <div class="form-group">
          <label for="">Img</label><br>
          <input type="file" name="img" rows="5" class="file-control"></input>
        </div>

        <div class="form-group">
          <label for="">View</label>
          <textarea name="view" rows="5" class="form-control"></textarea>
        </div>

        <div class="form-group">
          <label for="">Video</label><br>
          <input type="file" name="video" rows="5"></input>
        </div>

        <div class="form-group">
          <input type="submit" value="Save" class="btn btn-primary">
        </div>
    </form>
  </div>
@endsection
