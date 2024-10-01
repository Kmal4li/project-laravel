<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $kelas = DB::table('Tbl_kelas')->get();
       return view ('kelas/index',compact('kelas')); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view ('kelas/create'); 
        $kelas = DB::table('Tbl_kelas')-> get();
        return view('kelas/create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try 
        {
             $query=DB::table('Tbl_kelas')->insert([
                'kelas' => $request ->kelas,  
                'nama_walikelas' => $request ->nama_walikelas    
                ]);  
            return  redirect('kelas')-> with ('status', 'kelas berhasil ditambah..'); 
        } 
                catch(\Illuminate\Database\QueryException $ex){  
                return  redirect('kelas')-> with ('status', $ex);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {   
        $kelas = DB::table('Tbl_kelas') -> get();
        return view ('kelas/show', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $kelas)
    {
        $kelas = DB::table('Tbl_kelas')->where('kelas', $kelas)->
            first();
        return view('kelas/edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kelas)
    {
        try
       {
        $affected = DB::table('Tbl_kelas') ->where('kelas', $kelas)
        ->update([
            'kelas' => $request ->kelas,
            'nama_walikelas' => $request ->nama_walikelas,
            
            
    
        ]);
       
       return redirect('kelas')-> with ('status', 'kelas berhasil diubah...');
    }
        catch(\Illuminate\Database\QueryException $ex)
        {
            return redirect('kelas')-> with('status', 'kelas gagal ditambah...');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $kelas)
    {
        $jenis = DB::table('Tbl_kelas')->where('kelas', $kelas)->delete();      
        return  redirect('kelas')-> with ('status', 'Data kelas berhasil dihapus..');  //
    }
}
