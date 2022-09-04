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
        $postCount = BlogPost::count();
        $control;
        if ($this->amount >= $postCount) 
        {
            $control = true;
            return view('livewire.pagination', compact('posts','control'));

        }else {
            return view('livewire.pagination', compact('posts'));

        }
        
    }

    public function load() {
        $this->amount += 3;
        
    }
} 
