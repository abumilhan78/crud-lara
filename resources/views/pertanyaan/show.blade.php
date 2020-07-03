@extends("layouts.master")
@section("title","Tambah Jawaban")
@section("content")


<div class="card text-center">
  <div class="card-header">
    Tambah Jawaban
  </div>
  <div class="card-body">
    <form action="{{route('jawaban.create')}}" method="post" accept-charset="utf-8">
      <div class="form-group">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" readonly>
      </div>
      <div class="form-group">
        <label>Isi</label>
        <textarea class="form-control" name="isi" readonly></textarea>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" @if(isset($jawaban->like)) checked @endif disabled name="like" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Like
          </label>
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" @if(isset($jawaban->like)) checked @endif disabled name="like" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Dislike
          </label>
        </div>
      </div>
      <div class="form-group">
        <input type="submit" name="send" class="btn btn-block btn-primary">
      </div>
    </form>
  </div>
</div>

@endsection