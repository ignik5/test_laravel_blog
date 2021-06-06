<?php

namespace App;
use App\Rubric;
use App\Tag;
use Faker\Provider\Lorem;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
/**
 * Class Post
 * @package App
 * @mixin Builder
 *
 */

class Post extends Model
{
protected $fillable = ['title','content', 'rubric_id'];

protected $attributes=[
    'content'=>'lorem IPSUM..',

];


    public function rubric()
    {
      return $this->belongsTo(Rubric::class);

    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
 public function date()
 {
    return Carbon::parse($this->created_at )->diffForHumans();
 }
}
