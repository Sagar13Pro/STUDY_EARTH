<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	use HasFactory;
	protected $fillable = [
		'foreign_email',
		'user_id',
		'order_id',
		'txn_id',
		'txn_amount',
		'payment_mode',
		'currency',
		'txn_date',
		'status',
		'resp_code',
		'resp_msg',
		'bank_txn_id',
		'bank_name',
		'checksum'
	];
}
