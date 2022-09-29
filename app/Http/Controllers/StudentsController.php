<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  ini adalah method memasukkan data yang diisi di method create diatas ke dalam database ada 2 cara penulisan seperti dibawah ini adalah cara pertama

        // Student::create([
        //     'nama' => $request->nama,
        //     'nrp' => $request->nrp,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan,
        // ]);

        // kita validasi dulu menggunalan validate laravel
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:6'
        ]);

        Student::create($request->all());
        // diatas adalah cara ke dua
        return redirect('/students')->with('status', 'Data Student berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.detail', ['students' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', ['students' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:6'
        ]);
        Student::where('id', $student->id)->update([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
        ]);
        return redirect('/students')->with('status', 'Data Student berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Student berhasil dihapus');
    }
}
