<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Post;
use App\Rubric;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {


      //Post::create(['title'=> 'post 5', 'content' => 'lorem 5']);
//
//        $post->title='post 4';
//        $post->content = 'lorem ';
//        $post->save();
       // $data = Country::all();
//$data= Country::where('code', '<', 'ALB')->select('code','name')->limit(2)->offset(1)->get();
        // $data= Country::limit(5)->get();
      //  $data= City::find(1);
     //   $data= Country::find('ABW');
     //   dd($data);
        //                $post=new Post();
        //                $post->title='статья 2';
        //               // $post->content= 'lorem ipsum 1';
        //                $post->save();
        //
        //                //$data = DB::table('country')->get();
        //                //$data = DB::table('country')->select('code','name')->limit(5)->get();
        //                //$data = DB::table('country')->select('code','name')->first();
        //                //$data = DB::table('country')->select('code','name')->orderBY('code', 'desc')->first() ;
        //              //  $data = DB::table('city')->select('id','name')->find(2);
        //                //$data = DB::table('city')->select('id','name')->where('id','<',5)->get();
        //               // $data = DB::table('city')->select('id','name')->where([['id','>', 1],['id','<', 5]])->get();
        //                //$data = DB::table('city')->where('id','<',5)->value('Name');
        //               //$data=DB::table('country')->limit(10)->pluck('Name','code');
        //                //$data=DB::table('country')->count();
        //                // $data=DB::table('country')->max('population');
        //              //  $data=DB::table('country')->min('population');
        //                //$data=DB::table('country')->sum('population');
        //              //  $data=DB::table('country')->avg('population');
        //                //$data=DB::table('city')->select('countryCode')->distinct()->get();
        //
        //        //         $data=DB::table('city')->select(
        //        //             'city.ID','city.name as city_Name','country.Code','country.Name as country_name'
        //        //         )->limit(10)->join('country', 'city.CountryCode', '=', 'country.Code')->orderBy("city.id")->get();
        //        //        dd($data);
        //
//        $post = new Post();
//        $post->fill(['title'=> 'post 6', 'content' => 'lorem 6']);
//        $post->save();
//         return view('test',['res'=>5, 'name'=>'Jon']);
//        $post = Post::find(4);
//        $post->content='lorem ipsum 4';
//        $post->save();
//
//        Post::where('id','>',"3")
//            ->update(['updated_at'=>NOW()]);

//        $post = Post::find(2);
//        $post->delete();

//
//        Post::destroy(5);
//
//        $post = Post::find(7);
//        dump($post->title,$post->rubric->title);
//        $rubric= Rubric::find(3);
//        dd( $rubric->title, $rubric->post->title);
//        $rubric= Rubric::find(1)->posts()->select('title')->where('id','>','2')->get();
//        dd($rubric);
//        $posts= Post::with('rubric')->where('id','>',1)->get();
//
//        foreach($posts as $post){
//            dump($post->title);
//            if (isset($post->rubric->title)){
//                dump( $post->rubric->title);
//            }
//        }

//      $post=Post::find(2);
//      dump($post->title);
//      foreach($post->tags as $item)
//      {
//          dump($item->title);
//
//      }
//        $tags=Tag::find(3);
//        dump($tags->title);
//        foreach($tags->posts as $item)
//        {
//            dump($item->title);
//
//        }
        $data1 = range(1,20);
        $data2 = [
            'title'=>'TITLE',
            'content'=>'CONTENT',
            'keys'=>'keywords',


        ];
        $posts = Post::orderBy('id','desc')->get();
        $h1= "<h1> Home page</h1>";
        $title="Home page";
        return view('home',compact('title','posts'));
    }
    public function test()

    {
        return __METHOD__;
    }
    public function create()
    {
        $title='create';
        $rubrics=Rubric::pluck('title','id')->all();

        return view('create', compact('title','rubrics'));

    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=> 'required|min:5|max:100',
            'content'=>'required',
            'rubric_id'=>'integer',
        ]);
   /*  $rules = [
            'title'=> 'required|min:5|max:100',
            'content'=>'required',
            'rubric_id'=>'integer',
        ];
        $messages=[
            'title.required'=>'Заполнине поле название',
             'title.min'=>'Минимум 5 символов в названии',
            'title.max'=>'Максимум 100 символов в названии',
            'content.required'=>'Заполнине поле контент',
            'rubric_id.integer'=>'Поле rubric_id числовое',

        ];
        $validator=Validator::make($request->all(), $rules, $messages)->validate();*/
        Post::create($request->all());

return redirect()->route('home');
    }
}

