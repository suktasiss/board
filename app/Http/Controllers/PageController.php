<?php
namespace App\Http\Controllers;

use App\Http\Requests\CreateThread;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /*
    * string $section
    */
    public function show(string $section)
    {
        return view('page', ['section' => $section]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateThread $request)
    {
        $input = $request->all();
        return view('page', ['section' => $input['section']]));
    }
}
