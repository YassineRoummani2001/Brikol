<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddSliderComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $status=0;
    public $image;

    public function update($fields){
        $this->validateOnly($fields,[
            'title'=>'required',
            'image'=>'required|mimes:jpeg,png'

        ]);
    }

    public function addNewSlide(){
        $this->validate([
            'title'=>'required',
            'image'=>'required|mimes:jpeg,png'
        ]);
        $slide = new Slider();
        $slide->title = $this->title;
        $slide->status = $this->status;


        $imageName = Carbon::now()->timestamp . '.'. $this->image->extension();
        $this->image->storeAs('slider',$imageName);
        $slide->image = $imageName;

        $slide->save();
        session()->flash('message','Slider has been created successfully!');
        return redirect()->route('admin.slider');


    }
    public function render()
    {
        return view('livewire.admin.admin-add-slider-component')->layout('layouts.base');
    }
}
