<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ContentController extends Controller
{
    public function __construct()
    {
        if (!Session::has('user')) {
            return redirect()->route('login');
        }
    }

    public function loadTreatment()
    {
        $page = Pages::where('page.pt_id', 1)->get();
        return response()->json($page);
    }

    public function loadHealth()
    {
        $page = Pages::where('page.pt_id', 2)->get();
        return response()->json($page);
    }

    public function loadCategories(){
        $categories = Category::orderBy('name', 'ASC')->get();
        return response()->json($categories);
    }

    public function loadBlog()
    {
        $blog['category'] = Category::orderBy('name', 'ASC')->get();
        $blog['title'] = Blog::orderBy('blogs.category_id', 'ASC')->get();

        return response()->json($blog);
    }

    public function uploadImages(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('upload'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('upload/'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    public function showContent($id){
        $data = Pages::find($id);
        return view('page.page', compact('data'));
    }

    public function showBlog($id){
        $data = Blog::find($id);
        return view('page.page2', compact('data'));
    }

    public function getTreatment()
    {
        //load all data from the page table
        $page = Pages::where('page.pt_id', 1)->get();
        return view('dashboard.treatment')->with('page', $page);
    }

    public function getHealth()
    {
        //load all data from the page table
        $page = Pages::where('page.pt_id', 2)->get();
        return view('dashboard.health')->with('page', $page);
    }

    public function getBlog()
    {
        //load all data from the page table
        $page = Blog::join('category', 'category.id', '=', 'blogs.category_id')->get(['blogs.id AS idblog', 'blogs.title', 'category.*']);
        return view('dashboard.blog')->with('page', $page);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeTreatment(Request $request)
    {
        //create or update new data on Pages table
        Pages::updateOrCreate(
            ['id' => $request->post('pageId')],
            [
                'title' => $request->post('title'),
                'content' => $request->post('content'),
                'pt_id' => $request->post('pageType')
            ]
        );

        return response()->json(['status'=> 'success', 'msg'=>'Conteúdo salvo com sucesso!']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBlog(Request $request)
    {
        //create or update new data on Pages table
        Blog::updateOrCreate(
            ['id' => $request->post('blogId')],
            [
                'title' => $request->post('title'),
                'description' => $request->post('description'),
                'category_id' => $request->post('category_id')
            ]
        );

        return response()->json(['status'=> 'success', 'msg'=>'Conteúdo salvo com sucesso!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['id'] = $id;
        return view('dashboard.treatment.form', $data);
    }

    public function editHealth($id)
    {
        $data['id'] = $id;
        return view('dashboard.health.form', $data);
    }

    public function editBlog($id)
    {
        $data['id'] = $id;
        return view('dashboard.blog.form', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //load row the table Page
        return response()->json(Pages::find($id));
    }


     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showB($id)
    {
        //load row the table Page
        return response()->json(Blog::find($id));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyBlog($id)
    {
        //remove data
        Blog::find($id)->delete();

        return true;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //remove data
        Pages::find($id)->delete();

        return true;
    }
}
