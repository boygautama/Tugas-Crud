@extends('backend.themes.master')
@section('konten')
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DETAIL PERTANYAAN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><i class="fa fa-dashboard"></i></li>
              <li class="breadcrumb-item active">Pertanyaan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
    


<div class="row">
<div class="col-md-8">

 <div class="card">
      <div class="card-header">
        <h3 class="card-title"><a href="/pertanyaan" class="btn btn-block btn-sm btn-primary"><i class="fas fa-angle-double-left"></i> Kembali</a></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

 <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('/adminlte/dist/img/user1-128x128.jpg')}}" alt="user image">
                        <span class="username">
                          <a href="#">{{$datatanya->tanya_nama}}</a>
                          <div class="btn-group float-right">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="/pertanyaan/{{$datatanya->tanya_id}}/edit" class="dropdown-item">Edit</a>
                      <a href="/pertanyaan/{{$datatanya->tanya_id}}/delete" class="dropdown-item">Delete</a>
                     
                    </div>
                  </div>
                          {{-- <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a> --}}

                        </span>
                        <span class="description">Tgl Tanya - {{$datatanya->tanya_tgl}} {{(!empty($datatanya->tanya_update)? '/ Update :'.$datatanya->tanya_update:'')}}</span>
                      </div>
                      <!-- /.user-block -->
                      <b>{{$datatanya->tanya_judul}}</b>
                      <p>{{$datatanya->tanya_isi}}</p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        {{-- <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span> --}}
                      </p>
<hr>

                    <!-- /.post -->

                <h4 class="mb-4">Jawaban : </h4>
                    <!-- Post -->
                     @foreach ($data as $key => $datajawab)
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('/adminlte/dist/img/user7-128x128.jpg')}}" alt="User Image">
                        <span class="username">
                          <a href="#">{{$datajawab->jawab_nama}}</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Sent you a message - {{$datajawab->jawab_tgl}}</span>
                      </div>
                     <!-- /.user-block -->
                      <p>{{$datajawab->jawab_isi}}</p>                     
                    </div>
                     @endforeach
                    <!-- /.post -->
                      

                  
                  </div>

                     </div>
      <!-- /.card-body -->
    </div>


</div>
<div class="col-md-4">
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Kirim Jawaban : </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/jawaban" method="POST">
                 @csrf
                <input type="hidden" name="tanyaid" value="{{$datatanya->tanya_id}}">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama</label>
                      <input type="text" class="form-control" name="jawab_nama" placeholder="Nama" autocomplete="off" required>
                  </div>
                  <div class="form-group">
                    <label>Jawaban</label>
                   <textarea class="form-control" name="jawab_isi" placeholder="Jawaban..."></textarea>                   
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Kirim</button>
                  
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
</div>
</div>



</section>
@endsection