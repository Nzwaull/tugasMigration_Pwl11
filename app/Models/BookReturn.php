<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookReturn extends Model
{
    protected $table = 'returns';

    protected $fillable = ['loan_detail_id', 'returned_at'];

    public function loan_detail(): BelongsTo
    {
        return $this->belongsTo(LoanDetail::class);
    }
}
