<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Asset extends Model
// {
//     protected $fillable = [
//         'asset_no',
//         'asset_description',
//         'serial_no',
//         'cost',
//         'assettype_id',
//         'condition_id',
//         'accumulated_depreciation',
//         'acquisition_date',
//         'acquisition_type',
//         'gfs_code',
//         'gfs_description',
//         'remarks',
//     ];
// }


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory; // Add this line if you intend to use factory methods

    protected $fillable = [
        'asset_no',
        'asset_description',
        'serial_no',
        'cost',
        'assettype_id',
        'condition_id',
        'accumulated_depreciation',
        'acquisition_date',
        'acquisition_type',
        'gfs_code',
        'gfs_description',
        'remarks',
    ];
}
