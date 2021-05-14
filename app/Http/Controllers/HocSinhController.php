<?php

namespace App\Http\Controllers;

use App\HocSinh;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HocSinhController extends Controller
{
    protected function getList()
    {
        $list = DB::table('hocsinh')
                ->orderby('id', 'desc')
                ->where('isDeleted', 0)
                ->get();
        return view('hocsinh/danhsach', compact('list'));
    }

    protected function store()
    {
        return view('hocsinh/store');
    }

    protected function insert(Request $request)
    {
        $name = $request->input('name');
        $birthday = $request->input('birthday');
        $phone = $request->input('phone');
        $class = $request->input('class');
        $person_id = $request->input('person_id');

        $table = new HocSinh;
        $table->name = $name;
        $table->birthday = $birthday;
        $table->phone = $phone;
        $table->class = $class;
        $table->person_id = $person_id;

        $table->save();

        return redirect('/');
    }

    protected function edit($id)
    {
        $item = HocSinh::find($id);
        return view('hocsinh/edit', compact('item'));
    }

    protected function update(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $birthday = $request->input('birthday');
        $phone = $request->input('phone');
        $class = $request->input('class');
        $person_id = $request->input('person_id');
        $avatar = $request->input('avatar');

        $table = HocSinh::find($id);
        $table->name = $name;
        $table->birthday = $birthday;
        $table->phone = $phone;
        $table->class = $class;
        $table->person_id = $person_id;
        $table->avatar = $avatar;

        $table->save();

        return redirect('/');
    }

    protected function remove($id)
    {

        $table = HocSinh::find($id);
        $table->isDeleted = true;

        $table->save();

        return redirect('/');
    }
    protected function login()
    {
        return redirect('/');
    }
}