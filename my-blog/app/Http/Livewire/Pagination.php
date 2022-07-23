<?php

namespace App\Http\Livewire;
use App\Models\BlogPost;
use Illuminate\Http\Request;

use Livewire\Component;

class Pagination extends Component
{

    public $amount = 3;

    public function render()
    {
        $posts = BlogPost::orderBy("created_at","desc")->take($this->amount)->get();


        return view('livewire.pagination', compact('posts'));
    }

    public function load() {
        $this->amount += 3;
        
    }
} 
