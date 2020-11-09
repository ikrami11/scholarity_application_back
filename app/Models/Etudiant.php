<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 02 Jan 2020 21:16:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Etudiant
 * 
 * @property int $id
 * @property int $idgrp
 * @property int $idniv
 * @property \Carbon\Carbon $datenaiss
 * @property string $lieunaiss
 * @property string $email
 * @property string $nmrTlfn
 * 
 * @property \App\Models\User $user
 * @property \App\Models\Groupe $groupe
 * @property \App\Models\Niveau $niveau
 *
 * @package App\Models
 */
class Etudiant extends Eloquent
{
	protected $table = 'etudiant';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'idgrp' => 'int',
		'idniv' => 'int'
	];

	protected $dates = [
		'datenaiss'
	];

	protected $fillable = [
		'idgrp',
		'idniv',
		'datenaiss',
		'lieunaiss',
		'email',
		'nmrTlfn'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'id');
	}

	public function groupe()
	{
		return $this->belongsTo(\App\Models\Groupe::class, 'idgrp');
	}

	public function niveau()
	{
		return $this->belongsTo(\App\Models\Niveau::class, 'idniv', 'ID');
	}
}
