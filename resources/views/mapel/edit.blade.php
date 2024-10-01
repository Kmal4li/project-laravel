@extends('main') 
@section('title','Data Mata Pelajaran')
@section('breadcrumbs') 
<main id="main" class="main">  
    <div class="pagetitle"> 
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./mapel">Master Data</a></li>
            <li class="breadcrumb-item active">Mata Pelajaran</li>
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
                                         <td><h5 class="card-title">Ubah Data mapel</span></h5></td>
                                         <td> 
                                           <div align="right"><a href="{{ url('./mapel')}}" class="btn btn-success btn-sm" >
                                             <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a> 
                                           </div> 
                                         </td> 
                                          </tr>
                                        </table>

                                        <div class="col-12">
                                            <div class="card recent-sales overflow-auto">
                                            <div class="card-body">  
                                            <form action="{{ url('mata_pelajaran/'.$mapel->kd_mapel)}}" method="post" enctype="multipart/form-data">
                                                
                                                @method('put')  
                                                {{ csrf_field() }} 
                                                  <p>
                                                    <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">Kode Mata Pelajaran</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control"value="{{ old('mapel',$mapel->kd_mapel) }}"  name="mapel">
                                                           </div>
                                                      </div> 
                        
                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Nama Pelajaran</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control"  value="{{ old('nama_pel',$mapel->nama_pel) }}"  name="nama_pel"  required autofocus>
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
