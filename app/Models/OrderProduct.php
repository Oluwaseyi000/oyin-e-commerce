<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderProduct extends Model
{
    use HasFactory;

    protected $guarded = [ ];
    protected $table = 'order_product';

    const STATUS_PENDING = 1;
    const STATUS_IN_PROGRESS = 2;
    const STATUS_FULFILLED = 3;


    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'order_id', );
    }

    public function getOrderDetailsAttribute(){
        return json_decode($this->meta);
    }

    public function getStatusAttribute(){
       switch ($this->status_id) {
           case $this::STATUS_PENDING:
              return 'Pending';
               break;
           case $this::STATUS_IN_PROGRESS:
              return 'In Progress';
               break;
           case $this::STATUS_FULFILLED:
              return 'Fulfilled';
               break;

           default:
            return 'Pending';
               break;
       }
    }
}
