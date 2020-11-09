<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 02 Jan 2020 21:16:48 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Niveau
 * 
 * @property int $id
 * @property string $nom
 * 
 * @property \Illuminate\Database\Eloquent\Collection $etudiants
 * @property \Illuminate\Database\Eloquent\Collection $groupes
 *
 * @package App\Models
 */
class Niveau extends Eloquent
{
	protected $table = 'niveau';
	public $timestamps = false;

	protected $fillable = [
		'nom'
	];

	public function etudiants()
	{
		return $this->hasMany(\App\Models\Etudiant::class, 'idniv', 'ID');
	}

	public function groupes()
	{
		return $this->hasMany(\App\Models\Groupe::class, 'idniv', 'ID');
	}
}
