<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Database\Seeders\News;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Caster\RedisCaster;

use function Laravel\Prompts\select;

class CategoriesController extends Controller
{ 

public function categoryNew($id){
$category_id = $id;

$categoriesNew = DB::table('categories')
->select('categories.id as category_id', 'categories.name as category_name' , 'news.id as news_id', 'news.content as new_content' ,'news.title as news_title' )
->join('news','news.category_id', '=' ,'categories.id')
->where('categories.id' , $category_id)
->limit(10)
->get();
 
$categories = Categories::all();

return view('client.category', compact(['categoriesNew', 'categories']));

}


public function categoryDetailNew($id)
{
    return view('client.detail-new', compact('id'));
}

}
