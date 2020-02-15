
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

                <hr>
                <table class="table table-responsive">
                    <tr>
                        <th>ID</th>
                        <th>Department Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach($departments as $department)
                        <tr>
                            <td>{{$department->department_name}}</td>

                            <td>

                                <a href="{{URL::to('view/department/'.$department->id)}}" class="btn btn-sm btn-success">View</a>
                                <a href="{{URL::to('delete/department/'.$department->id)}}" class="btn btn-sm btn-success">Delete</a>
                                <a href="{{URL::to('edit/department/'.$department->id)}}" class="btn btn-sm btn-success">Edit</a>
                                <a href="{{URL::to('view/departmentById/'.$department->id)}}" class="btn btn-sm btn-success">Students</a>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>


