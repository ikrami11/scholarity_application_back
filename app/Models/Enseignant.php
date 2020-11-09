<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 02 Jan 2020 21:16:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Enseignant
 * 
 * @property int $id
 * @property string $email
 * @property string $nmrTlfn
 * 
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $ensgrps
 *
 * @package App\Models
 */
class Enseignant extends Eloquent
{
	protected $table = 'enseignant';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'email',
		'nmrTlfn'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'id');
	}

	public function ensgrps()
	{
		return $this->hasMany(\App\Models\Ensgrp::class, 'idens');
	}
}
