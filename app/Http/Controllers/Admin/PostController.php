<?php

namespace App\Http\Controllers\Admin;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        $posts = Post::paginate(15);
       // posts = Post::findOrFail(100);
        dd($posts);
    }
    //create
    public function create(){
//indicando qual view sera retornada
return view('posts.create');

    }

    public function store(Request $request){
        dd($request->all());
        //dd = var dump
        //situacao de valor especifico
        dd($request->get('title'));

        dd($request->title);


        //verificando se existe um titulo
        if($request->has('title')){
            dd($request->title);
        }
        //show
        public function show($id){

            $post = Post::findOrFail($id);
            dd($post);
            return view('posts.edit',compact('post'));
        }

        //populando tabela por eloquent
        $data = $request->all();
        $post = new Post();
        $post->title = $data['title'];
        $post->description = $data['description'];
        $post->content = $data['content'];
        $post->slug = $data['slug'];
        $post->is_active = true;
        $post->user_id = 1;
        //testando o processo de salvamento no banco
        dd($post->save());
        //insercao ou atualizacao em massa
        $data['user_id']=1;
    }
}
