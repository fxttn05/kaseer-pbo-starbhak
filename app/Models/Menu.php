<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
