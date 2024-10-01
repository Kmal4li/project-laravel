<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = DB::table('v_siswa')->get();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = DB::table('tbl_kelas')->get();
        return view('siswa/create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try 
        {
             $query=DB::table('tbl_siswa')->insert([
                'nis' => $request ->nis,  
                'nama' => $request ->nama ,
                'kelas' => $request ->kelas ,
                'alamat' => $request ->alamat
                ]);  
            return  redirect('siswa')-> with ('status', 'siswa berhasil ditambah..'); 
        } 
                catch(\Illuminate\Database\QueryException $ex){  
                return  redirect('siswa')-> with ('status', $ex); 
            }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $siswa = DB::table('v_siswa')->get();
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nis)
    {
        $kelas = DB::table('tbl_kelas')->get();
        $siswa = DB::table('v_siswa')->where('nis',$nis)->
        first();
        return view('siswa.edit', compact('kelas','siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nis)
    {
        try
        {
            $affected = DB :: table('tbl_siswa') ->where('nis', $nis)
            ->update([
                'nama' => $request ->nama,
                'kelas' => $request ->kelas,
                'alamat' => $request ->alamat,
            ]);
            return  redirect('siswa')-> with ('status', 'Data siswa berhasil diupdate..');
        }
        catch(\Illuminate\Database\QueryException $ex){
            
            return  redirect('siswa')-> with ('status', $ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nis)
    {
        $siswa = DB::table('tbl_siswa')->where('nis', $nis)->delete();      
        return  redirect('siswa')-> with ('status', 'Data siswa berhasil dihapus..');
    }
}