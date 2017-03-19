<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProxyItem;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $list = ProxyItem::all();
        return view('home')->withList($list);
    }

    public function create()
    {
        return view('create');
    }

    public function proxy($id)
    {
        $item = ProxyItem::findOrFail($id);
        $item->count = $item->count + 1;
        $item->save();
        return redirect($item->target_url);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'target_url' => 'required',
        ]);
        $item = new ProxyItem();
        $item->name = $request->get('name');
        $item->target_url = $request->get('target_url');
        if ($item->save()) {
            return redirect('list');
        }
        return redirect()->back()->withInput()->withErrors('保存失败！');
    }
}
