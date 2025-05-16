<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title>Modern Blog Layout</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/swiper/8.4.5/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    :root {
      --primary-color: #4361ee;
      --secondary-color: #3f37c9;
      --accent-color: #f72585;
      --text-color: #2b2d42;
      --light-text: #8d99ae;
      --background: #f8f9fa;
      --card-bg: #ffffff;
      --transition: all 0.3s ease;
      --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      --border-radius: 12px;
    }
    
    * {
      box-sizing: border-box;
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    }
    
    body {
      background-color: var(--background);
      color: var(--text-color);
      line-height: 1.6;
      overflow-x: hidden;
    }
    
    a {
      text-decoration: none;
      color: inherit;
    }

    .aclass{
      color: black
    }

    .nav-link {
      padding: 0.5rem 1rem;
      border-radius: 0.375rem;
      transition: var(--transition);
    }
    
    .nav-link-light {
      color: rgba(255, 255, 255, 0.7);
    }
    
    .nav-link-light:hover {
      color: white;
      background-color: rgba(255, 255, 255, 0.1);
    }
    
    .nav-link-active {
      color: white;
      background-color: rgba(255, 255, 255, 0.2);
    }
    
    .viewport-wrapper {
      min-height: 100vh;
      width: 100%;
    }
    
    .content-scroll {
      position: relative;
    }
    
    .main-content {
      max-width: 1400px;
      margin: 0 auto;
      padding: 2rem 1rem;
    }
    
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 2rem 0;
      margin-bottom: 3rem;
      border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    
    .header .logo {
      font-size: 1.8rem;
      font-weight: 700;
      background: linear-gradient(to right, var(--primary-color), var(--accent-color));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    
    .header .nav-links {
      display: flex;
      gap: 2rem;
    }
    
    .header .nav-links a {
      color: var(--text-color);
      font-weight: 500;
      transition: var(--transition);
    }
    
    .header .nav-links a:hover {
      color: var(--primary-color);
    }
    
    .section-title {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      position: relative;
      display: inline-block;
    }
    
    .section-title::after {
      content: '';
      position: absolute;
      height: 4px;
      width: 40%;
      background: var(--primary-color);
      bottom: -8px;
      left: 0;
      border-radius: 2px;
    }
    
    .carousel {
      margin: 5rem 0;
      position: relative;
    }
    
    .carousel .wrapper {
      position: relative;
    }
    
    .swiper-container {
      width: 100%;
      overflow: visible;
      padding: 1.5rem 0;
    }
    
    .swiper-wrapper {
      align-items: stretch;
    }
    
    .swiper-slide {
      height: auto;
      transition: var(--transition);
    }
    
    .card {
      height: 100%;
      background: var(--card-bg);
      border-radius: var(--border-radius);
      overflow: hidden;
      box-shadow: var(--shadow);
      transition: var(--transition);
      display: flex;
      flex-direction: column;
    }
    
    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }
    
    .media-container {
      height: 240px;
      overflow: hidden;
    }
    
    .media-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s ease;
    }
    
    .card:hover .media-container img {
      transform: scale(1.05);
    }
    
    .card-text {
      padding-left: 0.5rem;
      padding-right: 0.5rem;
      padding-top: 1.0rem;
      padding-bottom: 1.5rem;
      display: flex;
      flex-direction: column;
      flex: 1;
    }
    
    .card-text h2 {
      font-size: 1.25rem;
      margin-bottom: 0.5rem;
      font-weight: 600;
      color: var(--text-color);
    }
    
    .card-text p {
      font-size: 0.9rem;
      color: var(--light-text);
      margin-bottom: 1rem;
    }
    
    .card-meta {
      display: flex;
      align-items: center;
      margin-top: auto;
      font-size: 0.85rem;
      color: var(--light-text);
    }
    
    .card-meta .category {
      display: inline-block;
      background: rgba(67, 97, 238, 0.1);
      color: var(--primary-color);
      padding: 0.25rem 0.75rem;
      border-radius: 100px;
      font-weight: 500;
      font-size: 0.75rem;
      margin-right: 0.75rem;
    }
    
    .card-meta .date {
      display: flex;
      align-items: center;
    }
    
    .card-meta i {
      margin-right: 0.25rem;
      font-size: 0.8rem;
    }
    
    .cta-button {
      display: inline-flex;
      align-items: center;
      background: var(--primary-color);
      color: white;
      padding: 0.75rem 1.25rem;
      border-radius: 50px;
      font-weight: 500;
      font-size: 0.85rem;
      margin-top: 1rem;
      transition: var(--transition);
      align-self: flex-start;
    }
    
    .cta-button:hover {
      background: var(--secondary-color);
      transform: translateY(-2px);
    }
    
    .cta-button i {
      margin-left: 0.5rem;
      transition: var(--transition);
    }
    
    .cta-button:hover i {
      transform: translateX(3px);
    }
    
    .swiper-pagination-bullet {
      width: 10px;
      height: 10px;
      background: rgba(0, 0, 0, 0.2);
      opacity: 1;
      transition: var(--transition);
    }
    
    .swiper-pagination-bullet-active {
      width: 20px;
      border-radius: 5px;
      background: var(--primary-color);
    }
    
    .swiper-navigation-container {
      position: absolute;
      top: -3.5rem;
      right: 0;
      display: flex;
      gap: 0.75rem;
    }
    
    .swiper-prev,
    .swiper-next {
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background: white;
      box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
      cursor: pointer;
      transition: var(--transition);
    }
    
    .swiper-prev:hover,
    .swiper-next:hover {
      background: var(--primary-color);
      color: white;
    }
    
    .swiper-prev.hide,
    .swiper-next.hide {
      opacity: 0.5;
      cursor: not-allowed;
    }
    
    .swiper-pagination-container {
      margin-top: 1.5rem;
    }
    
    .featured-post {
      display: grid;
      grid-template-columns: 1fr;
      gap: 2.5rem;
      margin-bottom: 5rem;
    }
    
    .featured-content {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    
    .featured-label {
      display: inline-block;
      background: rgba(247, 37, 133, 0.1);
      color: var(--accent-color);
      padding: 0.5rem 1rem;
      border-radius: 100px;
      font-weight: 600;
      font-size: 0.75rem;
      margin-bottom: 1rem;
      text-transform: uppercase;
    }
    
    .featured-title {
      font-size: 2.5rem;
      line-height: 1.2;
      margin-bottom: 1rem;
    }
    
    .featured-excerpt {
      color: var(--light-text);
      margin-bottom: 1.5rem;
      font-size: 1.05rem;
      line-height: 1.7;
    }
    
    .featured-image {
      border-radius: var(--border-radius);
      overflow: hidden;
      box-shadow: var(--shadow);
      height: 450px;
    }
    
    .featured-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .footer {
      margin-top: 5rem;
      background: #2b2d42;
      color: white;
      padding: 4rem 0 2rem;
    }
    
    .footer-content {
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 1rem;
      display: grid;
      grid-template-columns: 1fr;
      gap: 3rem;
    }
    
    .footer-logo {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }
    
    .footer-text {
      color: rgba(255, 255, 255, 0.7);
      margin-bottom: 1.5rem;
      max-width: 400px;
    }
    
    .social-links {
      display: flex;
      gap: 1rem;
    }
    
    .social-links a {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: var(--transition);
    }
    
    .social-links a:hover {
      background: var(--primary-color);
      transform: translateY(-3px);
    }
    
    .footer-bottom {
      margin-top: 3rem;
      padding-top: 1.5rem;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      text-align: center;
      color: rgba(255, 255, 255, 0.5);
      font-size: 0.9rem;
    }
    
    @media (min-width: 768px) {
      .featured-post {
        grid-template-columns: 1fr 1fr;
      }
      
      .footer-content {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    
    @media (min-width: 992px) {
      .footer-content {
        grid-template-columns: repeat(4, 1fr);
      }
    }
  </style>
</head>
<body class="font-sans antialiased bg-gray-50">
<div class="min-h-screen">
        <nav class="bg-gray-800" style="color: white;">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="{{ route('home') }}" class="flex items-center">
                                <svg class="h-8 w-8 text-purple-500" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                                </svg>
                                <span class="ml-2 text-xl font-bold text-white">{{ config('app.name', 'Blog MVP') }}</span>
                            </a>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'nav-link-active' : 'nav-link-light' }}">
                                    Home
                                </a>
                                <a href="{{ route('articles.index') }}" class="nav-link {{ request()->routeIs('articles.*') ? 'nav-link-active' : 'nav-link-light' }}">
                                    Artigos
                                </a>
                                <a href="{{ route('blog.index') }}" class="nav-link {{ request()->routeIs('blog.*') ? 'nav-link-active' : 'nav-link-light' }}">
                                    Blog
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            @auth
                                <div class="relative ml-3" x-data="{ open: false }">
                                    <div>
                                        <button @click="open = !open" type="button" class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                            <span class="sr-only">Abrir menu de usuário</span>
                                            <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->name).'&color=7F9CF5&background=EBF4FF' }}" alt="{{ Auth::user()->name }}">
                                        </button>
                                    </div>
                                    <div x-show="open" @click.away="open = false" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                        <a href="{{ route('settings.profile') }}" class="aclass block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Seu Perfil</a>
                                        @if (Auth::user()->admin ?? false)
                                            <a href="{{ route('admin.developers.index') }}" class="aclass block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Desenvolvedor</a>
                                        @endif
                                        <a href="{{ route('dashboard') }}" class="aclass block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Dashboard</a>
                                        
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                                Sair
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @else
                                <div class="flex items-center space-x-3">
                                    <a href="{{ route('login') }}" class="text-sm font-medium text-white hover:text-gray-300">Entrar</a>
                                    <a href="{{ route('register') }}" class="rounded-md bg-purple-600 px-3 py-1.5 text-sm font-medium text-white hover:bg-purple-500">Registrar</a>
                                </div>
                            @endauth
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <button type="button" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false" x-data="{ open: false }" @click="open = !open">
                            <span class="sr-only">Abrir menu principal</span>
                            <svg x-show="!open" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <svg x-show="open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="md:hidden" id="mobile-menu" x-data="{ open: false }" x-show="open">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <a href="{{ route('home') }}" class="block nav-link {{ request()->routeIs('home') ? 'nav-link-active' : 'nav-link-light' }}">Home</a>
                    <a href="{{ route('articles.index') }}" class="block nav-link {{ request()->routeIs('articles.*') ? 'nav-link-active' : 'nav-link-light' }}">Artigos</a>
                    <a href="{{ route('blog.index') }}" class="block nav-link {{ request()->routeIs('blog.*') ? 'nav-link-active' : 'nav-link-light' }}">Blog</a>
                </div>
                <div class="border-t border-gray-700 pb-3 pt-4">
                    @auth
                        <div class="flex items-center px-5">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->name).'&color=7F9CF5&background=EBF4FF' }}" alt="{{ Auth::user()->name }}">
                            </div>
                            <div class="ml-3">
                                <div class="text-base font-medium text-white">{{ Auth::user()->name }}</div>
                                <div class="text-sm font-medium text-gray-400">{{ Auth::user()->email }}</div>
                            </div>
                            <button type="button" class="ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                <span class="sr-only">Ver notificações</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-3 space-y-1 px-2">
                            <a href="{{ route('settings.profile') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Seu Perfil</a>
                            @if (Auth::user()->isAdmin ?? false)
                                <a href="{{ route('admin.dashboard') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Dashboard Admin</a>
                            @endif
                            <a href="{{ route('dashboard') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Dashboard</a>
                            
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">
                                    Sair
                                </button>
                            </form>
                        </div>
                    @else
                        <div class="mt-3 space-y-1 px-2">
                            <a href="{{ route('login') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Entrar</a>
                            <a href="{{ route('register') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Registrar</a>
                        </div>
                    @endauth
                </div>
            </div>
        </nav>
