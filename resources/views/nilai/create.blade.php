@extends('main') 
@section('title','Data Nilai')
@section('breadcrumbs') 
<main id="main" class="main">  
    <div class="pagetitle"> 
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./nilai">Master Data</a></li>
            <li class="breadcrumb-item active">Nilai</li>
          </ol>
        </nav>
      </div>  
        <section  class="section dashboard">
          <div class="col-12">
            <div class="row">  
                <div class="card top-selling overflow-auto">  
                    <div class="content mt-3">
                        <div class="animated fadeIn">  
                                <div class="card-header"> 
                                    <table width="100%"  class="fa fa-text-height" aria-hidden="true"   border="0" cellpadding="0" cellspacing="0"   class="fa fa-align-center" > 
                                        <tr>
                                         <td><h5 class="card-title">Tambah nilai</span></h5></td>
                                         <td> 
                                           <div align="right"><a href="{{ url('./nilai')}}" class="btn btn-success btn-sm" >
                                             <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a> 
                                           </div> 
                                         </td> 
                                          </tr>
                                        </table>

                                        <div class="col-12">
                                            <div class="card recent-sales overflow-auto">
                                            <div class="card-body">  
                                            <form action="{{ url('nilai')}}" method="post" enctype="multipart/form-data">
                                                  {{ csrf_field() }} 
                                                  <p>
                                                    <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">NIS</label>
                                                        <div class="col-sm-10">
                                                        <select class ="form-control" id="nis" name="nis" >
                                                            @foreach ($siswa as $item)
                                                            <option value="{{ $item->nis }}">{{$item ->nis}}-{{$item ->nama}}</option>
                                                            @endforeach
                                                          </select>          
                                                        </div>
                                                      </div> 

                                                      <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">Kode Mata Pelajaran</label>
                                                        <div class="col-sm-10">
                                                        <select class ="form-control" id="kd_mapel" name="kd_mapel" >
                                                            @foreach ($mapel as $item)
                                                            <option value="{{ $item->kd_mapel }}">{{$item ->kd_mapel}}-{{$item ->nama_pel}}</option>
                                                            @endforeach
                                                          </select>
                                                           </div>
                                                      </div> 

                                                      <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">Nilai Harian</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('nilai_harian') is-invalid @enderror"   value="{{ old('nilai_harian') }}"  name="nilai_harian"  required autofocus>
                                                           </div>
                                                      </div> 

                                                      <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">Nilai PTS</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('nilai_pts') is-invalid @enderror"   value="{{ old('nilai_pts') }}"  name="nilai_pts"  required autofocus>
                                                           </div>
                                                      </div> 

                                                      <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">Nilai Akhir</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('nilai_akhir') is-invalid @enderror"   value="{{ old('nilai_akhir') }}"  name="nilai_akhir"  required autofocus>
                                                           </div>
                                                      </div> 

                                                      
                        

                                                    <button type="submit" class="btn btn-success" style="font-size:16px"><span class="bi bi-save2 green-color"> Save </span></button>
                                                  </form>
                                                 
                                            </div> 
                                  </div>
                           
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
      </section> 
</main> 
@endsection
