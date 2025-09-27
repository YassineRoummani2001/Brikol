<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditSliderComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $status=0;
    public $image;
    public $slide_id;
    public $newimage;

    public function mount($slide_id)
        {
            $slide = Slider::find($slide_id);
            $this->slide_id = $slide->id;
            $this->title = $slide->title;
            $this->status = $slide->status;
            $this->image = $slide->image;
        }
    public function update($fields)
        {
                    $this->validateOnly($fields,[
                        'title' => 'required',
                        'status' => 'required',

                    ]);
                    if($this->newimage)
                    {
                        $this->validate( [
                            'newimage' => 'required|mimes:jpeg,png,jpg',
                        ]);
                    }
        }
        public function updateSlide(){
            $this->validate([
                'title' => 'required',
                'status' => 'required',

            ]);
            if($this->newimage)
            {
                $this->validate( [
                    'newimage' => 'required|mimes:jpeg,png,jpg',
                ]);
            }
            $slide = Slider::find($this->slide_id);
            $slide->title = $this->title;
            $slide->status = $this->status;
            if($this->newimage)
            {
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('slider', $imageName);
                $slide->image = $imageName;
            }
            $slide->save();
            session()->flash('message', 'Slide has been updated successfully!');
            return redirect()->route('admin.slider');

        }
    public function render()
    {
        return view('livewire.admin.admin-edit-slider-component')->layout('layouts.base');
    }
}