<div class="viewport-wrapper">
    <div class="content-scroll">
        <main class="main-content">
            
            <section class="featured-post">
              @if (isset($featuredArticle))
                <div class="featured-content">
                  <span class="featured-label">Destaque</span>
                  <h1 class="featured-title">
                    {{$featuredArticle->title}}
                  </h1>
                  <p class="featured-excerpt">{{Str::limit($featuredArticle->content,150)}}</p>
                  <a href="#" class="cta-button">
                    Leia o Artigo <i class="fas fa-arrow-right"></i>
                  </a>
                </div>
                <div class="featured-image">
                  <img src="{{asset('storage/'. $featuredArticle->cover)}}" alt="Featured Post">
                </div>
                @else
                 @php
                  $featuredArticle = (object)[
                    'title' => 'Computador Quântico o futuro do mundo',
                    'content' => 'Um computador quântico é um dispositivo computacional que utiliza princípios da mecânica quântica para realizar cálculos, diferentemente dos computadores clássicos que utilizam bits. A principal característica de um computador quântico é o uso de qubits, que podem representar 0, 1 ou ambos',
                    'cover' => 'images/computador_quantico.jpg',
                    'slug' => 'Computador-Quântico'
                  ];
                @endphp
                 <div class="featured-content">
                  <span class="featured-label">Destaque</span>
                  <h1 class="featured-title">
                    {{ $featuredArticle->title }}
                  </h1>
                  <p class="featured-excerpt">{{ Str::limit($featuredArticle->content, 150) }}</p>
                  <a href="{{ route('blog.show', $featuredArticle->slug) }}" class="cta-button">
                    Leia o Artigo <i class="fas fa-arrow-right"></i>
                  </a>
                </div>
                <div class="featured-image">
                  <img src="{{ asset('storage/' . $featuredArticle->cover) }}" alt="Mock Featured Post">
                </div>
                @endif
            </section>
           <div class="carousel" id="carousel_1">
            @if(!$articles->isEmpty())
              <div class="wrapper">
                <h2 class="section-title">Destaque</h2>
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    @foreach ($articles as $article)
                      <div class="swiper-slide">
                        <a href="{{ route('blog.show', $article->slug) }}" class="card">
                          <div class="media-container">
                            @if($article->cover)
                              <img src="{{ asset('storage/' . $article->cover) }}" alt="{{ $article->title }}">
                            @else
                              <img src="/api/placeholder/400/240" alt="Placeholder">
                            @endif
                          </div>
                          <div class="card-text">
                            <h2>{{ $article->title }}</h2>
                            <div class="card-meta">
                              <span class="category">Design</span>
                              <span class="date">
                                <i class="far fa-calendar-alt"></i>
                                {{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('d/m/Y') : 'Data não disponível' }}
                              </span>
                            </div>
                            <a href="{{ route('blog.show', $article->slug) }}" class="cta-button">
                              Ler mais <i class="fas fa-arrow-right"></i>
                            </a>
                          </div>
                        </a>
                      </div>
                    @endforeach
                  </div>
                </div>
                <div class="swiper-pagination-container">
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            @else
              @php
                $articles = [
                  (object)[
                    'slug' => 'computador-quantico',
                    'title' => 'Computador Quântico: o futuro do mundo',
                    'published_at' => now(),
                    'cover' => 'images/computador_quantico.jpg',
                  ],
                  (object)[
                    'slug' => 'inteligencia',
                    'title' => 'Como a Inteligência Artificial está mudando tudo',
                    'published_at' => now(),
                    'cover' => 'images/Inteligencia_land.jpg', // Vai acionar o placeholder
                  ],
                ];
              @endphp
              <div class="wrapper">
                <h2 class="section-title">Destaque</h2>
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    @foreach ($articles as $article)
                      <div class="swiper-slide">
                        <a href="#" class="card">
                          <div class="media-container">
                            @if($article->cover)
                              <img src="{{ asset('storage/' . $article->cover) }}" alt="{{ $article->title }}">
                            @else
                              <img src="/api/placeholder/400/240" alt="Placeholder">
                            @endif
                          </div>
                          <div class="card-text">
                            <h2>{{ $article->title }}</h2>
                            <div class="card-meta">
                              <span class="category">Design</span>
                              <span class="date">
                                <i class="far fa-calendar-alt"></i>
                                {{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('d/m/Y') : 'Data não disponível' }}
                              </span>
                            </div>
                            <a href="{{ route('blog.show', $article->slug) }}" class="cta-button">
                              Ler mais <i class="fas fa-arrow-right"></i>
                            </a>
                          </div>
                        </a>
                      </div>
                    @endforeach
                  </div>
                </div>
                <div class="swiper-pagination-container">
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            @endif
          </div>      
            <div class="carousel" id="carousel_2">
                <div class="wrapper">
                    <h2 class="section-title">Em Alta na Semana</h2>
                    <div class="swiper-navigation-container">
                        <div class="swiper-prev">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="swiper-next">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($articles as $article)
                                <div class="swiper-slide">
                                    <a href="{{ route('blog.show', $article->slug) }}" class="card">
                                        <div class="media-container">
                                            @if($article->cover)
                                                <img src="{{ asset('storage/' . $article->cover) }}" alt="{{ $article->title }}">
                                            @else
                                                <img src="/api/placeholder/400/240" alt="Placeholder">
                                            @endif
                                        </div>
                                        <div class="card-text">
                                            <h2>{{ $article->title }}</h2>
                                            <div class="card-meta">
                                                <span class="category">Trending</span>
                                                <span class="date">
                                                    <i class="far fa-calendar-alt"></i>
                                                    {{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('d/m/Y') : 'Data não disponível' }}
                                                </span>
                                            </div>
                                            <a href="{{ route('blog.show', $article->slug) }}" class="cta-button">
                                                Ler mais <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-pagination-container">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            
            <div class="carousel" id="carousel_3">
                <div class="wrapper">
                    <h2 class="section-title">Mais visto</h2>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($articles as $article)
                                <div class="swiper-slide">
                                    <a href="{{ route('blog.show', $article->slug) }}" class="card">
                                        <div class="media-container">
                                            @if($article->cover)
                                                <img src="{{ asset('storage/' . $article->cover) }}" alt="{{ $article->title }}">
                                            @else
                                                <img src="/api/placeholder/400/240" alt="Placeholder">
                                            @endif
                                        </div>
                                        <div class="card-text">
                                            <h2>{{ $article->title }}</h2>
                                            <div class="card-meta">
                                                <span class="category">Popular</span>
                                                <span class="date">
                                                    <i class="far fa-calendar-alt"></i>
                                                    {{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('d/m/Y') : 'Data não disponível' }}
                                                </span>
                                            </div>
                                            <a href="{{ route('blog.show', $article->slug) }}" class="cta-button">
                                                Ler mais <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-pagination-container">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</div>
