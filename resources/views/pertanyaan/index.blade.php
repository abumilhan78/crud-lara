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
          <th scope="col">Judul</th>
          <th scope="col">Isi</th>
          <th scope="col">Like</th>
          <th scope="col">Dislike</th>
          <th scope="col">Vote</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pertanyaan as $key)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$key->judul}}</td>
          <td>{{$key->isi}}</td>
          <td>{{$key->like}}</td>
          <td>{{$key->dislike}}</td>
          <td>{{$key->vote}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection