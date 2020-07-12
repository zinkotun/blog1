@extends('layouts.app')
@section('content')
  <form action ='/useradd' method="post">
      @csrf
      <label name="name">Name</label>
      <input type="text" id="name"><p>
          <label name="email">Email</label>
      <input type="email" id="email"><p>
          <label name="password">Password</label>
      <input type="password" id="password"><p>
      <input type="submit" value="Add">
  </form>
@endsection
