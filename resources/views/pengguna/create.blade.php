@extends('main') 
@section('title','Data Pengguna')
@section('breadcrumbs') 
<main id="main" class="main">  
    <div class="pagetitle"> 
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./pengguna">Master Data</a></li>
            <li class="breadcrumb-item active">Data Pengguna</li>
          </ol>
        </nav>
      </div>  
        <section  class="section dashboard">
          <div class="col-12">
            <div class="row">  
                <div class="card top-selling overflow-auto">  
                    <div class="content mt-3">
                        <div class="animated fadeIn">
                       
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                     
                                <div class="card-header"> 
                                 <table width="100%"  class="fa fa-text-height" aria-hidden="true"   border="0" cellpadding="0" cellspacing="0"   class="fa fa-align-center" > 
                                 <tr>
                                  <td><h5 class="card-title">Tambah Data  pengguna</span></h5></td>
                                  <td> 
                                    <div align="right"><a href="{{ url('./pengguna')}}" class="btn btn-success btn-sm" >
                                      <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a> 
                                    </div> 
                                  </td> 
                                   </tr>
                                 </table>

                                 <div class="col-12">
                                    <div class="card recent-sales overflow-auto">
                                    <div class="card-body">  
                                        <form action="{{ url('pengguna')}}" method="post" enctype="multipart/form-data">
                                          {{ csrf_field() }} 
                                          <br>
                                            <div class="row mb-3">
                                                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control @error('name') is-invalid @enderror"   value="{{ old('name') }}"  name="name"  required autofocus>
                                                   </div>
                                              </div> 
                
                                              <div class="row mb-3">
                                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" value="{{ old('email') }}"  name="email"   required >
                                                </div>
                                            </div> 
                                            <div class="row mb-3">
                                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" value="{{ old('password') }}" name="password"  value="koperasi321" required >
                                                </div>
                                            </div>  
                                            
                                            
                                        <div class="row mb-3">
                                          <label for="level_akses" class="col-sm-2 col-form-label">Level Akses</label>
                                          <div class="col-sm-10">
                                           <select class="form-control" id="level_akses" name="level_akses">  
                                            <option value='{{ old('level_aks') }}'>{{ old('level_aks') }}</option> 
                                            <option value='1'>1</option> 
                                            <option value='2'>2</option>  
                                            <option value='3'>3</option>  
                                           </select>    
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
                </div>
            </div>
        </div>
      </section> 
</main> 
@endsection