<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 02 Jan 2020 21:16:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Groupe
 * 
 * @property int $id
 * @property int $idniv
 * @property int $numero
 * 
 * @property \App\Models\Niveau $niveau
 * @property \Illuminate\Database\Eloquent\Collection $ensgrps
 * @property \Illuminate\Database\Eloquent\Collection $etudiants
 *
 * @package App\Models
 */
class Groupe extends Eloquent
{
	protected $table = 'groupe';
	public $timestamps = false;

	protected $casts = [
		'idniv' => 'int',
		'numero' => 'int'
	];

	protected $fillable = [
		'idniv',
		'numero'
	];

	public function niveau()
	{
		return $this->belongsTo(\App\Models\Niveau::class, 'idniv', 'ID');
	}

	public function ensgrps()
	{
		return $this->hasMany(\App\Models\Ensgrp::class, 'idgrp');
	}

	public function etudiants()
	{
		return $this->hasMany(\App\Models\Etudiant::class, 'idgrp');
	}
}
