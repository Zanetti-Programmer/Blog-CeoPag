<x-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Bem-vindo ao Blog
        </h2>
    </x-slot>

    @php

        if (empty($articleFeatures) || $articleFeatures->isEmpty()) {
            $articleFeatures = collect([
                (object)[
                    'slug' => 'tecnologia-espacial',
                    'title' => 'Tecnologia Espacial: Avanços que Estão Mudando o Mundo',
                    'content' => 'Entenda como as missões espaciais impulsionam a inovação tecnológica na Terra.',
                    'category' => 'Ciência',
                    'created_at' => now()->subDays(3),
                    'published_at' => now()->subDays(1),
                    'cover' => 'images/tecnologia-espacial-capa-3.jpg',
                ],
                (object)[
                    'slug' => 'economia-verde',
                    'title' => 'Economia Verde: O Futuro Sustentável',
                    'content' => 'Saiba como empresas estão adotando práticas sustentáveis para crescer com responsabilidade.',
                    'category' => 'Economia',
                    'created_at' => now()->subDays(5),
                    'published_at' => now()->subDays(2),
                    'cover' => 'images/verde.jpg',
                ],
                (object)[
                    'slug' => 'robotica-na-industria',
                    'title' => 'Robótica na Indústria Moderna',
                    'content' => 'A automação inteligente está revolucionando fábricas e aumentando a produtividade.',
                    'category' => 'Tecnologia',
                    'created_at' => now()->subWeek(),
                    'published_at' => now()->subDays(3),
                    'cover' => 'images/maquina.jpg',
                ],
            ]);
        }

        if (empty($articles) || (is_countable($articles) && count($articles) === 0)) {
            $articles = collect([
                (object)[
                    'image' => 'https://source.unsplash.com/640x360/?artificial-intelligence,technology',
                    'title' => 'Inteligência Artificial no Cotidiano',
                    'content' => 'Como a IA está sendo usada em tarefas simples e transformando nossas rotinas.',
                    'author' => 'João Silva',
                    'created_at' => now()->subDays(2),
                    'reading_time' => '4 min leitura',
                    'url' => '#',
                    'developers' => collect([
                        (object)[
                            'name' => 'João Silva',
                            'photo' => 'images/joao.jpg',
                        ]
                    ]),
                    'published_at' => now()->subDays(2),
                    'slug' => 'inteligencia-artificial-no-cotidiano',
                    'cover' => 'images/ia.jpg'
                ],
                (object)[
                    'image' => 'https://source.unsplash.com/640x360/?clean-energy,solar',
                    'title' => 'O Futuro da Energia Limpa',
                    'content' => 'Fontes renováveis estão dominando o setor energético — saiba o que esperar.',
                    'author' => 'Maria Oliveira',
                    'created_at' => now()->subDays(3),
                    'reading_time' => '5 min leitura',
                    'url' => '#',
                    'developers' => collect([
                        (object)[
                            'name' => 'Maria Oliveira',
                            'photo' => 'images/maria.jpg',
                        ]
                    ]),
                    'published_at' => now()->subDays(3),
                    'slug' => 'futuro-da-energia-limpa',
                    'cover' => 'images/energia.jpg'
                ],
                (object)[
                    'image' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?crop=faces&fit=crop&w=80&h=80',
                    'title' => 'Educação Digital em Alta',
                    'content' => 'Plataformas online mudaram a forma como aprendemos. Veja os impactos.',
                    'author' => 'Carlos Lima',
                    'created_at' => now()->subDay(),
                    'reading_time' => '6 min leitura',
                    'url' => '#',
                    'developers' => collect([
                        (object)[
                            'name' => 'Carlos Lima',
                            'photo' => 'images/carlos.jpg',
                        ]
                    ]),
                    'published_at' => now()->subDay(),
                    'slug' => 'educacao-digital-em-alta',
                    'cover' => 'images/educacao.jpg'
                ],
            ]);
        }
        @endphp

    <div class="relative py-16 bg-gradient-to-br from-purple-900 to-gray-900">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">
                    <span class="block">Descubra Conhecimento</span>
                    <span class="block text-purple-300">Compartilhe Ideias</span>
                </h1>
                <p class="mx-auto mt-3 max-w-md text-base text-gray-300 sm:text-lg md:mt-5 md:max-w-2xl md:text-xl">
                    Um espaço dedicado à troca de conhecimento, experiências e ideias através de conteúdo relevante.
                </p>
                <div class="mx-auto mt-5 max-w-md sm:flex sm:justify-center md:mt-8">
                    <div class="rounded-md shadow">
                        <a href="{{ route('articles.index') }}" class="flex w-full items-center justify-center rounded-md border border-transparent bg-purple-600 px-8 py-3 text-base font-medium text-white hover:bg-purple-700 md:py-4 md:px-10 md:text-lg">
                            Criar Artigos
                        </a>
                    </div>
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                        <a href="{{ route('blog.index') }}" class="flex w-full items-center justify-center rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-purple-600 hover:bg-gray-50 md:py-4 md:px-10 md:text-lg">
                            Acessar Blog
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12 bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-900">Artigos em Destaque</h2>
                <p class="mt-3 text-xl text-gray-500">Conteúdo selecionado especialmente para você</p>
            </div>

            <div class="mt-10 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach($articleFeatures ?? [] as $article)
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <div class="h-48 w-full" style="background-color: #653449;">
                        @if($article->cover)
                        <div class="flex h-full w-full items-center justify-center">
                            <img class="h-48 w-full object-cover" src="{{ asset('storage/'. $article->cover) }}" alt="{{ $article->title }}" style="height: 100%;">
                        </div>
                        @else
                            <div class="flex h-full w-full items-center justify-center">
                                <svg class="h-12 w-12 text-white opacity-75" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                        @endif
                    </div>
                    <div class="p-6 bg-white">
                        <div class="flex items-center">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-purple-600">
                                    {{ $article->category ?? 'Categoria' }}
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="{{ $article->created_at ?? now() }}">
                                        {{ $article->created_at ? $article->created_at->format('d/m/Y') : now()->format('d/m/Y') }}
                                    </time>
                                    <span aria-hidden="true">&middot;</span>
                                    <span>{{ $article->published_at->diffForHumans()}}</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('blog.show', $article->slug) ?? '#' }}" class="block mt-2">
                            <p class="text-xl font-semibold text-gray-900">{{ $article->title ?? 'Título do Artigo' }}</p>
                            <p class="mt-3 text-base text-gray-500">{{ Str::limit($article->content, 100) ?? 'Breve descrição do artigo para despertar o interesse do leitor em continuar a leitura...' }}</p>
                        </a>
                        <div class="mt-6">
                            <a href="{{ route('blog.show', $article->slug) ?? '#' }}" class="text-base font-semibold text-purple-600 hover:text-purple-500">
                                Continuar lendo →
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

                @if(empty($featuredArticles) || count($featuredArticles) === 0)
                @for($i = 0; $i < 0; $i++)
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <div class="h-48 w-full flex items-center justify-center" style="background-color: #653449;">
                        <svg class="h-12 w-12 text-white opacity-75" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <div class="p-6 bg-white">
                        <div class="flex items-center">
                            <div class="ml-3">
                                <p class="text-sm font-medium text-purple-600">
                                    Categoria
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="{{ now() }}">{{ $post->published_at->format('d/m/y') }}</time>
                                    <span aria-hidden="true">&middot;</span>
                                    <span>5 min leitura</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="block mt-2">
                            <p class="text-xl font-semibold text-gray-900">Título do Artigo Exemplo {{ $i + 1 }}</p>
                            <p class="mt-3 text-base text-gray-500">Breve descrição do artigo para despertar o interesse do leitor em continuar a leitura...</p>
                        </a>
                        <div class="mt-6">
                            <a href="#" class="text-base font-semibold text-purple-600 hover:text-purple-500">
                                Continuar lendo →
                            </a>
                        </div>
                    </div>
                </div>
                @endfor
                @endif
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('articles.index') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-purple-600 hover:bg-purple-700">
                    Crie um Artigo
                </a>
            </div>
        </div>
    </div>

    <div class="py-12" style="background-color: #f8f9fa;">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-900">Artigos Recente</h2>
                <p class="mt-3 text-xl text-gray-500">Fique por dentro das últimas novidades</p>
            </div>

            <div class="mt-10 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @if(empty($recentPosts) || count($recentPosts) === 0)
                @foreach ($articles as $post )
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <div class="h-48 w-full flex items-center justify-center" style="background-color: #414141;">
                        <img src="{{ asset('storage/' . $post->cover) }}" style="height: 100%; width: auto;">
                    </div>
                    <div class="p-6 bg-white">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <span class="inline-block h-10 w-10 rounded-full overflow-hidden bg-gray-100">
                                  @foreach ($post->developers as $developer)
                                    <img src="{{ asset('storage/' . $developer->photo) }}" style="height: 100%;">
                                  @endforeach
                                </span>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    @foreach ($post->developers as $developer)
                                        {{ $developer->name }}
                                    @endforeach
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    {{ $post->published_at->format('d/m/y') }}
                                    <span aria-hidden="true">&middot;</span>
                                    <span>{{ $post->published_at->diffForHumans()}}</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('blog.show', $post->slug) }}" class="block mt-2">
                            <p class="text-xl font-semibold text-gray-900">{{$post->title}}</p>
                            <p class="mt-3 text-base text-gray-500">{{ Str::limit($post->content, 100)}}</p>
                        </a>
                        <div class="mt-6">
                            <a href="#" class="text-base font-semibold text-gray-900 hover:text-gray-700">
                                Ler mais →
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('blog.index') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gray-800 hover:bg-gray-900">
                    Ver Todos os Artigos
                </a>
            </div>
        </div>
    </div>

    <div class="bg-purple-700">
        <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                <span class="block">Pronto para se aprofundar?</span>
                <span class="block text-purple-200">Cadastre-se gratuitamente hoje.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-white px-5 py-3 text-base font-medium text-purple-600 hover:bg-purple-50">
                        Criar Conta
                    </a>
                </div>
                <div class="ml-3 inline-flex rounded-md shadow">
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-purple-500 px-5 py-3 text-base font-medium text-white hover:bg-purple-600">
                        Entrar
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-16 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="relative rounded-2xl bg-purple-700 py-10 px-6 sm:py-16 sm:px-12 lg:flex lg:items-center lg:p-20">
                <div class="lg:w-0 lg:flex-1">
                    <h2 class="text-3xl font-bold tracking-tight text-white">Receba as atualizações</h2>
                    <p class="mt-4 max-w-3xl text-lg text-purple-100">Assine nossa newsletter e fique por dentro das novidades, artigos e conteúdos exclusivos.</p>
                </div>
                <div class="mt-12 sm:w-full sm:max-w-md lg:mt-0 lg:ml-8 lg:flex-1">
                    <form class="sm:flex">
                        <label for="email-address" class="sr-only">Endereço de e-mail</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required class="w-full rounded-md border-white px-5 py-3 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-purple-700" placeholder="Digite seu e-mail">
                        <button type="submit" class="mt-3 flex w-full items-center justify-center rounded-md border border-transparent bg-purple-500 px-5 py-3 text-base font-medium text-white hover:bg-purple-400 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-purple-700 sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0">
                            Assinar
                        </button>
                    </form>
                    <p class="mt-3 text-sm text-purple-100">
                        Respeitamos sua privacidade. Não compartilhamos seus dados.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>