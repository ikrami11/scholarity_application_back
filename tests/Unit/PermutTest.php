<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


/** Tests Unitaires de La Fonctionnalité "Permuter deux Etudiants" */


class PermutTest extends TestCase
{
    /** to run the tests run ./vendor/bin/phpunit using git bash 
     * il faut aussi que xampp soit démmaré et php artisan serve **/



    public function testPermutWithMiddleware()   //tester si l'administrateur est authentifié
    {
        $data =[
            'matricule1' =>'18/0001',
            'matricule2' =>'18/0002',
        ];
        $response= $this->json('POST','/api/permutEtd',$data);
        $response->assertStatus(401);
        $response->assertJson(['message' => "Unauthenticated."]);
    }

    

    public function testPermutEtd()   //tester si deux etudiants sont permutés avec succées
    {
        $data = [
            'matricule1' =>'18/0001',
            'matricule2' =>'18/0002',
        ];
        $user = factory(\App\User::class)->create();
        $response= $this->actingAs($user,'api')->json('POST','/api/permutEtd',$data);
        $response->assertStatus(200);
        $response->assertJson(['message'=>"Permutation reussite !"]);
 

    }

    
   
}
