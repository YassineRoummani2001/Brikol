<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Slider;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $scategories = ServiceCategory::inRandomOrder()->take(18)->get();
        $fservices=Service::where('featured',1)->inRandomOrder()->take(8)->get();
        $fscategories=ServiceCategory::where('featured',1)->inRandomOrder()->take(20)->get();
        $apservices=Service::all();
        $slides = Slider::all();
        return view('livewire.home-component',['scategories'=>$scategories ,'fservices'=>$fservices , 'apservices'=>$apservices , 'fscategories'=>$fscategories , 'slides'=>$slides])->layout('layouts.base');
    }
}
