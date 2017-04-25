<?php

use App\User;

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport"  content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{
        background-color: #E9EBEE;
    }
    .login{
        width:660px;
        height: 400px;
        padding-left: 150px;
        margin-left: 340px;
        margin-top: 100px;
        background-color: #fff;
    }
</style>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-book"></span> মুক্তশিক্ষা
</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> নিবন্ধন করুন</a></li>
      <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> লগ ইন </a></li> -->
    </ul>
  </div>
</nav>


<div class=login>
    <div class="row">

      
      <div class="col-md-8">
    
      <h3 style="text-align:center;color:#286090">লগ ইন</h3>
          <br> 



<form   method="POST" action="{!! action('Auth\AuthController@doLogin') !!}">
    {!! csrf_field() !!}

   <div class="form-group">
        
        <input name = "email" type="email" class="form-control" id="email" placeholder="ইমেইল">
    </div>
<br>
  
         <div class="form-group">
        <input name = "password" type="password" class="form-control" id="pwd" placeholder="পাসওয়ার্ড">
   </div>



            <div class="form-group">
        <input name = "id" type="hidden" class="form-control" id="" placeholder="পাসওয়ার্ড">
   </div>


    <div>
        <input type="checkbox" name="remember"> মনে রাখুন
    </div> 
<br>
@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
        @endforeach
    </ul>
@endif   

    <div>
        <button type="submit" class="btn btn-success btn-block">লগ ইন</button>
    </div>

</form>


<br>
<p style="display:inline;">একাউন্ট নেই?</p><a href="register" style="padding-left: 5px; display:inline;">একাউন্ট খুলুন বিনামূল্যে </a> 
</div>
</div>
</div>

</body> 
</html>
