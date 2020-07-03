@extends('backend.themes.master')

@section('konten')
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kirim Pertanyaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item "><a href="/pertanyaan">Pertanyaan</a></li>
              <li class="breadcrumb-item active">Kirim Pertanyaan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
     <form action="/pertanyaan" method="POST">
        @csrf
     <div class="card">

      <!-- /.card-header -->
      <div class="card-body">
   
        <div class="form-group">
           <label>Nama</label>
            <input type="text" class="form-control" placeholder="Nama Anda ..." autocomplete="off" name="tanya_nama">
        </div>
        <div class="form-group">
           <label>Judul Pertanyaan</label>
            <input type="text" class="form-control" placeholder="Judul Pertanyaan ..." autocomplete="off" name="tanya_judul">
        </div>
        <div class="form-group">
           <label>Pertanyaan</label>
            <textarea class="form-control" placeholder="Pertanyaan ..." name="tanya_isi"></textarea>
        </div>
   

         </div>
      <!-- /.card-body -->
      <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
    </div>
     </form>
</section>
@endsection