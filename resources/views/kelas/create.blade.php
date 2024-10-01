@extends('main') 
@section('title','Data kelas')
@section('breadcrumbs') 
<main id="main" class="main">  
    <div class="pagetitle"> 
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./kelas">Master Data</a></li>
            <li class="breadcrumb-item active">Kelas</li>
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
                                         <td><h5 class="card-title">Tambah kelas</span></h5></td>
                                         <td> 
                                           <div align="right"><a href="{{ url('./kelas')}}" class="btn btn-success btn-sm" >
                                             <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a> 
                                           </div> 
                                         </td> 
                                          </tr>
                                        </table>

                                        <div class="col-12">
                                            <div class="card recent-sales overflow-auto">
                                            <div class="card-body">  
                                            <form action="{{ url('kelas')}}" method="post" enctype="multipart/form-data">
                                                  {{ csrf_field() }} 
                                                  <p>
                                                    <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">kelas</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('kelas') is-invalid @enderror"   value="{{ old('kelas') }}"  name="kelas"  required autofocus>
                                                           </div>
                                                      </div> 
                        
                                        

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Nama Walikelas</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('nama_walikelas') is-invalid @enderror"   value="{{ old('nama_walikelas') }}"  name="nama_walikelas"  required autofocus>
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
