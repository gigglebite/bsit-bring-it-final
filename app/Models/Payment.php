<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'card_name',
        'card_number',
        'card_expiry_month',
        'card_expiry_year',
        'cvc'
    ];


    public function getId(){
        return $this->id;
    }

    public function getCardName(){
        return $this->card_name;
    }

    public function getCardNumber(){
        return $this->card_number;
    }

    public function getExpiryMonth(){
        return $this->card_expiry_month;

    }

    public function getExpiryYear(){
        return $this->card_expiry_year;

    }

    public function getCVC(){
        return $this->cvc;

    }

    public function setCardName($value){
        $this->card_name = $value;
        return $this->save();

    }

    public function setCardNumber($value){
        $this->card_number = $value;
        return $this->save();
    }

    public function setExpiryMonth($value){
        $this->card_expiry_month = $value;
        return $this->save();
    }

    public function setExpiryYear($value){
        $this->card_expiry_year = $value;
        return $this->save();
    }

    public function setCVC($value){
        $this->cvc = $value;
        return $this->save();
    }
}
