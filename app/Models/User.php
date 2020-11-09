<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 02 Jan 2020 21:16:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $email
 * @property string $password
 * @property int $type
 * @property string $name
 * @property string $surname
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $email_verified_at
 * 
 * @property \App\Models\Enseignant $enseignant
 * @property \Illuminate\Database\Eloquent\Collection $etudiants
 * @property \App\Models\Etudiant $etudiant
 *
 * @package App\Models
 */
class User extends Eloquent
{
	protected $casts = [
		'type' => 'int'
	];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'email',
		'password',
		'type',
		'name',
		'surname',
		'remember_token',
		'email_verified_at'
	];

	public function enseignant()
	{
		return $this->hasOne(\App\Models\Enseignant::class, 'id');
	}

	public function etudiants()
	{
		return $this->hasMany(\App\Models\Etudiant::class, 'ID');
	}

	public function etudiant()
	{
		return $this->hasOne(\App\Models\Etudiant::class, 'id');
	}
}
