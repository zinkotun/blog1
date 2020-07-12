@extends('layouts.app2')
@section('content2')

        <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch grid-margin">
                    <div class="row flex-grow">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="forms-sample" action='/customeradd' method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label name="name">Customer Name</label>
                                            <input type="text" id="name" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label name="email"> Customer Email</label>
                                            <input type="email" id="email" name="email" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label name="password">Password</label>
                                            <input type="password" id="password" name="password" class="form-control">
                                        </div>

                                      <button  class="btn btn-success mr-2" >CustomerAdd</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
