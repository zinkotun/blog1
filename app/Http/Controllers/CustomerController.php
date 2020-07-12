<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function add()
    {
        return view('/customer/customeradd');
    }

  function create(Request $request)
  {
      $customer = new Customer([
          'name' => $request->get('name'),
          'email' => $request->get('email'),
          'password' => $request->get('password')
      ]);
      $customer->save();
      return redirect('/home');}
      public function  index(){
          $customers=Customer::all();
          return view('/customer/index',compact('customers'));
    }

          public  function  detail($id){
        $customers=Customer::find($id);
        return view('/customer/customer',compact('customers'));
          }
          public  function  edit($id){
        $customer=Customer::find($id);
        return view('/customer/update',compact('customer'));
          }
          public  function update(Request $request){
        $customer=[
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        ];
        Customer::find($request->get('id'))->update($customer);
        return redirect('/customerlist');
          }
          public function  delete($id){
          Customer::find($id)->delete();
          return redirect('/customerlist');

          }
}
