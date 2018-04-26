<?php

namespace App\Http\Controllers\Backend\Auth\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Auth\Page;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::where('post_type', 'page')->get();;
        return view('backend.auth.page.index',compact('pages'));
    }

    public function create()
    {
        return view('backend.auth.page.create');
    }

    public function store(Request $request){
        $formInput = new Page;

        $formInput->title = $request['title'];
        $formInput->name = $request['title'];
        $formInput->clean_url = $request['slug'];
        $formInput->post_type = 'page';
        $formInput->content = $request['page_content'];
        $formInput->image = $request['image'];
        $formInput->status = $request['status'];
        /*echo '<pre>';
        print_r($formInput);
        echo '</pre>';
        die();*/

        $formInput->save();
        return redirect()->route('admin.page.index')->withFlashSuccess(__('alerts.backend.page.created'));
    }

    public function show($id){
        $pageInfo = Page::find($id);
        return view('backend.auth.page.show',compact('pageInfo'));

    }

    public function edit($id){
        $pageInfo = Page::find($id);
        return view('backend.auth.page.edit',compact('pageInfo'))->withFlashSuccess(__('alerts.backend.page.updated'));
    }

    public function update(Request $request, $id){

        //dd($request);
        $article = Page::findorfail($id);

        $article->title = $request['title'];
        $article->name = $request['title'];
        $article->clean_url = $request['slug'];
        //$formInput->post_type = 'article';
        $article->content = $request['page_content'];
        $article->image = $request['image'];
        $article->status = $request['status'];
        //dd($article);

        $article->save();

        return back()->withFlashSuccess(__('alerts.backend.page.updated'));
    }

    public function destroy($id){
        Page::where('id',$id)->delete();
        return redirect()->route('admin.page.index')->withFlashSuccess(__('alerts.backend.page.deleted'));
    }
}
