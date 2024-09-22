<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

error_reporting(0);

class BlogController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
			//$productCate = DB::table('blogs')->get();
			$data['category']=Blog::orderBy('id','desc')->get();
        return view('admin.blog.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
       return view('admin.blog.view'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
		
      $request->validate([
            "title" => 'required',
            "description" => 'required',
            "short_desc" => 'required',
            "meta_desc" => 'required',
            "meta_title" => 'required',
            "meta_keyword" => 'required',
            "tags" => 'required',
            //'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
           ]);

       $url = Str::slug($request->title, '-');

        $sreq = new Blog;
        $sreq->title=$request->title;
        $sreq->url_slug=$url;
		
        $sreq->description=$request->description;
        $sreq->short_desc=$request->short_desc;
        $sreq->published_date=$request->published_date;
        $sreq->meta_desc=$request->meta_desc;
        $sreq->meta_title=$request->meta_title;
        $sreq->meta_keyword=$request->meta_keyword;
        $sreq->tags=$request->tags;
		
		if($request->image){
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/blog'),$imageName);
        }else{
        $imageName='NULL';
        }
	
	    $sreq->image=$imageName;

        $sreq->save();
		if($sreq->save()){
			//echo 'ok';
		\Session::put('success','Data Add Successfully.');
        return redirect('/blogs');
		}else{
			\Session::put('success','Something Went Wrong.');
        return redirect('/blogs');
		}
        
		
      /// \Session::put('success','Data Add Successfully.');
       // return redirect('/blogs');
		
         }
         
 public function edit($id)
    {
     $editData=Blog::find($id);
     return view('admin.blog.edit',['editData'=>$editData]);
    }
	
	public function update(Request $request)
    {
        $request->validate([
            "title" => 'required',
            "description" => 'required',
            "short_desc" => 'required',
            "meta_desc" => 'required',
            "meta_title" => 'required',
            "meta_keyword" => 'required',
			"tags" => 'required',
            //'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
           ]);

		$url = Str::slug($request->title, '-');
        $sreq=Blog::find($request->input('editId'));
		
        $sreq->title=$request->title;
		$sreq->url_slug=$url;
        $sreq->description=$request->description;
        $sreq->short_desc=$request->short_desc;
        $sreq->meta_desc=$request->meta_desc;
        $sreq->published_date=$request->published_date;
        $sreq->meta_title=$request->meta_title;
        $sreq->meta_keyword=$request->meta_keyword;
        $sreq->tags=$request->tags;
		
         if($request->file('image')){
         $request->validate([
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
                         ]); 
       
        $imageName = time().'.'.$request->image->extension();
        $sreq->image=$imageName;
        $request->image->move(public_path('uploads/blog'), $imageName);
        }else{ 
         $sreq->image=$request->input('OldImg');
             }
      $sreq->update();
     \Session::put('success','Data Update Successfully.');
     return redirect('/blogs');  
    }
	
	 public function destroy($id)
    {
      Blog::find($id)->delete();
     \Session::put('warning','Data Remove Successfully.');
     return redirect('/blogs');
    }
 

   
		

    }