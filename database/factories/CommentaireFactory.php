<?php

namespace Database\Factories;
use App\Models\Article;



use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commentaire>
 */
class CommentaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'auteur' => fake()->name(),
            'contenu' => fake()->text(),
            'article_id' => Article::all()->random()->id
        ];
    }
}
