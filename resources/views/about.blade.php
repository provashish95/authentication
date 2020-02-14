@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">About of {{Auth::User()->name}}</div>
                             <table>
                                 <tr>
                                     <th>ID</th>
                                     <th>Name</th>
                                     <th>Email</th>
                                 </tr>
                                 <tr>
                                     <td>{{Auth::User()->id}}</td>
                                     <td>{{Auth::User()->name}}</td>
                                     <td>{{Auth::User()->email}}</td>
                                 </tr>

                             </table>
                </div>
            </div>
        </div>
    </div>
@endsection

