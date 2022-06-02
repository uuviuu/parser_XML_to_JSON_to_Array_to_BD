<?php

namespace App\Http\Controllers;

use App\Models\Parser;
use Illuminate\Http\Request;
use App\Http\Requests\ParserRequest;

class ViewController extends BaseController
{
    public function index()
    {
        $arrayIDBD = Parser::select('id')->orderBy('id')->get();
        return view('welcome', compact('arrayIDBD'));
    }
    public function search(Request $request)
    {
        $q = $request->q;
        $id = Parser::where('id', 'LIKE', "%{$q}%")->orderBy('id')->get();
        return view('search', compact('id'));
    }
    public function detail(Parser $id)
    {
        return view('detail', compact('id'));
    }
    public function edit(Parser $id)
    {
        return view('update', compact('id'));
    }
    public function update(ParserRequest $request, Parser $id)
    {
        $data = $request->validated();
        $id = $this->service->update($data, $id);
        return view('detail', compact('id'));
    }
    public function delete(Parser $id)
    {
        $id->delete();
        return redirect()->route('index');
    }
}
