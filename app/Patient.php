<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;

class Patient extends Model
{
    protected $fillable = ['forname', 'surname', 'pesel', 'streetRes', 'buildNumRes', 'apartNumRes', 'cityRes', 'provinceRes', 'postCodeRes', 'streetCor', 'buildNumCor', 'apartNumCor', 'cityCor', 'provinceCor', 'postCodeCor', 'phone', 'email'];

    public function getAddressAttribute()
    {
        return $this->streetRes . ' ' . $this->buildNumRes . '/' . $this->apartNumRes .'  '. $this->provinceRes . ' ' . $this->cityRes . ' ' . $this->postCodeRes;
    }

    public function getCorrAddressAttribute() 
    {
        return $this->streetCor . ' ' . $this->buildNumCor . '/' . $this->apartNumCor .'  '. $this->provinceCor . ' ' . $this->cityCor . ' ' . $this->postCodeCor;
    }
}