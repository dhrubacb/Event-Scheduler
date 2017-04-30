<?php

use App\User;

?>

@extends('Layout.header')
@section('header')



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
  @section('footer')
   @endsection
     @endsection 