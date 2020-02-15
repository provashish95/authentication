
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            {{--                <a href="{{route('all.post')}}" class="btn btn-info">All Posts</a>--}}
            <hr>
            <div>

                <table>
                    <tr>
                        <th>name</th>
                        <th>department</th>
                        <th>roll</th>
                        <th>phone</th>
                        <th>email</th>
                        <th>address</th>
                    </tr>
                        <tr>
                            <td>{{$students->name}}</td>
                            <td>{{$students->department->department_name}}</td>
                            <td>{{$students->roll}}</td>
                            <td>{{$students->phone}}</td>
                            <td>{{$students->email}}</td>
                            <td>{{$students->address}}</td>
                            {{--                            <td>{{$student->department_name}}</td>--}}
                            {{--                            <td>{{$student->roll}}</td>--}}
                            {{--                            <td>{{$student->phone}}</td>--}}
                            {{--                            <td>{{$student->email}}</td>--}}
                            {{--                            <td>{{$student->address}}</td>--}}
                        </tr>
                </table>
            </div>

        </div>
    </div>
</div>


