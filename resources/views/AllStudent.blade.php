
    <div class="container">
        <div class="row">
            <div class="col-lg-12  mx-auto">
                <a href="{{ route('student') }}" class="btn btn-info">Add Student</a>

                <hr>
                <table class="table table-responsive">
                    <tr>
                        <th>ID</th>
                        <th>Department</th>
                        <th>Name</th>
                        <th>Roll</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student->id  }}</td>
                            <td>{{$student->department->department_name }}</td>
                            <td>{{$student->name }}</td>
                            <td>{{$student->roll }}</td>
                            <td>{{$student->email }}</td>
                            <td>{{$student->phone }}</td>
                            <td>{{$student->address }}</td>
                            <td>
{{--                                <a href="{{ URL::to('edit/post/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>--}}
{{--                                <a href="{{ URL::to('delete/post/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>--}}
                                <a href="{{ URL::to('view/student/'.$student->id) }}" class="btn btn-sm btn-success">View</a>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>

