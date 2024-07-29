<?php

namespace App\Livewire;

use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Home Page - Prakriti Store')]
class HomePage extends Component
{
    public function render()
    {

        return view('livewire.home-page',[
            'banner'=>Banner::where('status','published')->take(5)->get()
         ]);
    }
}
