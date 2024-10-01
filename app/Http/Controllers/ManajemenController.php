<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\manajemen;
use Illuminate\Http\Request;

class ManajemenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = DB::table('users')->get();
        return view('manajemen.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = DB::table('users')->get();
        return view('manajemen/create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try 
        {
             $query=DB::table('users')->insert([
                'id' => $request ->id,  
                'name' => $request ->name ,
                'email' => $request ->email ,
                'email_verified_at' => $request ->email_verified_at,
                'password' => $request ->password ,
                'remember_token' => $request ->remember_token ,
                'created_at' => $request ->created_at,
                'updated_at' => $request ->updated_at
                
                ]);  
            return  redirect('manajemen')-> with ('status', 'manajemen berhasil ditambah..'); 
        } 
                catch(\Illuminate\Database\QueryException $ex){  
                return  redirect('manajemen')-> with ('status', $ex); 
            }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = DB::table('users')->get();
        return view('manajemen.show', compact('manajemen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = DB::table('users')->where('id',$id)->
        first();
        return view('manajemen.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try
        {
            $affected = DB :: table('users') ->where('id', $id)
            ->update([
                'id' => $request ->id,  
                'name' => $request ->name ,
                'email' => $request ->email ,
                'email_verified_at' => $request ->email_verified_at,
                'password' => $request ->password ,
                'remember_token' => $request ->remember_token ,
                'created_at' => $request ->created_at,
                'updated_at' => $request ->updated_at
            ]);
            return  redirect('manajemen')-> with ('status', 'Data manajemen berhasil diupdate..');
        }
        catch(\Illuminate\Database\QueryException $ex){
            
            return  redirect('manajemen')-> with ('status', $ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = DB::table('users')->where('id', $id)->delete();      
        return  redirect('users')-> with ('status', 'Data manajemen berhasil dihapus..');
    }
}