@include('layouts.footer')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollSmoother.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/swiper/8.4.5/swiper-bundle.min.js"></script>
<script>

    let smoother = ScrollSmoother.create({
        smooth: 1.5,
        effects: true
    });


    const swiperOptions = {
        slidesPerView: 1,
        spaceBetween: 20,
        grabCursor: true,
        loop: false,
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.swiper-next',
            prevEl: '.swiper-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        }
    };

    const carousel1 = new Swiper('#carousel_1 .swiper-container', swiperOptions);
    const carousel2 = new Swiper('#carousel_2 .swiper-container', swiperOptions);
    const carousel3 = new Swiper('#carousel_3 .swiper-container', swiperOptions);

    const sections = document.querySelectorAll('.carousel, .featured-post');
    
    sections.forEach(section => {
        gsap.fromTo(section, {
            opacity: 0,
            y: 50
        }, {
            opacity: 1,
            y: 0,
            duration: 1,
            scrollTrigger: {
                trigger: section,
                start: 'top 80%',
                toggleActions: 'play none none none'
            }
        });
    });

    const cards = document.querySelectorAll('.card');
    
    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            gsap.to(card, { y: -10, boxShadow: '0 15px 35px rgba(0, 0, 0, 0.15)', duration: 0.3 });
        });
        
        card.addEventListener('mouseleave', () => {
            gsap.to(card, { y: 0, boxShadow: '0 10px 30px rgba(0, 0, 0, 0.1)', duration: 0.3 });
        });
    });
</script>
</body>
</html>
