<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Author;
use App\Models\Rubric;

class BlogController extends Controller
{
   /* private $articles;
    public function __construct(){
        $this->articles=[
        
            [
                'id'=> 1,
                'name'=>'articol 1',
                'description'=>'grgneigngitgtgne',
                'created_at'=>'12.05.90',
                'author'=>'Costel',
                'img'=>'/img/blog-list/1.jpg',
            ],
                [
                    'id'=> 2,
                    'name'=>'articol 2',
                    'description'=>'grgneigngitgtgne',
                    'created_at'=>'15.04.90',
                    'author'=>'Cot',
                    'img'=>'/img/blog-list/1.jpg',
                ],

                    [
                        'id'=> 3,
                        'name'=>'articol 3',
                        'description'=>'grgneigngitgtgne',
                        'created_at'=>'12.08.90',
                        'author'=>'Cord',
                        'img'=>'/img/blog-list/1.jpg',
                    ],

                        [
                            'id'=> 4,
                            'name'=>'articol 4',
                            'description'=>'grgneigngitgtgne',
                            'created_at'=>'12.04.90',
                            'author'=>'Costea',
                            'img'=>'/img/blog-list/1.jpg',
                        ],
            

        ];
    }*/
    public function index(){
        $articles=Article::with('rubric','author')->orderBy('created_at','desc')->get();
      // dd(Article::all()->toArray());

        
        return view ('pages.blog-list',compact('articles'));
    }
    public function show(int $id){
        $article=Article::where('id',$id)->first();
        /*$article=null;
        foreach($this->articles as $articleItem){
            if($articleItem['id']===$articleId){
                $article=$articleItem;
            }
        }
        if(!$article){
            abort(404);
        }*/
        return view ('pages.m-article',compact('article'));


    }
}
