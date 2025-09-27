<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithPagination;

class AdminSliderComponent extends Component
{
    use WithPagination;

    public function deletSlide($slide_id)
    {
        $slide = Slider::find($slide_id);

        if($slide->image)
        {
            unlink('images/slider'.'/'.$slide->image);
        }
        $slide->delete();
        session()->flash('message','slide has been deleted successfully!');
        return redirect()->route('admin.slider');
    }
    public function render()
    {
        $slides = Slider::paginate(10) ;
        return view('livewire.admin.admin-slider-component',['slides'=>$slides])->layout('layouts.base');
    }
}
