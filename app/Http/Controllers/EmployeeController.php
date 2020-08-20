<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        return view('index', compact('employee'));
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
    public function store(Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            // 'middle_name' => 'required',
            // 'last_name' => 'required',
            'gender' => 'required|string',
            'id_number' => 'required|digits:16||unique:App\Employee,id_number',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'address' => 'required',
            'phone' => 'required|digits_between:10,13',
            'employment_status' => 'required|string',
            'emp_no' => 'required|unique:App\Employee,emp_no',
            'email' => 'required|email|unique:App\Employee,email'
        ]);

        $emp = new Employee;
        $emp->first_name = $request->first_name;
        if (!empty($request->middle_name)) {
            $emp->middle_name = $request->middle_name;
        }
        if (!empty($request->last_name)) {
            $emp->last_name = $request->last_name;
        }
        $emp->gender = $request->gender;
        $emp->id_number = $request->id_number;
        $emp->birth_date = $request->birth_date;
        $emp->birth_place = $request->birth_place;
        $emp->address = $request->address;
        $emp->phone = $request->phone;
        $emp->employment_status = $request->employment_status;
        $emp->emp_no = $request->emp_no;
        $emp->email = $request->email;

        $fullname = $request->first_name;

        if (!empty($request->middle_name)) {
            $fullname .= ' ' . $request->middle_name;
        };

        if (!empty($request->last_name)) {
            $fullname .= ' ' . $request->last_name;
        };

        $emp->full_name = $fullname;

        $emp->save();
        Alert::success('Successfully', 'Add New Employee');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
