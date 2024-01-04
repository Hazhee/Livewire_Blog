<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{

    use WithPagination;

    #[Url()]
    public $search = '';

    #[Url()]
    public $sort = 'desc';

    #[Url()]
    public $category = '';

    public function setSort($sort)
    {
        $this->sort = ($sort == 'desc') ? 'desc' : 'asc';
    }



    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
    }


    #[Computed()]
    public function posts()
    {
        return Post::published()
        ->with('user','categories')
        ->orderBy("created_at", $this->sort )
        ->when(Category::where('slug', $this->category)->first(), function ($query) {
            $query->withCategory($this->category);
        })
        ->where('title','like',"%{$this->search}%")
        ->paginate(10);
    }


    // public function render()
    // {
    //     return view('livewire.post-list');
    // }
}
