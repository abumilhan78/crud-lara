@extends("layouts.master")
@section("title","Tabel Jawaban")
@section("content")


<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <table class="table table-hover table-dark">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Isi</th>
          <th scope="col">Jawaban Benar</th>
          <th scope="col">Like</th>
          <th scope="col">Dislike</th>
          <th scope="col">Vote</th>
          <th scope="col">Pertanyaan</th>
        </tr>
      </thead>
      <tbody>
        @foreach($jawaban as $key)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$key->isi}}</td>
          <td>{{$key->jawaban_benar}}</td>
          <td>{{$key->like}}</td>
          <td>{{$key->dislike}}</td>
          <td>{{$key->vote}}</td>
          <td>{{$key->pertanyaan}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection