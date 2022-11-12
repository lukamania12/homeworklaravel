<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'A Tale of Two Cities',
            'body' => 'A Tale of Two Cities is an historical novel published in 1859 by Charles Dickens, set in London and Paris before and during the French Revolution.',
            'author' => 'Charles Dickens',
            'active' => '0',
        ]);
        Post::create([
            'title' => 'Harry Potter and the Deathly Hallows',
            'body' => 'Harry Potter and the Deathly Hallows is a fantasy novel written by British author J. K. Rowling and the seventh and final novel of the main Harry Potter series.',
            'author' => 'J. K. Rowling',
            'active' => '1',
        ]);
        Post::create([
            'title' => 'The Little Prince',
            'body' => 'The Little Prince (French: Le Petit Prince, pronounced [lә p(ә)ti pᴚἕS]) is a novella by French aristocrat, writer, and military aviator Antoine de Saint-Exupéry.',
            'author' => 'Antoine de Saint-Exupéry',
            'active' => '0',
        ]);
        Post::create([
            'title' => 'Fifty Shades of Grey',
            'body' => 'Fifty Shades of Grey is a 2011 erotic romance novel by British author E. L. James.',
            'author' => 'E.L. James',
            'active' => '1',
        ]);
        Post::create([
            'title' => 'Twilight',
            'body' => 'Twilight (stylized as twilight) is a 2005 young adult vampire-romance novel[7][8] by author Stephenie Meyer',
            'author' => 'Stephenie Meyer',
            'active' => '1',
        ]);
        Post::create([
            'title' => 'The Hobbit',
            'body' => 'The Hobbit, or There and Back Again is a childrens fantasy novel by English author J. R. R. Tolkien.',
            'author' => 'J. R. R. Tolkien',
            'active' => '0',
        ]);
        Post::create([
            'title' => 'The Hunger Games',
            'body' => 'The Hunger Games is a 2008 dystopian novel by the American writer Suzanne Collins.',
            'author' => 'Suzanne Collins',
            'active' => '1',
        ]);
        Post::create([
            'title' => 'Breaking Dawn',
            'body' => 'Breaking Dawn (stylized as breaking dawn) is the 2008 fourth novel in The Twilight Saga by American author Stephenie Meyer.',
            'author' => 'Stephenie Meyer',
            'active' => '1',
        ]);
        Post::create([
            'title' => 'One Fish Two Fish Red Fish Blue Fish',
            'body' => 'One Fish, Two Fish, Red Fish, Blue Fish is a 1960 childrens book by Dr. Seuss.',
            'author' => 'Dr. Seuss',
            'active' => '0',
        ]);
        Post::create([
            'title' => 'The Four Agreements',
            'body' => 'The Four Agreements: A Practical Guide to Personal Freedom is a self-help book by bestselling author Don Miguel Ruiz.',
            'author' => 'Don Miguel Ruiz ',
            'active' => '0',
        ]);
    }
}
