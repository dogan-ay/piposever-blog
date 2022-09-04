<?php

namespace App\Http\Livewire;
use App\Models\BlogPost;

use Livewire\Component;

class Firstpost extends Component
{
    public function render()
    {
        $post = BlogPost::orderBy('created_at','desc')->first();
        return view('livewire.firstpost', compact('post'));
    }
}
