<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Slider;
use Livewire\Component;

class HomeServiceCategoriesComponent extends Component
{
    public function render()
    {
        // $homescategories = ServiceCategory::inRandomOrder()->take(18)->get();
        // $fservices=Service::where('featured',1)->inRandomOrder()->take(8)->get();
        // $fscategories=ServiceCategory::where('featured',1)->inRandomOrder()->take(20)->get();
        // $apservices=Service::all();
        return view('livewire.home-service-categories-component')->layout('layouts.base');
    }
}
