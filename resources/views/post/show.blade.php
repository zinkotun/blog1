@extends('layouts.app2')
@section('content2')
    <style>
        .content{
            max-width: 1000px;
            margin: auto;
        }
        strong{
            color: gold;
        }
    </style>
    <div class="content">
    <div class="text-center">
    <div class="row">
   <div class="card">
       <div class="card-body">
           <h1>Post Detail</h1>
       <div class="alert alert-success rounded-circle ">
          <strong> content:</strong>{{$post->content}}
       </div>
           <div class="alert alert-success rounded-circle ">
               <strong>Customer-Name:</strong>{{$post->customer->name}}
           </div>

           <div class="alert alert-success rounded-circle">
             <strong>  Customer-Email:</strong>{{$post->customer->email}}
           </div>

           <div  class="alert alert-success rounded-circle"> <strong>Image: </strong><img src="{{asset('storage/'.$post->image)}}" class="img-curved" width="90" height="75"></div>
           <form action="/posts/{{$post->id}}" id="delete-task" method="post">
               @csrf
               @method('DELETE')
           </form>
          <a href="/posts/{{$post->id}}/edit"><button class="text-warning btn-sm" >Update</button></a>
           <button type="submit" form="delete-task" class="text-danger btn-sm">delete</button>



       </div>
   </div>
    </div>
    </div>
    </div>

@endsection
