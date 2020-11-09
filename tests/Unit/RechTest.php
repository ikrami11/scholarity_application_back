<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/** Tests Unitaires de La Fonctionnalité "Rechercher un Etudiant Par son Matricule" */
class RechTest extends TestCase
{
    /** to run the tests run ./vendor/bin/phpunit using git bash 
     * il faut aussi que xampp soit démmaré et php artisan serve **/
    
    public function testRechWithMiddleware()   //tester si l'administrateur est authentifié
    {
        $data =[
            'matricule' =>'18/0001',
        ];
        $response= $this->json('POST','/api/rechmat',$data);
        $response->assertStatus(401);
        $response->assertJson(['message' => "Unauthenticated."]);
    }
}
