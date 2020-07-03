@extends("layouts.master")
@section("title","Tambah Jawaban")
@section("content")


<div class="card text-center">
  <div class="card-header">
    Tambah Jawaban
  </div>
  <div class="card-body">
    <form action="{{route('jawaban')}}" method="post" accept-charset="utf-8">
      <div class="form-group">
        <label>Isi</label>
        <textarea class="form-control" name="isi"></textarea>
      </div>
      <div class="form-group">
        <label>Jawaban Benar</label>
        <input type="radio" name="jawaban_benar">True<br>
        <input type="radio" name="jawaban_benar">False
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="like" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Like
          </label>
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="like" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Dislike
          </label>
        </div>
      </div>
      <div class="form-group">
        <label>Pertanyaan</label>
        <select name="id_pertanyaan" class="custom-select custom-select-lg mb-3" multiple>
          @foreach($pertanyaan as key)
          <option value="{{$key->id}}">{{$key->judul}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <input type="submit" name="send" class="btn btn-block btn-primary">
      </div>
    </form>
  </div>
</div>

@endsection