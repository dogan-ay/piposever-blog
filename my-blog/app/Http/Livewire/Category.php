<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class Category extends Component
{
    public $amount = 5;
    public $category;

    public function render()
    {   
        $posts = BlogPost::where('category',$this->category)->orderBy("created_at","desc")->take($this->amount)->get();

        $postCount =  BlogPost::where('category',$this->category)->count();

        $control;

        if ($this->amount >= $postCount) 
        {
            $control = true;
            return view('livewire.category', compact('posts','control'));

        }else {
            return view('livewire.category', compact('posts'));

        }
       
    }


    public function load() {
        $this->amount += 5;
        
    }
} 
