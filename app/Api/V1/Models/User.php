<?php namespace App\Api\V1\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	protected $fillable = ["name", "last_name", "company_name", "email", "password"];

	protected $dates = ["deleted_at"];

	public static $rules = [
		"name" => "required",
		"last_name" => "required",
		"company_name" => "required",
		"email" => "unique|email|required",
		"password" => "required",
	];

	// Relationships

}
