<?php

namespace Database\Seeders;

use App\Models\Commentaire;
use App\Models\User;
use App\Models\Article;
use App\Models\Categorie;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  User::factory(10)->create();

        //  User::factory()->create([
        //      'name' => 'Albin',
        //      'email' => 'test@example.com',
        //  ]);

           $this->call(
              ArticleSeeder::class
           );
           Commentaire::factory()->count(20)->create();

          Categorie::factory()->count(10)->create();

             
        

        
    }
}
