<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::create([
            'title' => 'Sejarah Kopi Nusantara',
            'slug' => Str::slug('Sejarah Kopi Nusantara'),
            'content' => 'Artikel ini membahas sejarah dan perkembangan kopi di Indonesia.',
            'is_published' => true,
        ]);
    }
}
