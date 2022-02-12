<?php
//to upload data to database follow this
namespace App\Http\Controllers;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use App\models\Add_doctor;
use Illuminate\Support\Facades\File;
class Add_doctors extends Controller
{
    //
    public function addDoctor(){
        $data=add_doctor::all();
        return view('admin.add_doctor',compact('data'));
    }
public function upload_doctors(Request $request){
$request->validate([
'name'=>'required','name.required'=>'fill the name please',
'phone' => 'required|digits_between:10,15|numeric',
'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
$id=IdGenerator::generate(['table' =>'add_doctors','length'=>6,'prefix' =>date('Y')]);
$post=new Add_doctor();
$post->name=$request->name;
$post->id=$id;
$post->phone=$request->phone;
$post->specialty=$request->specialty;
$post->room=$request->room;
$images=$request->file('image');
$imagename=time().'.'.$images->getClientOriginalExtension();
$request->image->move('doctorImage',$imagename);
$post->image=$imagename;
$post->save();
return back()->with('doctor_uploaded','doctor has been uploaded successfuly');

    }
    function delete_doctor($id){
    $data=add_doctor::find($id);
    $data->delete();
    $image_path = public_path("/doctorImage/$data->image");
    if (file_exists($image_path)) {
        File::delete($image_path);
    }
    return redirect()-> back();
    }
    function update_doctor($id){
        $data=add_doctor::find($id);
        return view('admin.update_doctor',compact('data'));
    }
    function edit_doctor(Request $request,$id){
        $request->validate([
            'name'=>'required','name.required'=>'fill the name please',
            'phone'=>'required|digits_between:10,15|numeric',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $data=add_doctor::find($id);
        $data->name=$request->name;
        $data->phone=$request->phone;
        $data->specialty=$request->specialty;
        $data->room=$request->room;
        $img=$request->file('image');
        if ($img) {
            $imagename=time().'.'.$img->getClientOriginalExtension();
            $request->image->move('doctorImage',$imagename);
            $data->image=$imagename;
        }
        $data->save();
        return redirect()-> back()->with('message','doctor successfuly updated');
       
    }
}
