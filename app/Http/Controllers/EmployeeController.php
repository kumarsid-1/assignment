<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Carbon\Carbon;

class EmployeeController extends Controller
{
   public function index()
    {
        $currdate  = date(Carbon::now());
        $employees = Employee::all();
        return view('index', compact('employees', 'currdate'));

    }
}
