<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $books = [
            [
                'title' => 'Cursed Bunny',
                'author' => 'Bora Chung',
                'genre' => 'Horror, Fantasy',
                'description' => 'A collection of surreal and disturbing short stories.',
                'ratings' => '4.2/5'
            ],
            [
                'title' => 'The Little Prince',
                'author' => 'Antoine de Saint-Exupéry',
                'genre' => 'Fantasy',
                'description' => 'A philosophical tale about a young prince exploring the universe.',
                'ratings' => '4.5/5'
            ],
            [
                'title' => 'Angels Before Man',
                'author' => 'Rafael Nicolás',
                'genre' => 'Fantasy',
                'description' => 'A retelling of Lucifer’s fall from heaven with a queer perspective.',
                'ratings' => '4.6/5'
            ],
            [
                'title' => 'This is How You Lose the Time War',
                'author' => 'Amal El-Mohtar & Max Gladstone',
                'genre' => 'Sci-Fi, Romance',
                'description' => 'A poetic, time-traveling love story between two rival agents.',
                'ratings' => '4.3/5'
            ],
            [
                'title' => 'Flowers for Algernon',
                'author' => 'Daniel Keyes',
                'genre' => 'Sci-Fi, Drama',
                'description' => 'A moving story about intelligence, identity, and humanity.',
                'ratings' => '4.6/5'
            ],
            [
                'title' => 'The Catcher in the Rye',
                'author' => 'J.D. Salinger',
                'genre' => 'Coming-of-Age',
                'description' => 'A story about teenage alienation and rebellion.',
                'ratings' => '3.8/5'
            ],
        ];

        return view('products.index', compact('books'));
    }
}
