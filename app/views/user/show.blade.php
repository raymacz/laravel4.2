@extends('layouts.default')
     

 @section('content')
         <?php  //dd($user); ?>
        <p> {{{ $user->email or 'default value'}}} </p>
 @stop
 
   @section('sidebar')
   @parent
   <p><a href="#">Some  Link</a></p>
   <p><a href="#">Some  Link</a></p>
   <p><a href="#">Some  Link</a></p>
   @stop