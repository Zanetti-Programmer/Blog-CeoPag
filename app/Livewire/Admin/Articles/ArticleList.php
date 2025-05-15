<?php

namespace App\Livewire\Admin\Articles;

use App\Models\Article;
use App\Models\Developer;
use Livewire\Component;
use Livewire\WithFileUploads;

class ArticleList extends Component
{
    use WithFileUploads;

    public $articles;
    public $developers;
    public $title, $category,$content, $cover, $published_at;
    public $developerIds = [];
    public $articleId;
    public $modalFormVisible = false;

    public function render()
    {
        $this->articles = Article::with('developers')->orderBy('published_at', 'desc')->get();
        $this->developers = Developer::all();
        return view('livewire.admin.articles.article-list');
    }

    public function createShowModal()
    {
        $this->resetForm();
        $this->modalFormVisible = true;
    }

    public function updateShowModal($id)
    {
        $this->resetForm();
        $this->articleId = $id;
        $article = Article::findOrFail($id);
        $this->title = $article->title;
        $this->content = $article->content;
        $this->category = $article->category;
        $this->published_at = $article->published_at ? $article->published_at->format('Y-m-d') : null;
        $this->developerIds = $article->developers->pluck('id')->toArray();
        $this->modalFormVisible = true;
    }

    public function delete($id)
    {
        Article::destroy($id);
    }

    public function resetForm()
    {
        $this->articleId = null;
        $this->title = '';
        $this->category = null;
        $this->content = '';
        $this->cover = null;
        $this->published_at = '';
        $this->developerIds = [];
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'category'=> 'required',
            'content' => 'required',
            'published_at' => 'nullable|date',
            'cover' => 'nullable|image|max:20480',
            'developerIds' => 'array',
        ]);

        // 'cover' => 'nullable|image|max:2048',

        $data = [
            'title' => $this->title,
            'category'=> $this->category,
            'content' => $this->content,
            'published_at' => $this->published_at,
        ];

        if ($this->cover) {
            $data['cover'] = $this->cover->store('covers', 'public');
        }

        if ($this->articleId) {
            $article = Article::find($this->articleId);
            $article->update($data);
        } else {
            $article = Article::create($data);
        }

        $article->developers()->sync($this->developerIds);

        $this->modalFormVisible = false;
        $this->resetForm();
    }
}
