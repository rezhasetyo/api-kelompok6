@extends('template/master')

@section('content')
<div class="pagetitle">
  <h1>Tabel Film</h1>
  <nav>
    <ol class="breadcrumb h2">
      <li class="breadcrumb-item"><a href="/">Tabel</a></li>
      <li class="breadcrumb-item active">Tabel Genre</li>
    </ol>
  </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- TABLE -->
                    <a href="#" class="btn btn-primary mt-3 mb-3">Tambah Data</a>
                    <table class="table datatable">
                      <thead>
                        <tr>
                          <th scope="col" class="col-2">ID</th>
                          <th scope="col">Genre Film</th>
                          <th scope="col" class="col-2">Action</th>  <!-- style="width:10%" -->
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $key=>$value)
                        <tr>
                          <td>{{ $value->id }}</td>
                          <td>{{ $value->nama_genre }}</td>
                          <td>
                            <a href="#" class="btn btn-sm btn-info">Daftar Film</a>
                            <!-- <a href="#" class="btn btn-sm btn-info">Edit</a> -->
                            <!-- <a href="#" class="btn btn-sm btn-success">Detail</a> -->
                            <!-- <form action="#" class="d-inline" onsubmit="return confirm('Yakin hapus data?') ">
                                <button class="btn btn-sm btn-danger">
                                    Hapus
                                </button>
                            </form> -->
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <!-- END TABLE -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')