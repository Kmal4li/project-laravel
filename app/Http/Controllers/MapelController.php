<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $mapel = DB::table('mata_pelajaran')->get();
       return view ('mapel/index',compact('mapel')); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view ('mapel/create'); 
        $mapel = DB::table('mata_pelajaran')-> get();
        return view('mapel/create', compact('mapel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try 
        {
             $query=DB::table('mata_pelajaran')->insert([
                'kd_mapel' => $request ->kd_mapel,  
                'nama_pel' => $request ->nama_pel    
                ]);  
            return  redirect('mapel')-> with ('status', 'mapel berhasil ditambah..'); 
        } 
                catch(\Illuminate\Database\QueryException $ex){  
                return  redirect('mapel')-> with ('status', $ex);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {   
        $mapel = DB::table('mata_pelajaran') -> get();
        return view ('mapel/show', compact('mapel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $mapel)
    {
        $mapel = DB::table('mata_pelajaran')->where('kd_mapel', $mapel)->
            first();
        return view('mapel/edit', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $mapel)
    {
        try
       {
        $affected = DB::table('Tbl_mapel') ->where('kd_mapel', $mapel)
        ->update([
            'kd_mapel' => $request ->kd_mapel,
            'nama_pel' => $request ->nama_pel,
            
            
    
        ]);
       
       return redirect('mapel')-> with ('status', 'mapel berhasil diubah...');
    }
        catch(\Illuminate\Database\QueryException $ex)
        {
            return redirect('mapel')-> with('status', 'mapel gagal ditambah...');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $mapel)
    {
        $jenis = DB::table('mata_pelajaran')->where('kd_mapel', $mapel)->delete();      
        return  redirect('mapel')-> with ('status', 'Data mapel berhasil dihapus..');  //
    }
}
