<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'imagePath',
        'category'
    ];

    public function getId(){
        return $this->id;
    }
    
    public function getImagePath(){
        return $this->imagePath;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setImagePath($value){
        $this->imagePath = $value;
        return $this->save();
    }

    public function setCategory($value){
        $this->category = $value;
        return $this->save();
    }
    

}
