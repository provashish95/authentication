<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function student(){
        $departments = DB::table('departments')->get();
        return view('student',compact('departments'));
    }
    public function StudentStore(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:25|min:3',
            'roll' => 'required|max:4|min:2',
        ]);
        $data=array();
        $data['name']=$request->name;
        $data['department_id']=$request->department_id;
        $data['roll']=$request->roll;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        DB::table('students')->insert($data);
        return redirect()->back();

    }
    public function allStudent(){
//        $students = DB::table('students')
//            ->join('departments','students.department_id','departments.id')
//            ->select('students.*','departments.department_name')
//            ->get();
        $students =Student::all();
        return view('AllStudent',compact('students'));
    }
     public function viewStudent($id){
//           $students = DB::table('students')
//               ->join('departments','students.department_id','departments.id')
//               ->select('students.*','departments.department_name')
//               ->where('students.id',$id)
//               ->first();
         $students = Student::findorfail($id);
        return view('view_Student',compact('students'));
//         return response()->json($students);
     }
     public function viewDepartmentById($id){
         $department = DB::table('departments')->where('id', $id)->first();

         $students = Student::where('department_id', $id)->get();

         return view('ViewDepartmentById', compact('students','department'));
//         return response()->json($department);
     }

}
