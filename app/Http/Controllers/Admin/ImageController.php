<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\ImageStoreRequest;
use App\Http\Requests\ImageUpdateRequest;

use Illuminate\Support\Facades\Storage;

use App\Models\Post;
use App\Models\Category;
use App\Models\Image;
use App\Models\Tag;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::orderBy('id', 'DESC')
            ->where('user_id', auth()->user()->id)
            ->paginate();

        return view('admin.edit.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mensaje = "Imágenes";

        return view('admin.posts.edit', compact('mensaje'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageStoreRequest $request)
    {
        $image = Image::create($request->all());

        //IMAGE
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $image->fill(['file' => asset($path)])->save();
        }


        return redirect()->route('posts.edit', $image->post_id)
            ->with('info', 'Publicación creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $images = Image::where('post_id', $id)->get();
        $post = Post::find($id);
        $this->authorize('pass', $post);

        return view('admin.posts.images.index', compact('images','post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $images= Image::orderBy('id', 'ASC')->pluck('image_name', 'id');
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name', ' ASC')->get();
        $image = Image::find($id);
        $post = Post::find($id);
        $this->authorize('pass', $post);

        return view('admin.posts.edit', compact('post', 'categories', 'tags','image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImageUpdateRequest $request, $id)
    {
        $image = Image::find($id);
        $this->authorize('pass', $post);
        $image->fill($request->all())->save();

        //IMAGE
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $image->fill(['file' => asset($path)])->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::find($id);
        //$this->authorize('pass', $post);
        $image->delete();

        return back()->with('info', 'Imagen eliminada corretamente');
    }
}
