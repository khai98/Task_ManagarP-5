<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task Management</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>


<div class="limiter">
    <div class="container-table100">
        <h1 style="text-transform: uppercase">Danh sách khách hàng</h1>
        <div class="wrap-table100">
            <div class="table100 ver6 m-b-110">
                <table data-vertable="ver6">
                    <thead>
                    <tr class="row100 head">
                        <th class="column100 column1" data-column="column1">STT</th>
                        <th class="column100 column2" data-column="column2">Name</th>
                        <th class="column100 column3" data-column="column3">Phone</th>
                        <th class="column100 column4" data-column="column4">Email</th>
                        <th class="column100 column5" data-column="column5">Address</th>
                        <th class="column100 column6" data-column="column6">Thao Tac</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($users as $user)
                    <tr class="row100">
                        <td class="column100 column1" data-column="column1" >{{$user->id}}</td>
                        <td class="column100 column1" data-column="column2" >{{$user->name}}</td>
                        <td class="column100 column1" data-column="column3">{{$user->phone}}</td>
                        <td class="column100 column1" data-column="column4">{{$user->email}}</td>
                        <td class="column100 column1" data-column="column5">{{$user->address}}</td>
                        <td><a href="{{route('create')}}">Add</a> | <a href="{{route('edit',$user->id)}}">Edit</a> | <a href="{{ route('delete', $user->id ) }}">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>