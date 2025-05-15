<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class BlogController extends Controller
{
    // public function index()
    // {
    //     $articles = Article::whereNotNull('published_at')
    //                         ->orderBy('published_at', 'desc')
    //                         ->get();

    //     return view('blog.index', compact('articles'));
    // }       

    public function show($slug)
    {
            $article = Article::with('developers')->where('slug', $slug)->first();
    
            if (!$article) {
        $article = (object)[
            'id'=> 1,
            'title' => 'A Revolução da Tecnologia Verde',
            'slug' => $slug,
            'content' => "A tecnologia verde está ganhando cada vez mais espaço...\n\nNeste artigo, discutimos como startups estão revolucionando...",
            'cover' => 'images/energia.jpg',
            'view' => 1234,
            'comments_count' => 15,
            'published_at' => now()->subDays(3),
            'developers' => collect([
                (object)[
                    'name' => 'Lucas Andrade',
                    'photo' => 'images/zanetti.jpg',
                    'bio' => 'Desenvolvedor full-stack apaixonado por tecnologias sustentáveis.'
                    
                    ,
                ],
                (object)[
                    'name' => 'Fernanda Souza',
                    'photo' => 'https://source.unsplash.com/100x100/?woman,developer',
                    'bio' => 'Especialista em UX/UI com foco em impacto ambiental.',
                ]
            ]),
            'category' => collect([
                (object)['name' => 'Tecnologia'],
                (object)['name' => 'Sustentabilidade'],
                (object)['name' => 'Inovação'],
            ]),
        ];

        $article->view = $article->view + 1; 
    } else {
        $sessionKey = 'article_viewed_' . $article->id;

        if (!session()->has($sessionKey)) {
            $article->increment('view');
            session()->put($sessionKey, true);
        }
    }

        return view('blog.show', compact('article'));
    }
    
    public function index()
    {
        $articles = Article::orderBy('published_at', 'desc')->get()->map(function ($article) {
            $article->published_at = Carbon::parse($article->published_at);
            return $article;
        });

        $featuredArticle = Article::latest()->first();

        return view('blog.index', compact('articles', 'featuredArticle'));
    }

public function boot()
{
    Carbon::setLocale('pt_BR');
}

}
