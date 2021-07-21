<?php

namespace App\Http\Controllers;

use App\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.attendance');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $attribute = $this->validate(request(), [
            'tanggal' => 'required',
            'jam' => 'required'
        ]);
        try {
            $img = request('image');
            $name = auth()->user()->name;
            if ($img) {
                $folderPath = "potosiswa/";
                $image_parts = explode(";base64,", $img);
                $image_base64 = base64_decode($image_parts[1]);
                $fileName = \Str::slug($name) . time() . rand(100, 999) . "." . uniqid() . '.png';
                $file = $folderPath . $fileName;
                file_put_contents($file, $image_base64);
                $result_fileName = $fileName;
            } else {
                $result_fileName = null;
            }
            $attribute['user_id'] = $name;
            $attribute['foto_siswa'] = $result_fileName;
            auth()->user()->student()->create($attribute);
        } catch (\Exception $e) {
            return back()->with('error', 'Absensi gagal!');
        }
        return back()->with('success', 'Absensi untuk hari ini berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
