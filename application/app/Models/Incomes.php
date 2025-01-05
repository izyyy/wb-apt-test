<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incomes extends Model
{
    use HasFactory;

    // Ensure timestamps are managed
    public $timestamps = true;

    protected $fillable = [
        "income_id",
        "number",
        "date",
        "last_change_date",
        "supplier_article",
        "tech_size",
        "barcode",
        "quantity",
        "total_price",
        "date_close",
        "warehouse_name",
        "nm_id",
    ];
}
