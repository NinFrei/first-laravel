<!--extend layout master.blade.php -->
@extends('layouts.master')
 
<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
@section('title', 'Mini Twitter')
 
<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
@section('content')
 
<h2>Message Details:</h2>
<h3>{{$message->title}}</h3>
<p>{{$message->content}}</p>
<p>{{$message->name}}</p>

<form action="/change/{{$message->id}}" method="post">
<input type="text" name="title" value="{{$message->title}}">
<input type="text" name="content" value="{{$message->content}}">
<input type="text" name="name" value="{{$message->name}}">
   @csrf
  <button class="btn btn-primary" type="submit">Change</button>
</form>

 <form action="/message/{{$message->id}}" method="post">
    @csrf
   @method('delete')
<button class="btn btn-primary" type="submit">Delete</button>
</form>
@endsection