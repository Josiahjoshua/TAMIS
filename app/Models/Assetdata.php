<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assetdata extends Model
{
    public function setTable($tableName)
    {
        $this->table = $tableName;
        return $this;
    }

    protected $fillable = [
        'AssetNo',
        'AssetDescription',
        'Department',
        'RegisteredDate',
        'Cost',
        'Condition',
        'Quantity',
        'category',
        // Add other columns as needed
    ];

}
