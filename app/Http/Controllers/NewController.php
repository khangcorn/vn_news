<?php

namespace App\Http\Controllers;

use App\Models\Categories;
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
        $news = NewModel::paginate(10);

        $queryImages = DB::table('images')
            ->select('url_img')
            ->join('news', 'news.id', '=', 'images.new_id')
            ->limit(1)
            ->get();


        $images = $queryImages;
        $categories = Categories::all();


        return view('client.index', compact(['news', 'images', 'categories']));
    }

    public function detailNew($id)
    {

        $detailNew = NewModel::find($id)->first();
        $new = $detailNew;
        return view('client.detail-new', ['detailNew' => $detailNew]);
    }


    public function findSpecificNew(Request  $request)
    {
        // $input = request()->all();
        // $news = NewModel::where('title', 'LIKE', '%'.$input['search'].'%')
        //     ->orWhere('content', 'LIKE', '%'.$input['search'].'%')
        //     ->paginate(10);

        // $queryImages = DB::table('images')
        //     ->select('url_img')
        //     ->join('news', 'news.id', '=', 'images.new_id')
        //     ->limit(1)
        //     ->get();

        // $images = $queryImages;
        // $categories = Categories::all();

        // return view('client.index', compact(['news', 'images', 'categories']));

        $insertValue = $request->input('search');
        $new = NewModel::where('title', 'LIKE', '%' . $insertValue . '%')
            ->orWhere('content', 'LIKE', '%' . $insertValue . '%')
            ->paginate(5);
        $images = DB::table('images')
            ->select('url_img')
            ->join('news', 'news.id', '=', 'images.new_id')
            ->limit(1)
            ->get();
          $newSearch=  $new;
        return view('client.new-search', compact(['newSearch', 'images']));
        
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
