@extends('layout.main')

@section('container')
    <div>
        <h2 class="fw-bold">Contact US</h2>
    </div>
    <form method="post" action="{{route('contacts.store')}}">
        {{csrf_field()}}
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="inputname" placeholder="Nama" name="nama">
        <label for="inputname">Nama</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email">
        <label for="inputname" class="form-label">Email</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" id="floatingTextarea2" placeholder="Tinggalkan pesan disini" style="height: 100px;" name="pesan"></textarea>
        <label for="floatingTextarea2">Pesan</label>
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

@endsection