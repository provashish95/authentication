<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
{{--    <div class="links">--}}
{{--        @php--}}
{{--            $customers = App\Customer::all();--}}
{{--        @endphp--}}
{{--        @foreach($customers as $customer)--}}
{{--            <li>{{$customer->name}}</li>--}}
{{--        @endforeach--}}
{{--    </div>--}}

    <div class="content">

        <div class="links">
            <table class="table table-border">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Category Name</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->customer->name}}</td>
                        <td>{{$post->category->category_name}}</td>
                        <td>{{$post->title}}</td>
                        {{--                        <td>{{$post->description}}</td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <br><br><br>
        <hr>

        <div class="links">
            <a href="{{url('/')}}">Home</a>
            <a href="{{route('customer')}}">Customer Information</a>
            <a href="{{route('number')}}">Number Information</a>
            <a href="{{route('PostByName')}}">Post by name</a>

        </div>
    </div>
</div>
</body>
</html>
