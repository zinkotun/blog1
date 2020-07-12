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
                                  <h4 class="card-title">Default form</h4>
                                  <p class="card-description"> Basic form layout </p>
                                  <form class="forms-sample" enctype="multipart/form-data" action="/posts" method="post">
                                      @csrf
                                      @include('post.form')
                                      <button type="submit" class="btn btn-success mr-2" >PostAdd</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
                </div></div>


@endsection
