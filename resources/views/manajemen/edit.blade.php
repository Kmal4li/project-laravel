@extends('main') 
@section('title','Data Akun')
@section('breadcrumbs') 
<main id="main" class="main">  
    <div class="pagetitle"> 
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./manajemen">Master Data</a></li>
            <li class="breadcrumb-item active">akun</li>
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
                                         <td><h5 class="card-title">Ubah Data Akun</span></h5></td>
                                         <td> 
                                           <div align="right"><a href="{{ url('./akun')}}" class="btn btn-success btn-sm" >
                                             <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a> 
                                           </div> 
                                         </td> 
                                          </tr>
                                        </table>

                                        <div class="col-12">
                                            <div class="card recent-sales overflow-auto">
                                            <div class="card-body">  
                                            <form action="{{ url('akun/'.$akun->akun)}}" method="post" enctype="multipart/form-data">
                                                
                                                
                                                @method('put')  
                                                {{ csrf_field() }} 
                                                  <p>
                                                    <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">ID</label>
                                                        <div class="col-sm-10">
                                                        <select class ="form-control" id="id" name="id" >
                                                            @foreach ($user as $item)
                                                            <option value="{{ $item->id }}">{{$item ->id}}-{{$item ->name}}</option>
                                                            @endforeach
                                                          </select>
                                                           </div>
                                                      </div> 
                        
                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="{{ old('email',$user->email) }}"  name="email" required autofocus>
                                                        </div>
                                                      </div>  

                                                      <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">Waktu verifikasi email</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control" value="{{ old('email_verified_at',$user->email_verified_at) }}"  name="email_verified_at" required autofocus>
                                                           </div>
                                                      </div> 
                        
                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Password</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control"  value="{{ old('password',$user->password) }}"  name="password"  required autofocus>
                                                           </div>
                                                      </div> 
                                                      
                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Token</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control"  value="{{ old('remember_token',$user->remember_token) }}"  name="remember_token"  required autofocus>
                                                           </div>
                                                      </div> 

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Waktu dibuat</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control"  value="{{ old('created_at',$user->created_at) }}"  name="created_at"  required autofocus>
                                                           </div>
                                                      </div> 

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Waktu diupdate</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control"  value="{{ old('updated_at',$user->updated_at) }}"  name="updated_at"  required autofocus>
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
