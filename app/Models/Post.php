<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = ["id"];


    // mengatasi problem n+1 secara dedault
    protected $with = ["author", "category"];

    public function author(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    // Query Scope
    public function scopeFilter(Builder $query, array $filters){
       
        
        $query->when($filters["search"] ?? false, function($query, $search) {
            $query->where("title", "LIKE", "%".$search."%");
        });

        $query->when($filters["category"] ?? false, function($query, $category){
            $query->whereHas("category", function($query) use($category){
                $query->where("slug",  $category);
            });
        });

        $query->when($filters["author"] ?? false, fn($query, $author) => 
        $query->whereHas("author", fn($query) =>  $query->where("username", "LIKE", "%".$author."%")));
    }

}
