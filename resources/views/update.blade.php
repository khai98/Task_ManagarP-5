<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/update.css')}}">
    <title>edit user</title>
</head>
<body>
<div class="container contact-form">
    <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
    </div>
     <form method="POST" action="{{route('update',$task->id)}}">
         @csrf
        <h3>Edit User</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name"  value="{{ $task->name }}"/>
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Your Email" value="{{ $task->email }}"/>
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Your Phone Number" value="{{$task->phone}}"/>
                </div>
                <div class="form-group">
                    <input type="text" name="address" class="form-control" placeholder="Your Phone Number" value="{{$task->address}}"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btnContact" value="Send Message"/>
                </div>
            </div>
        </div>
    </form>
</div>

</body>
</html>