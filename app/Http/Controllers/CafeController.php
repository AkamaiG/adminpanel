<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CafeController extends Controller
{
    public function index()
    {
        $cafelist = $this->getcafelistadm();
        return view('getcafe', ['cafelist' => $cafelist]);
    }

    public function loginIndex()
    {
        return view('login');
    }

    public function getcafelist()
    {
        $cafelist = DB::table('cafelist')->get();
        echo $cafelist;
    }

    public function getcafelistadm()
    {
        $cafelist = DB::table('cafelist')->get();
        return $cafelist;
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        DB::table('cafelist')->insert(
            ['name' => $request->name, 'desc' => $request->desc, 'img' => $request->img, 'cat' => $request->cat, 'long' => $request->long]
        );
        return redirect('/adm');
    }

    public function delete($id)
    {
        DB::table('cafelist')->where('id', $id)->delete();
        return redirect('/adm');
    }
}