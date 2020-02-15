<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function department(){
        return view('department');
    }
    public function departmentStore(Request $request){
        $validatedData = $request->validate([
            'department_name' => 'required|unique:departments|max:25|min:4',
        ]);
        $data = array();
        $data['department_name'] = $request->department_name;
        $department = DB::table('departments')->insert($data);
        return redirect()->back();
    }
    public function alldepartment(){
        $departments = DB::table('departments')->get();
        return view('AllDepartment',compact('departments'));
    }

    public function viewDepartment($id){
        $department = DB::table('departments')->where('id', $id)->first();
         return view('viewDepartment',compact('department'));
    }
    public function deleteDepartment($id){
        $department = DB::table('departments')->where('id', $id)->delete();
        return redirect()->back();
    }
    public function editDepartment($id){
        $department = DB::table('departments')->where('id', $id)->first();
        return view('editDepartment',compact('department'));
    }
    public function updateDepartment(Request $request,$id){
//        $validatedData = $request->validate([
//            'department_name' => 'required|max:25|min:4',
//        ]);
//        $data = array();
//        $data['department_name'] = $request->department_name;
//        $department = DB::table('departments')->update($data);
//        return redirect()->back();





//        $validatedData = $request->validate([
//            'department_name' => 'required|max:25|min:4',
//        ]);
        $department = Department::findorfail($id);
        $department->department_name=$request->department_name;
        $department->save();
//        return Redirect()->route('AllDepartment');

    }
}
