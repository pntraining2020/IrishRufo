<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\employees;
use App\model\timeUsed;
use DB;
class examController extends Controller
{
    //
    function createEmployee(Request $request){
        $employee = new Employees($request->all());
        $employee->save();
        return redirect('/');
    }

    function retrievedNames(){
        $employees = Employees::all();
        return view('main',compact('employees'));
    }

    function showForm(Request $request){
        $employee = new timeUsed();
        $employee->employeeid = $request->id;
        $employee->save();
        $user = DB::table('timeUsed')->where('employeeId', $request->id)->first();
        return view('clock',compact('infos'));
    }



    function updateClockIn(Request $request){
        $datas = DB::table('employees')->where('employeeId', $request->id);
        $datas->clockInValue = $request->clockIn;
        return view('clock', compact('datas'));
    }

}
