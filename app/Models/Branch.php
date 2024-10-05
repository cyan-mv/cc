<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $primaryKey = 'branch_id'; // Set the primary key

    protected $fillable = [
        'branch_name',
        'branch_phone',
        'branch_address',
        'branch_city',
        'branch_country',
        'branch_state',
        'company_id',
        'brand_id'
    ];

    // A branch belongs to a brand
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    // A branch belongs to a company
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
