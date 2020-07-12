@extends('layouts.app2')
@section('content2')
    <style>
        .content{
            max-width: 500px;
            margin: auto;
        }
    </style>
    <div class="content">
        <div class="text-center">
            <div class="row">
                <div class="card">
                    <h1>Customer Detail</h1>
                    <div class="card-body">
                       <div class="alert alert-success rounded-circle ">
                        <strong>ID::</strong>ID::{{$customers->id}}<p></p>
                    </div>

                    <div class="alert alert-success rounded-circle ">
                        <strong>Name:</strong>{{$customers->name}}<p></p>
                    </div>

                    <div class="alert alert-success rounded-circle">
                        <strong>  Email::</strong>{{$customers->email}}<p></p>
                    </div>

                        <a href="/customerupdate/{{$customers->id}}"><button class="btn btn-warning">Update</button></a>
                        <button onclick="del({{$customers->id}})" class="btn btn-danger">Delete</button>
                        <script>
                            function del(id){
                                let  con=confirm('Are you sure for delete?');
                                if(con){
                                    location.href="/customerdelete/"+id;
                                }
                            }
                        </script>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
