<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\user;
use App\Models\departments;
use App\Models\position;
use Hash;

class UserController extends Controller
{
    //
    public function loginindex(){
        
        return  view('auth.login');
   }  
   public function userlogin(Request $req){
     $req ->validate([
               'email'=>'required|email',
               'password' => 'required|min:5|regex:/^[^\p{Thai}]+$/u',
          ],[
               'email.required'=>'กรุณาใส่อีเมลของคุณ',
               'email.unique'=>'อีเมลนี้ได้ลงทะเบียนไปเเล้ว',
               'password.required'=>'กรุณาใส่รหัสผ่าน',
               'password.min'=>'รหัสผ่านต้องมีรหัสมากกว่า 5 ตัวอักษร' ,
               'password.regex'=>'รหัสผ่านห้ามมีภาษาไทย' ,
          ]);

          $credentials = $req->only('email', 'password');
      
          if (Auth::attempt($credentials)) {
            
               return redirect()->route('profile');
          } else {
               return redirect()->back()->with('error', 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
          }
          
    }  

    public function registeruser(Request $req){
   

     $req ->validate([

          'firstname'=>'required',
          'lastname'=>'required',
          'email'=>'required|email|unique:users',
          'password' => 'required|min:5|confirmed|regex:/^[^\p{Thai}]+$/u',
          'password_confirmation' => 'required|min:5',
          'phone' => 'required|numeric|digits:10',
          'idcard' => 'required|unique:users|digits:13',
         /* 'file' => 'idcard|unique:users|digits:13' , */

               ],[
          'firstname.required'=>'กรุณาใส่ชื่อของคุณ',
          'lastname.required'=>'กรุณาใส่นามสกุล',
          'email.required'=>'กรุณาใส่อีเมลของคุณ',
          'email.unique'=>'อีเมลนี้ได้ลงทะเบียนไปเเล้ว',
          'password.required'=>'กรุณาใส่รหัสผ่าน',
          'password.confirmed'=>'รหัสผ่านไม่ตรงกัน' ,
          'password.min'=>'รหัสผ่านต้องมีรหัสมากกว่า 5 ตัวอักษร' ,
          'password.regex'=>'รหัสผ่านห้ามมีภาษาไทย' ,
          'password_confirmation.min'=>'รหัสผ่านต้องมีรหัสมากกว่า 5 ตัวอักษร' ,
          'password_confirmation.required'=>'กรุณาเพื่อยืนยันรหัสผ้าน',
          'phone.required'=>'กรุณาเพื่อยืนยันรหัสผ้าน',
          'phone.numeric'=>'กรุณาตัวเลขเท่านั้น',
          'phone.required'=>'กรุณาตัวเลขเเค่ 10 หลัก',
          'idcard.digits'=>'กรุณาตัวเลขเเค่ 13 หลัก',
          'idcard.unique'=>'เลขบัตรนี้เคยลงทะเบียนไปเเล้ว',
          'idcard.required'=>'กรุณาใส่เลขบัตรประชาชนของคูณ',

               ]);  


          $switchValue = $req->input('switch') === '1' ? 1 : 0;
          $avater = $req->file('file');
          $name_gen = hexdec(uniqid());
          $img_ext = strtolower($avater->getClientOriginalExtension());

          $img_name = $name_gen.'.'.$img_ext;
       
          $imglocation = 'img/avater/';
          $fullpath = $imglocation.$img_name; 

       /*  user::insert([

        ]); */

        $avater->move($imglocation,$img_name);

        $user = new User();
        $user->firstname = $req->firstname;
        $user->lastname = $req->lastname;
        $user->email = $req->email;
        $user->password =  Hash::make($req->password);
        $user->role_id = $req->role;
        $user->status_user = $switchValue;
        $user->tel = $req->phone;
        $user->line_token = $req->tokenline;
        $user->department_id = $req->department;
        $user->shortname_id = $req->shortname;
        $user->idcard = $req->idcard;
        $user->avater = $img_name; 
        $res = $user->save();
        
        if($res){
               return back()->with('success','เสร็จสิ้น');
          
        }else{
               return back()->with('error','ไม่เสร็จสิ้น');

        } 
   }

   public function registerpage(){


          $datadepartment = departments::all(); // เปลี่ยน TableName เป็นชื่อ Model ของคุณ
          $dataposition = position::all(); // เปลี่ยน TableName เป็นชื่อ Model ของคุณ
        return view('auth.register',compact('datadepartment','dataposition')); 

   }
   public function profilepage(){

    /*  $data = array();
     if(Session::has('loginuser')){
          $data  = User::where('user_id', '=', Session::get('loginuser'))->first();
     } */
     $data = array();

     if (Auth::check()) {
        $user = Auth::user();
        $data = User::where('user_id', $user->user_id)->first();
        return view('auth.profile',compact('data'));  
    } 
   
    
     
   }
    public function logout(){

        Auth::logout();
        return redirect()->route('home'); // หน้าล็อกอิน
        /*  if(Session::has('loginuser')){
            Session::pull('loginuser');
            return redirect()->route('home');
        } */
    

    }
   

}

