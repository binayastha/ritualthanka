<?php

namespace App\Http\Controllers\Backend\Auth\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Models\Auth\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('post_type', 'article')->get();;
        return view('backend.auth.article.index',compact('articles'));
    }

    public function create()
    {
        return view('backend.auth.article.create');
    }

    public function store(Request $request){
        $formInput = new Article;

        $formInput->title = $request['title'];
        $formInput->name = $request['title'];
        $formInput->clean_url = $request['slug'];
        $formInput->post_type = 'article';
        $formInput->content = $request['article_content'];
        $formInput->image = $request['image'];
        $formInput->status = $request['status'];
        /*echo '<pre>';
        print_r($formInput);
        echo '</pre>';
        die();*/

        //Article::create($formInput);

         $formInput->save();
        return redirect()->route('admin.article.index')->withFlashSuccess(__('alerts.backend.article.created'));
    }


    public function show($id){
        $articleInfo = Article::find($id);
        return view('backend.auth.article.show',compact('articleInfo'));

    }

    public function edit($id){
        $articleInfo = Article::find($id);
        return view('backend.auth.article.edit',compact('articleInfo'))->withFlashSuccess(__('alerts.backend.article.updated'));
    }

    public function update(Request $request, $id){

        //dd($request);
        $article = Article::findorfail($id);

        $article->title = $request['title'];
        $article->name = $request['title'];
        $article->clean_url = $request['slug'];
        //$formInput->post_type = 'article';
        $article->content = $request['article_content'];
        $article->image = $request['image'];
        $article->status = $request['status'];
        dd($article);

        $article->save();

        return back()->withFlashSuccess(__('alerts.backend.article.updated'));
    }

    public function destroy($id){
        Article::where('id',$id)->delete();
        return redirect()->route('admin.article.index')->withFlashSuccess(__('alerts.backend.article.deleted'));
    }


}
