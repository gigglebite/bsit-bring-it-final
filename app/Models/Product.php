<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'imagePath',
        'title',
        'description',
        'price',
        'category'
    ];

    public function getId(){
        return $this->id;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getImagePath(){
        return $this->imagePath;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setImagePath($value){
        $this->imagePath = $value;
        return $this->save();
    }

    public function setCategory($value){
        $this->category = $value;
        return $this->save();
    }

    public function setTitle($value){
        $this->title = $value;
        return $this->save();
    }

    public function setDescription(){
        $this->description = $value;
        return $this->save();
    }

    public function setPrice(){
        $this->price = $value;
        return $this->save();
    }

    public function isBakery()
    {
        return ($this->type == 'bakery');
    }

    public function isStaples()
    {
        return ($this->type == 'staples');
    }

    public function isDrinks()
    {
        return ($this->type == 'drinks');
    }

    public function isBeer()
    {
        return ($this->type == 'beer');
    }

    public function isBreakfast()
    {
        return ($this->type == 'breakfast');
    }

    public function isSnacks()
    {
        return ($this->type == 'snacks');
    }



}
