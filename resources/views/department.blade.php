
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

                <hr>
                <!-- Error message here for validation --> <!-- Error message here for validation -->

            <!-- Error message here for validation --> <!-- Error message here for validation -->
                <form action="{{route('store.department')}}" method="post">
                    @csrf
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>department Name</label>
                            <input type="text" class="form-control" placeholder="department Name" name="department_name" >

                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" >Submit</button>
                    </div>
                </form>
                <h3><a href="{{route('AllDepartment')}}">All department</a></h3>
            </div>
        </div>
    </div>



