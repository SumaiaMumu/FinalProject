<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){

        $data=Customer::all();
        return view('backend.layouts.customer.list',compact('data'));
    }
    public function create(){
        return view('backend.layouts.customer.create');
    }

    public function store(request $request){
       // dd($request->all());
       $filename = " " ;
        if($request->hasFile('image')){
            $image = $request->file('image');
            if($image->isValid()){
                $filename = date('Ymdhms').'.'.$image->getClientOriginalExtension();
                $image->storeAs('customers',$filename);
            }
        }
        Customer::create([
            'name' => $request-> name,
            'email' => $request-> email,
            'image' => $filename,
            'contact' => $request-> contact,
            'address' => $request-> address,
            'dl' => $request-> dl,
            
        ]);
        return redirect()->route('admin.customer.list')->with('success','Data inserted successfully');
    }
    public function show($id){
        $customer = Customer::find($id);
      return view('backend.layouts.customer.view',compact('customer'));

    }

    public function delete($id){
       $customer = Customer::find($id);

       if(file_exists(public_path('uploads/customers/'.$customer->image))) unlink(public_path('uploads/customers/'.$customer->image));

       $customer->delete();

       return redirect()->back()->with('success','Data deleted successfully');
       
    }


}
