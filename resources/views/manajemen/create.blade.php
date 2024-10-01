@extends('main') 
@section('title','Data Akun')
@section('breadcrumbs') 
<main id="main" class="main">  
    <div class="pagetitle"> 
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./manajemen">Master Data</a></li>
            <li class="breadcrumb-item active">Akun</li>
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
                                         <td><h5 class="card-title">Tambah id</span></h5></td>
                                         <td> 
                                           <div align="right"><a href="{{ url('./manajemen')}}" class="btn btn-success btn-sm" >
                                             <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a> 
                                           </div> 
                                         </td> 
                                          </tr>
                                        </table>

                                        <div class="col-12">
                                            <div class="card recent-sales overflow-auto">
                                            <div class="card-body">  
                                            <form action="{{ url('manajemen')}}" method="post" enctype="multipart/form-data">
                                                  {{ csrf_field() }} 
                                                  <p>
                                                    <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">id</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('id') is-invalid @enderror"   value="{{ old('id') }}"  name="id"  required autofocus>
                                                           </div>
                                                      </div> 
                        
                                        

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('name') is-invalid @enderror"   value="{{ old('name') }}"  name="name"  required autofocus>
                                                           </div>
                                                      </div> 

                                                      <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('email') is-invalid @enderror"   value="{{ old('email') }}"  name="email"  required autofocus>
                                                           </div>
                                                      </div> 
                                                      
                                                      <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">Waktu verifikasi email</label>
                                                        <div class="col-sm-10">
                                                          <input type="Date" class="form-control @error('email_verified_at') is-invalid @enderror"   value="{{ old('email_verified_at') }}"  name="email_verified_at"  required autofocus>
                                                           </div>
                                                      </div> 
                        
                                        

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Password</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('password') is-invalid @enderror"   value="{{ old('password') }}"  name="password"  required autofocus>
                                                           </div>
                                                      </div>  

                                                      <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">Token</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('remember_token') is-invalid @enderror"   value="{{ old('remember_token') }}"  name="email"  required autofocus>
                                                           </div>
                                                      </div> 
                        
                                        

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Waktu Pembuatan</label>
                                                        <div class="col-sm-10">
                                                          <input type="Date" class="form-control @error('created_at') is-invalid @enderror"   value="{{ old('created_at') }}"  name="password"  required autofocus>
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
