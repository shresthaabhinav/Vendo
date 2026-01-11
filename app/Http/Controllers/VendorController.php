<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Vendor;
class VendorController extends Controller
{
    public function signup()
    {
        return view('vendor.signup');
    }

    public function register(Request $request)
    {
        $request->validate([
            "full_name" => "required",
            "phone" => "required|regex:/^[0-9]{10}$/|unique:vendors,phone",
            "email" => "required|email|unique:vendors,email",
            "password" => "required",
            "address" => "required",
        ]);
        Vendor::create([
            "full_name" => $request->full_name,
            "phone" => $request->phone,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "address" => $request->address,
        ]);

        return redirect('vendor/signup')->with('msg', 'Registered Successfully');
    }

    public function login()
    {
        return view('vendor.login');
    }

    public function login_create(Request $request)
    {
        $request->validate([
            "phone" => "required",
            "password" => "required",
        ]);

        $checkVendor=Vendor::where(['phone'=>$request->phone])->first();

        // dd($checkVendor);

        if($checkVendor && Hash::check($request->password,$checkVendor->password)){

            if($checkVendor->status=="verified"){
                session(['vendorLogin'=>true]);
                session(['vendorName'=>$checkVendor->full_name]);
                session(['vendorId'=>$checkVendor->v_id]);
                return redirect('vendor/');
            }else{
                return redirect('vendor/login')->with('msg','You are not verified');
            }
            
        }else{
            return redirect('vendor/login')->with('msg','Invalid Phone/Password');
        }
    }

    public function logout()
    {
        session()->forget('vendorLogin');
        return redirect('vendor/login');
    }

    public function forget()
    {
        return view('vendor.forget');
    }

    public function index()
    {
        return view('vendor.index');
    }

    public function orders()
    {
        return view('vendor.orders');
    }

    public function orderdetail()
    {
        return view('vendor.order-detail');
    }

    public function users()
    {
        return view('vendor.users');
    }

    public function profile()
    {
        $v_id = session('venodroId');
        $vendor = Vendor::find($v_id);
        return view('vendor.profile',compact('vendor'));
    }
}
