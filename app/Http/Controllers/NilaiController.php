<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $nilai = DB::table('v_nilai')->get();
       return view ('nilai/index',compact('nilai')); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa = DB::table('tbl_siswa')->get();
        $mapel = DB::table('mata_pelajaran')->get();
        return view('nilai/create', compact('siswa','mapel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try 
        {
             $query=DB::table('tbl_nilai')->insert([
                'nis' => $request ->nis,  
                'kd_mapel' => $request ->kd_mapel, 
                'nilai_harian' => $request ->nilai_harian,  
                'nilai_pts' => $request ->nilai_pts,
                'nilai_akhir' => $request ->nilai_akhir    
                ]);  
            return  redirect('nilai')-> with ('status', 'nilai berhasil ditambah..'); 
        } 
                catch(\Illuminate\Database\QueryException $ex){  
                return  redirect('nilai')-> with ('status', $ex);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {   
        $nilai = DB::table('v_nilai') -> get();
        return view ('nilai/show', compact('nilai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nis)
    {
        $mapel = DB::table('mata_pelajaran')->get();
        $siswa = DB::table('tbl_siswa')->get();
        $nilai = DB::table('v_nilai')->where('nis',$nis)->
        first();
        return view('nilai/edit', compact('nilai','siswa','mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nis)
    {
        try
       {
        $affected = DB::table('tbl_nilai') ->where('nis', $nis)
        ->update([
                'nis' => $request ->nis,  
                'kd_mapel' => $request ->kd_mapel, 
                'nilai_harian' => $request ->nilai_harian,  
                'nilai_pts' => $request ->nilai_pts,
                'nilai_akhir' => $request ->nilai_akhir    
        ]);
       
       return redirect('nilai')-> with ('status', 'nilai berhasil diubah...');
    }
        catch(\Illuminate\Database\QueryException $ex)
        {
            return redirect('nilai')-> with('status', 'nilai gagal ditambah...');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nilai)
    {
        $nilai = DB::table('tbl_nilai')->where('nis', $nilai)->delete();      
        return  redirect('nilai')-> with ('status', 'Data nilai berhasil dihapus..');  //
    }
}
