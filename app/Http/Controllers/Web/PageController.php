<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;

use App\Mail\ClientesSatisfechos;

use App\Mail\sendContact;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Image;
use App\Models\Cliente;

class PageController extends Controller
{
    public function blog(){
        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->where('category_id', '!=','4')->where('category_id', '!=','2')->paginate(3);
        $podaposts= Post::orderBy('id','DESC')->where('status','PUBLISHED')->where('category_id', '=','4')->paginate(3);
        $limpiezadeterrenos= Post::orderBy('id','DESC')->where('status','PUBLISHED')->where('category_id', '=','2')->paginate(3);
        $categories = Category::orderBy('id', 'ASC')->paginate();
        $clientes = Cliente::orderBy('id','DESC')->where('status','PUBLISHED')->get();
        return view('web.blog', compact('posts','podaposts','limpiezadeterrenos','categories','clientes'));
    }

    public function publicaciones(){
        $busqueda = "Zona Norte - Gran Buenos Aires";
    	$posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(9);
        $recientesPosts=Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(6);
        $categories = Category::orderBy('id', 'ASC')->paginate();
        $tags = Tag::orderBy('id', 'ASC')->get();
    	return view('web.posts', compact('busqueda','posts','categories','tags','recientesPosts'));

    }

    public function formularioclientes(){
        $clientes = Cliente::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(10);
        return view('clientes.clientesform', compact('clientes'));
    }

    function send(Request $request)
    {
        $this->validate($request, [
            'gender'                      =>      'required',
            'name'                      =>      'required',
            'email'                     =>      'required|email',
            'profession'                 =>      'required',
            'month'                   =>      'required',
            'day'                   =>      'required',
            'body'                   =>      'required'


            //'g-recaptcha-response' => 'required|captcha'
        ]);

        $data=array(
            'gender'                         => $request->gender,
            'name'                         => $request->name,
            'email'                        => $request->email,
            'profession'                    => $request->profession,
            'month'                    => $request->month,
            'day'                    => $request->day,
            'body'                      => $request->body

        );

        $cliente = Cliente::create($request->all());

        Mail::to('jofret_@hotmail.com')->send(new ClientesSatisfechos($data));

        return back()->with('success', "Gracias por su comentario Sr(a) ". $data['name'].", le notificaremos vía email cuando sea publicado");

    }

    function sendContact(Request $request)
    {
        $this->validate($request, [
            'name'                      =>      'required',
            'email'                     =>      'required|email',
            'telephone'                 =>      'required',
            'service'                   =>      'required',
            'message'                   =>      'required',

            'g-recaptcha-response' => 'required|captcha'
        ]);

        $data=array(
            'name'                         => $request->name,
            'email'                        => $request->email,
            'telephone'                    => $request->telephone,
            'service'                      => $request->service,
            'message'                      => $request->message,
        );



        Mail::to('jofret_@hotmail.com')->send(new sendContact($data));

        return back()->with('success', "Gracias por contactarnos Sr(a) ". $data['name'].", en breve nos estaremos poniendo en contacto con usted");

    }







    public function category($slug){

        $busqueda = Category::where('slug', $slug)->pluck('name')->first();
        
        $category = Category::where('slug', $slug)->pluck('id')->first();
        $posts    = Post::where('category_id', $category)
                ->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(9);
        $recientesPosts=Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(6);

        $categories = Category::orderBy('id', 'ASC')->paginate();
        $tags = Tag::orderBy('id', 'ASC')->get();
        $clientes = Cliente::orderBy('id','DESC')->where('status','PUBLISHED')->get();
        return view('web.posts', compact('busqueda','category','categories','tags','posts','recientesPosts','clientes'));

    }

    public function tag($slug){
        $busqueda = Tag::where('slug', $slug)->pluck('name')->first();
        $recientesPosts=Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(6);
        $posts  = Post::whereHas('tags', function($query) use ($slug){
            $query->where('slug', $slug);


        })->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(9);
        $categories = Category::orderBy('id', 'ASC')->paginate();
        $tags = Tag::orderBy('id', 'ASC')->get();
        $clientes = Cliente::orderBy('id','DESC')->where('status','PUBLISHED')->get();

        return view('web.posts', compact('busqueda','posts','categories','tags','recientesPosts','clientes'));

    }

    public function post($slug){
        //$id_meet = Post::where('slug', $slug)->pluck('id')->first();
        //$meets = Meet::where('post_id', $id_meet)->get();
        $categories = Category::orderBy('id', 'ASC')->paginate();
        $tags = Tag::orderBy('id', 'ASC')->get();
    	$post = Post::where('slug', $slug )->first();
        $post_id=Post::where('slug', $slug)->pluck('id')->first();
        $minorImage=Image::where('post_id', $post_id)->pluck('id')->first();
        $images = Image::where('post_id', $post_id)->where('id', '<>',$minorImage)->get();
        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
        $posts_lateral_menu = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(6);
        $recientesPosts=Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(6);

        $clientes = Cliente::orderBy('id','DESC')->where('status','PUBLISHED')->get();

    	return view('web.post', compact('categories','tags','post','images','posts','posts_lateral_menu','recientesPosts','clientes'));
    }

    public function posts(){
        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(9);
        $categories = Category::orderBy('id', 'ASC')->paginate();
        $clientes = Cliente::orderBy('id','DESC')->where('status','PUBLISHED')->get();
        return view('web.posts', compact('posts','categories','clientes'));
    } 

    public function admin(){
        return view('admin.index');
    }

}
