<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  public function index()
  {

    return view('employees.index', [
      'employees' => Employee::latest()->get()
    ]);
  }

  public function create()
  {
    return view('employees.create');
  }

  public function store(Request $request)
  {
    Employee::create([
      'name' => $request->name,
      'email' => $request->email,
      'position' => $request->position
    ]);
    return  redirect('/');
  }



  public function edit($id)
  {
    $employees = Employee::where('id', $id)->first();
    return view('employees.edit', [
      'employees' => $employees
    ]);
  }

  public function update(Request $request, $id)
  {
    Employee::where('id', $id)->update([
      'name' => $request->name,
      'email' => $request->email,
      'position' => $request->position
    ]);

    return redirect('/');
  }

  public function destroy($id)
  {
    $employees = Employee::where("id", $id)->first();
    $employees->delete();

    return redirect('/');
  }

  public function detail($id)
  {
    $employees = Employee::where('id', $id)->first();
    return view('employees.detail', [
      'employees' => $employees
    ]);
  }
}
