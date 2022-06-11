<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'contact_number',
        'email',
        'address',
        'cart'
    ];


    public function getId(){
        return $this->id;
    }

    public function getCart(){
        return $this->cart;
    }

    public function getName(){
        return $this->name;
    }

    public function getAddress(){
        return $this->address;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getContactNumber(){
        return $this->contact_number;

    }

    public function setName($value){
        $this->name = $value;
        return $this->save();
    }

    public function setAddress($value){
        $this->address = $value;
        return $this->save();
    }

    public function setContactNumber($value){
        $this->contact_number = $value;
        return $this->save();
    }

    public function setEmail($value){
        $this->email = $value;
        return $this->save();
    }


}
