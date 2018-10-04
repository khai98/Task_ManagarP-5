<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elegant Contact Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>


<h1>ADD FORM</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <h1>{{ $error }}</h1>
            @endforeach
        </ul>
    </div>
@endif
<form class="cf" method="post" action="{{route('create')}}">
    @csrf
    <div class="half left cf">
        <input type="text"  name="name" placeholder="name">
        <input type="text" name="address" placeholder="address">
        <input type="text"  name="phone" placeholder="phone">
        <input type="text"  name="email" placeholder="email">
    </div>
    <div class="half right cf">
        <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
    </div>
    <input type="submit" value="Submit" id="submit">

</form>
</body>
</html>
