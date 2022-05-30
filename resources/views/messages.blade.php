@extends('layouts/master')

@section('title', 'Mini Twitter')

@section('content')

<h2>Recent message:</h2>
@section('content')
 
<h2>Create new message: </h2>
 
   <form action="/create" method="post">
   <input type="text" name="title" placeholder="Title">
   <input type="text" name="content" placeholder="Content">
      <!-- this blade directive is necessary for all form posts somewhere in between
         the form tags -->
      @csrf
      <button type="submit">Submit</button>
 
</form>
<h2>Recent messages:</h2>
 
<ul>
<!-- loops through the $messages, that this blade template
   gets from MessageController.php. for each element of the loop which
   we call $message we print the properties (title, content
and created_at in an <li> element -->
@foreach ($messages as $message) 
   <li>
       <b>
          <!-- this link to the message details is created dynamically
               and will point to /messages/1 for the first message -->
               <a href="/message/{{$message->id}}">{{$message->title}}:</a>
            </b><br>
       {{$message->content}}<br>
       {{$message->created_at->diffForHumans()}}           
   </li>
@endforeach
</ul>

   @endsection

