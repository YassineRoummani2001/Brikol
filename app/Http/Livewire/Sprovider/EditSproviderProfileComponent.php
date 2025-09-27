<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\ServiceCategory;
use App\Models\ServiceProvider;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditSproviderProfileComponent extends Component
{
    use WithFileUploads;
    public $service_provider_id;
    public $image;
    public $about;
    public $city;
    public $service_location;
    public $service_category_id;
    public $newimage;

    public function mount(){
        $sprovider = ServiceProvider::where('user_id',Auth::user()->id)->first();
        $this->service_provider_id = $sprovider->id;
        $this->image = $sprovider->image;
        $this->about = $sprovider->about;
        $this->city = $sprovider->city;
        $this->service_location = $sprovider->service_location;
        $this->service_category_id = $sprovider->service_category_id;
    }

    public function updateProfile() {
        $sprovider = ServiceProvider::where('user_id',Auth::user()->id)->first();

        // if($sprovider){
        //     $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
        //     $this->newimage->storeAs('sproviders',$imageName);
        //     $sprovider->image = $imageName;
        // }else {
        //         $imageName = 'images/sproviders/dummy-profile.png'; // ولا خليه فارغ
        //     }

        if($this->newimage)
        {
            unlink('images/sproviders'.'/'.$this->image);
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('services/',$imageName);
            $sprovider->image = $imageName;
        }else {
                $imageName = 'images/sproviders/dummy-profile.png'; // ولا خليه فارغ
            }

        $sprovider->about = $this->about;
        $sprovider->city = $this->city;
        $sprovider->service_location = $this->service_location;
        $sprovider->service_category_id = $this->service_category_id;

        $sprovider->save();
        session()->flash('message','Profile has been update successfully!');
    }
    public function render()
    {
        $scategories = ServiceCategory::all();
        return view('livewire.sprovider.edit-sprovider-profile-component',['scategories'=>$scategories])->layout('layouts.base');
    }
}
