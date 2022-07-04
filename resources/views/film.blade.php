@extends('template/master')

@section('content')
<div class="pagetitle">
  <h1>Tabel Film</h1>
  <nav>
    <ol class="breadcrumb h2">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active">Tabel Film</li>
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
                          <th scope="col" class="col-1">ID</th>
                          <th scope="col" class="col-3">Judul Film</th>
                          <th scope="col">Ringkasan</th>
                          <th scope="col" class="col-1">Action</th>  <!-- style="width:10%" -->
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $key=>$value)
                        <tr>
                          <td>{{ $value->id }}</td>
                          <td>{{ $value->judul }}</td>
                          <td>{{ Str::limit($value->sinopsis, 250) }}</td>
                          <td>
                            <!-- <a href="#" class="btn btn-sm btn-info mb-2">Edit</a> -->
                            <a href="#" class="btn btn-sm btn-success mb-2">Detail</a>
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