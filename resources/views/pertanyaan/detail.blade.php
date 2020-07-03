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
              <li class="breadcrumb-item active">Pertanyaan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
     <div class="card">
      <div class="card-header">
        <h3 class="card-title"><a href="/pertanyaan" class="btn btn-block btn-sm btn-primary"><i class="fas fa-angle-double-left"></i> Kembali</a></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

<div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('/adminlte/dist/img/user1-128x128.jpg')}}" alt="user image">
                        <span class="username">
                          <a href="#">{{$data->tanya_nama}}</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - {{$data->tanya_tgl}}</span>
                      </div>
                      <!-- /.user-block -->
                      <b>{{$data->tanya_judul}}</b>
                      <p>{{$data->tanya_isi}}</p>

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
<h4 class="mb-4">Kirim Jawaban : </h4>
                      <input class="form-control form-control-sm" type="text" placeholder="Tulis Jawaban">
                      <input class="form-control form-control-sm" type="text" placeholder="Tulis Jawaban">
                    </div>
                    <!-- /.post -->

                <h4 class="mb-4">Jawaban : </h4>
                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('/adminlte/dist/img/user7-128x128.jpg')}}" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                     <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                     
                    </div>
                    <!-- /.post -->
                      <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                     <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                     
                    </div>
                    <!-- /.post -->

                  
                  </div>

             </div>
      <!-- /.card-body -->
    </div>
</section>
@endsection