<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">

   <title>Document</title>
</head>
<body>

<!--extend layout master.blade.php -->
@extends('layouts/master')
<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
@section('title', 'Mini Twitter')
<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->




@section('content')

<h1>Create new message: </h1>
 <br>
   <form action="/create" method="post">
   <input type="text" name="title" placeholder="Title">
   <input type="text" name="content" placeholder="Content">
   <input type="text" name="name" placeholder="Name">
   <br>
      <!-- this blade directive is necessary for all form posts somewhere in between
         the form tags -->
         <br>
         
      @csrf
      <button type="submit">Submit</button>
      <br>
 
</form>

<h2 class="text-dark"><strong>Recent messages:<strong></h2>


<ul>
<!-- loops through the $messages, that this blade template
   gets from MessageController.php. for each element of the loop which
   we call $message we print the properties (title, content
and created_at in an <li> element -->
@foreach ($messages as $message) 

   <li>
   <div class="container mt-3">
   <p class="text-white">
       <b>
          <!-- this link to the message details is created dynamically
               and will point to /messages/1 for the first message -->
               <a href="/message/{{$message->id}}" class="text-white">{{$message->title}}:</a>
            </b><br>
       <span class="text-dark grey">{{$message->content}}</span>

       <br>
       {{$message->name}}
       <br>
       <span>Entry: {{$message->created_at->diffForHumans()}}</span> 
       
       <a href="/message/{{$message->id}}" class="text-dark grey">Edit</a> 
       <span>{{ $message->updated_at->diffForHumans() }}</span>
        
</p>
</div>       
   </li>
@endforeach
</ul>

   @endsection

   </body>
</html>