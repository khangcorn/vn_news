<?php

namespace App\Http\Controllers;

use App\Models\NewModel;
use Database\Seeders\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $news = NewModel::all();
        $queryImages = DB::table('images')
            ->select('url_img')
            ->join('news', 'news.id', '=', 'images.new_id')
            ->limit(1)
            ->get();
        $images = $queryImages;




        return view('client.index', compact(['news', 'images']));
    }
    public function detailNew($id)
    {
      $detailNew = NewModel::find($id)->first(); 




        return view('client.detail-new',['detailNew'=> $detailNew]);
        
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NewModel $newModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewModel $newModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewModel $newModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewModel $newModel)
    {
        //
    }
}
