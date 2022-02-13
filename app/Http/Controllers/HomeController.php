<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\models\News;
use App\models\Add_doctor;
use App\Notifications\MyfirstNotification;
use App\models\Appointment;
use Illuminate\Support\Facades\Auth;
use Notification;
class HomeController extends Controller
{
    //
function redirects(){
    if(Auth::id()){
        if(Auth::user()->Usertype =='0')
       {
           $data1=add_doctor::all();
           $data=news::all();
           return view('user.home',compact('data','data1'));
       }
       else {
        $data=add_doctor::all();
        return view('admin.home',compact('data'));
       }
    }
    
    else {
        # code...
        return redirect()->back();
    }
}
function index(){
    $data1=add_doctor::all();
    $data3=add_doctor::all();
    $data2=appointment::all();
    $data=news::all();
    return view('user.home',compact('data','data1','data2','data3'));
}
function doctors(){
    $data1=add_doctor::all();
    return view('user.doctors',compact('data1'));
}
function showappointments(){
    $data=add_doctor::all();
    return view('user.appointment',compact('data'));
}
function appointments(Request $request){
    $post=new Appointment();
    $post->name=$request->name;
    $post->doctor=$request->doctor;
    $post->email=$request->email;
    $post->date=$request->date;
    $post->status="in progress";
    $post->message=$request->message;
    $post->phone=$request->phone;
    if (Auth::user('login')) {
        $id=Auth::id();
        $post->userId= $id;
    }else{
        $post->userId='null';
    }
  $post->save();
  return back()->with('message','your appointment has been submitted successfuly');
   
}
function Adminappointment(){
    $data=Appointment::all();
    if(Auth::id()){
    return view('admin.appointment',compact('data'));
}else
{
    return redirect()->back();
}
}
    
function cancel_appoint($id){
  $data=appointment::find($id);
  $data->delete();
  return redirect()-> back()->with("message","Appoint has been cancelled successfuly");
}
function approve_appoint($id){
    $data=appointment::find($id);
    $data->status="Approved";
    $data->save();
    return redirect()->back();
}
function about(){
    return view('about');
}
function myAppointment(){
    $id=Auth::user()->id;
    $data=appointment::where('userId',$id)->get();
    return view('user.myAppointment',compact('data'));
}
function cancel_appointment_user($id){
$data=appointment::find($id);
$data->delete();
return redirect()-> back()->with('message','appointment has been deleted successful');
}
function emailNote ($id){
    $data=appointment::find($id);
    return view('admin.Email_view',compact('data'));
}
function sendemail (Request $request,$id){
$data=appointment::find($id);
$details=[
    'greeting'=>$request->greeting,
    'body'=>$request->body,
    'actiontext'=>$request->actiontext,
    'actionurl'=>$request->actionurl,
    'endpart' =>$request->endpart
];
Notification::send($data,new MyfirstNotification($details));
return redirect()-> back();
}
function User_Update_appointment($id){
    $data=appointment::find($id);
    return view('user.User_Update_appointment',compact('data'));
}
function edit_myAppointment(Request $request,$id){
    $request->validate([
        'name'=>'required',
        'name.required'=>'please fill doctor name',
        'phone' =>'required|digits_between:10,15|numeric',
        'email'=>'required|email',
        'email.required'=>'please enter your email'

    ]);
    $data=appointment::find($id);
    $data->name=$request->name;
    $data->phone=$request->phone;
    $data->doctor=$request->specialty;
    $data->email=$request->email;
    $data->date=$request->date;
    $data->message=$request->message;
    $data->save();
    return redirect('myAppointment')->with("message_update","successfuly updated appointment");
}
}
