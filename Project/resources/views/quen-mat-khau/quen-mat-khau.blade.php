@extends('layout')
@section('title')
    Quên mật khẩu
@endsection
@section('main-content')
<form method="post" action="email.php">
    Email: <input name="email" id="email" type="text" />
   
    Message:
    <textarea name="message" id="message" rows="15" cols="40"></textarea>
   
    <input type="submit" value="Submit" />
</form>
@endsection