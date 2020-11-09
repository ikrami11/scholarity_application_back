<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 02 Jan 2020 21:16:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ensgrp
 * 
 * @property int $id
 * @property int $idens
 * @property int $idgrp
 * 
 * @property \App\Models\Groupe $groupe
 * @property \App\Models\Enseignant $enseignant
 *
 * @package App\Models
 */
class Ensgrp extends Eloquent
{
	protected $table = 'ensgrp';
	public $timestamps = false;

	protected $casts = [
		'idens' => 'int',
		'idgrp' => 'int'
	];

	protected $fillable = [
		'idens',
		'idgrp'
	];

	public function groupe()
	{
		return $this->belongsTo(\App\Models\Groupe::class, 'idgrp');
	}

	public function enseignant()
	{
		return $this->belongsTo(\App\Models\Enseignant::class, 'idens');
	}
}
