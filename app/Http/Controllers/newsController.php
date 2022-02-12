<?php

namespace App\Http\Controllers;
use App\models\News;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
class newsController extends Controller
{
    //
    function index(){
        return view('admin.news');
    }
 function add_news(Request $request){
    $request->validate([
'head'=>'required|max:255',
 'details'=>'required',
 'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
 'editor_photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

]);
$id = IdGenerator::generate(['table' => 'news', 'length' => 7, 'prefix' => date('w')]);
    $post=new News();
    $post->head=$request->head;
    $post->id=$id;
    $post->details=$request->details;
    $post->editor=$request->editor;
    $news_image=$request->file('photo');
    $imagename=time().'.'.$news_image->getClientOriginalExtension();
    $request->photo->move('newsImage',$imagename);
    $post->photo=$imagename;
    $Editor_image=$request->file('editor_photo');
    $imagename=time().'.'.$Editor_image->getClientOriginalExtension();
    $request->editor_photo->move('editorImages',$imagename);
    $post->editor_photo=$imagename;
    $post->save();
    return back()->with('News_uploaded','News has been uploaded successfuly');
    
        }
        

 }

