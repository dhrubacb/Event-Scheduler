<?php

use App\User;

?>

@extends('Layout.header')
@section('header')



  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="/css/main.css">

  <style type="text/css">
    body{
        background-color: #E9EBEE;
    }
    .login{
        width:600px;
        height: 340px;
        padding-left: 150px;
        margin-left: 340px;
        margin-top: 100px;
        background-color: #fff;
    }
</style>

  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="/css/main.css">




<div class=login>
    <div class="row">

      
      <div class="col-md-8">
    
      <h3 style="text-align:center;color:#286090">Log in to your account</h3>
          <br> 



<form   method="POST" action="{!! action('Auth\AuthController@doLogin') !!}">
    {!! csrf_field() !!}

   <div class="form-group">
        
        <input name = "email" type="email" class="form-control" id="email" placeholder="Email">
    </div>
<br>
  
         <div class="form-group">
        <input name = "password" type="password" class="form-control" id="pwd" placeholder="Password">
   </div>



            <div class="form-group">
        <input name = "id" type="hidden" class="form-control" id="" >
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
        <button type="submit" class="btn btn-success btn-block">Log In</button>
    </div>

</form>


<br>
</div>
</div>
</div>


<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

  <script src="/js/moment.js"></script>
  <script src="/js/jquery-3.1.0.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  @section('footer')
   @endsection
     @endsection 