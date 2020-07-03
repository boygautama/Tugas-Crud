@extends('backend.themes.master')
@section('konten')
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PERTANYAAN</h1>
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
        <h3 class="card-title"><a href="/pertanyaan/create" class="btn btn-block btn-sm btn-primary"><i class="fas fa-plus-circle"></i> Pertanyaan</a></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

 <table class="table table-striped projects">
              <thead>
                  <tr><th style="width: 1%">#</th>
                      <th style="width: 20%">Judul Pertanyaan</th>
                      <th style="width: 30%">Isi Pertanyaan</th>
                      <th>Oleh</th>
                      <th style="width: 8%" class="text-center">Status</th>
                      <th style="width: 20%"></th>
                  </tr>
              </thead>
  <tbody>
      @foreach ($datas as $key => $data)
           <tr>
                      <td>#{{$key + 1}}                      </td>
                      <td> {{$data->tanya_judul}}                          
                          <br/>
                          <small>Created {{$data->tanya_tgl}}</small>
                      </td>
                      <td>{{$data->tanya_isi}}</td>
                      <td>{{$data->tanya_nama}}</td>
                      <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="/pertanyaan/detail/{{$data->tanya_id}}"><i class="fas fa-folder"></i> View</a>
                          <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"></i> Edit</a>
                          <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i> Delete</a>
                      </td>
                  </tr>
      @endforeach
    

                  

  </tbody>
</table>


     </div>
      <!-- /.card-body -->
    </div>
</section>
@endsection