@extends('layouts.app')

@section('content')
<article class="blog-post">
    <!-- Post Header with Author Info -->
    <header class="post-header">
        <div class="post-user">
            <div class="user-avatar">
                @if($article->developers->isNotEmpty() && $article->developers->first()->photo)
                    <img src="{{ asset('storage/' . $article->developers->first()->photo) }}"
                         alt="Author: {{ $article->developers->first()->name }}" 
                         class="avatar-image">
                @else
                    <img src="{{ asset('images/default-avatar.jpg') }}" 
                         alt="Default avatar" 
                         class="avatar-image">
                @endif
            </div>
            <div class="user-info">
                @if($article->developers->isNotEmpty())
                    <a href="#" class="username">{{ $article->developers->first()->name }}</a>
                    <span class="user-title">Developer</span>
                @endif
            </div>
        </div>
        <div class="more-options">
            <i class="fas fa-ellipsis-h"></i>
        </div>
    </header>
    
    <div class="cover-container">
        @if($article->cover)
            <img src="{{ asset('storage/' . $article->cover) }}" 
                 alt="Cover: {{ $article->title }}" 
                 class="cover-image">
        @else
            <img src="{{ asset('images/default-cover.jpg') }}" 
                 alt="Default cover" 
                 class="cover-image">
        @endif
    </div>
    
    <div class="post-content">
        <div class="post-meta">
            <div class="post-stats">
                <div class="stat-item">
                    <i class="far fa-eye"></i>
                    <span>{{ number_format($article->view) }} views</span>
                </div>
                @if(isset($article->comments_count))
                <div class="stat-item">
                    <i class="far fa-comment"></i>
                    <span>{{ number_format($article->comments_count) }}</span>
                </div>
                @endif
            </div>
            <div class="post-date">
                <i class="far fa-calendar-alt"></i>
                <span>{{ $article->published_at->format('M d, Y') }}</span>
            </div>
        </div>
        
        <h1 class="post-title">{{ $article->title }}</h1>

        <div class="post-body">
            {!! nl2br(e($article->content)) !!}
        </div>
        
        @if(!isset($article->category) && $article->category->isNotEmpty())
        <div class="post-tags">
            @foreach($article->category as $tag)
                <span class="tag">{{ $tag->name }}</span>
            @endforeach
        </div>
        @endif
        
        @if($article->developers->count() > 1 || ($article->developers->isNotEmpty() && isset($article->developers->first()->bio)))
        <div class="author-section">
            <div class="user-avatar">
                @if($article->developers->isNotEmpty() && $article->developers->first()->photo)
                    <img src="{{ asset('storage/' . $article->developers->first()->photo) }}"
                         alt="Author: {{ $article->developers->first()->name }}" 
                         class="avatar-image">
                @else
                    <img src="{{ asset('images/default-avatar.jpg') }}" 
                         alt="Default avatar" 
                         class="avatar-image">
                @endif
            </div>
            <div class="author-info">
                <div class="author-name">
                    @foreach($article->developers as $developer)
                        {{ $developer->name }}{{ !$loop->last ? ', ' : '' }}
                    @endforeach
                </div>
                @if($article->developers->isNotEmpty() && isset($article->developers->first()->bio))
                <div class="author-bio">
                    {{ $article->developers->first()->bio }}
                </div>
                @endif
            </div>
        </div>
        @endif
    </div>
</article>
@include('layouts.footer')
@endsection