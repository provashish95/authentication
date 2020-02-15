
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            <hr>
            <table class="table table-responsive">
                <tr>
                    <th>Department Name: {{$department->department_name}}</th>
{{--                    <th>Student Name</th>--}}
{{--                    <th>Action</th>--}}
                </tr>
                @foreach($students as $student)
{{--                @foreach($studentss as $students)--}}
                    <tr>

                        <td>

                           <ul>
                               <li>{{$student->name}}</li>
                           </ul>
                        </td>
{{--

{{--                        <td>--}}
{{--                            <a href="{{URL::to('view/department/'.$students->id)}}" class="btn btn-sm btn-success">View</a>--}}
{{--                            <a href="{{URL::to('delete/department/'.$students->id)}}" class="btn btn-sm btn-success">Delete</a>--}}
{{--                            <a href="{{URL::to('edit/department/'.$students->id)}}" class="btn btn-sm btn-success">Edit</a>--}}
{{--                            <a href="{{URL::to('view/departmentById/'.$students->id)}}" class="btn btn-sm btn-success">depart by id</a>--}}
{{--                        </td>--}}
                    </tr>
                @endforeach
{{--                @endforeach--}}
            </table>

        </div>
    </div>
</div>


