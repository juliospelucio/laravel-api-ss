<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a list of employees.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        return Employee::get();
    }

    /**
     * Store a newly created employee in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee($request->all());
        $employee->save();

        return $employee;
    }

    /**
     * Display the specified employee.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Employee::findOrFail($id);
    }

    /**
     * Update the specified employee in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $employee = Employee::findOrFail($request->id);
        $employee->update($request->all());

        return $employee;
    }

    /**
     * Remove the specified employee from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::findOrFail($id)->delete();
    }
}
