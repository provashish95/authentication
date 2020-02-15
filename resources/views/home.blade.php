@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <h3><a href="{{route('about')}}">About User</a></h3>
                <a href="{{route('customer')}}">Customer Information</a>
                <a href="{{route('student')}}">student</a>
                <a href="{{route('department')}}">department</a>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
{{-- {{Auth::User()->email}}--}}
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
