<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
	
	protected $table = 'clients';
	
	protected $fillable = [
		'name',
		'email',
		'phone',
		'address',
		'company_logo'
	];
	
	public $timestamps = true;
}
