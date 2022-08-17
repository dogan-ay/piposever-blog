<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class Category extends Component
{
    public $amount = 1;
    public $category;

    public function render()
    {   
        $posts = BlogPost::where('category',$this->category)->orderBy("created_at","desc")->take($this->amount)->get();


        return view('livewire.category', compact('posts'));
    }

    public function load() {
        $this->amount += 1;
        
    }
} 
