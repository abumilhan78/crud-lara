@extends("layouts.master")
@section("title","Tambah Jawaban")
@section("content")


<div class="card text-center">
  <div class="card-header">
    Tambah Jawaban
  </div>
  <div class="card-body">
    <form action="{{route('jawaban.store')}}" method="post" accept-charset="utf-8">
      <div class="form-group">
        <label>Isi</label>
        <textarea class="form-control" value="{{$jawaban->isi}}" name="isi" readonly></textarea>
      </div>
      <div class="form-group">
        <label>Jawaban Benar</label>
        <input type="radio" disabled @if($jawaban->jawaban_benar == "true") selected @endif name="jawaban_benar">True<br>
        <input type="radio" disabled @if($jawaban->jawaban_benar == "false") selected @endif name="jawaban_benar">False
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" disabled type="checkbox" @if(isset($jawaban->like)) checked @endif name="like" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Like
          </label>
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" disabled type="checkbox" @if(isset($jawaban->like)) checked @endif name="dislike" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Dislike
          </label>
        </div>
      </div>
      <div class="form-group">
        <label>Pertanyaan</label>
        <select name="id_pertanyaan" class="custom-select custom-select-lg mb-3" multiple disabled>
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