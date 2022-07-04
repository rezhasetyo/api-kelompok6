@extends('template/master')

@section('content')
<div class="pagetitle">
  <h1>Detail Film</h1>
  <nav>
    <ol class="breadcrumb h2">
      <li class="breadcrumb-item"><a href="/">Tabel</a></li>
      <li class="breadcrumb-item active">Detail Film</li>
    </ol>
  </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Detail Film</h5>
              <form>
                    <div class="content">
                        <div class="row ml-auto">
                            <div class="col">
                                <div class="form-group">
                                    <label>Judul Film</label>
                                    <input class="form-control" value="{{ $data->judul }}" disabled>
                                </div> <br>

                                <div class="form-group">
                                    <label>Sutradara</label>
                                    <input class="form-control" value="{{ $data->sutradara }}" disabled>
                                </div> <br>

                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input class="form-control" value="{{ $data->tahun }}" disabled>
                                </div> <br>

                                <div class="form-group">
                                    <label>Rating Film</label>
                                    <input class="form-control" value="{{ $data->rating }}" disabled>
                                </div> <br>

                                <div class="form-group">
                                    <label>Genre Film</label>
                                    <input class="form-control" value="{{ $data->rating }}" disabled>
                                </div> <br>

                                <div class="form-group">
                                    <label>Harga</label>
                                    <input class="form-control" value="{{ $data->harga }}" disabled>
                                </div> <br>

                                <div class="form-group">
                                    <label>Sinopsis</label>
                                    <!-- <textarea class="form-control" disabled>{{ $data->sinopsis }}</textarea> -->
                                    <p>{{ $data->sinopsis }}</p>
                                </div> <br>
                                
                                <div class="form-group">
                                <a href="/" class="btn btn-success">Kembali</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>
                
@endsection