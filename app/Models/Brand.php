<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'category',
        'logo',
        'company_id'
    ];

    // A brand belongs to a company
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    // A brand registers many branches
//    public function branches()
//    {
//        return $this->hasMany(Branch::class, 'brand_id');
//    }
}
