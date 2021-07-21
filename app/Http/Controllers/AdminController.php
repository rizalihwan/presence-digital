<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // $getting = Student::distinct()->pluck('tanggal');
        // $result = Student::whereIn('tanggal', $getting)->groupBy('tanggal')->paginate(5);
        return view('admin.index', [
            'students' => Student::paginate(5)
        ]);
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
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
    public function destroy($id)
    {
        Student::findOrFail($id)->delete();
        return back()->with('success', 'Hapus Berhasil');
    }
}
