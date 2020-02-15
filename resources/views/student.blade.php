<form action="{{route('StudentStore')}}" method="post">
    @csrf
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            <label>Student Name</label>
            <input type="text" class="form-control" placeholder="student Name" name="name" >

        </div>
    </div>
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            <label>Department</label>
            <select class="form-control" name="department_id">
                @foreach($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            <label>Student Roll</label>
            <input type="text" class="form-control" placeholder=" student" name="roll" >

        </div>
    </div>
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            <label>student email</label>
            <input type="email" class="form-control" placeholder="student email" name="email" >

        </div>
    </div>
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            <label>student phone</label>
            <input type="number" class="form-control" placeholder="student phone" name="phone" >

        </div>
    </div>
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            <label>student address</label>
            <input type="text" class="form-control" placeholder="Student address" name="address" >

        </div>
    </div>
    <br>
    <div id="success"></div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" >Submit</button>
    </div>
</form>
<h2><a href="{{route('AllStudent')}}">All Student</a></h2>
