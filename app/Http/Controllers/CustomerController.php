<?php
namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
class CustomerController extends Controller
{
    public function index() { $customers=Customer::query()->orderBy('full_name')->get(); return view('customers.index',compact('customers')); }
    public function create() { return view('customers.form',['customer'=>new Customer(),'mode'=>'create']); }
    public function store(Request $request) {
        $data=$request->validate(['full_name'=>['required','string','max:255'],'email'=>['required','email','max:255','unique:customers,email'],'phone'=>['nullable','string','max:30']]);
        Customer::create($data); return redirect()->route('customers.index')->with('success','Customer created successfully.');
    }
    public function edit(Customer $customer) { return view('customers.form',['customer'=>$customer,'mode'=>'edit']); }
    public function update(Request $request,Customer $customer) {
        $data=$request->validate(['full_name'=>['required','string','max:255'],'email'=>['required','email','max:255','unique:customers,email,'.$customer->id],'phone'=>['nullable','string','max:30']]);
        $customer->update($data); return redirect()->route('customers.index')->with('success','Customer updated successfully.');
    }
}
