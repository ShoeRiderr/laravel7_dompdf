<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;

class Patient extends Model
{
    protected $fillable = ['forname', 'surname', 'pesel', 'streetRes', 'buildNumRes', 'apartNumRes', 'cityRes', 'provinceRes', 'postCodeRes', 'streetCor', 'buildNumCor', 'apartNumCor', 'cityCor', 'provinceCor', 'postCodeCor', 'phone', 'email'];
}