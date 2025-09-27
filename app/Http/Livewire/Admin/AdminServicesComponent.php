<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServicesComponent extends Component
{
    use WithPagination;
    public function deletService($service_id)
    {
        $service = Service::find($service_id);

        if($service->thumbnail)
        {
            unlink('images/services/thumbnails/'.'/'.$service->thumbnail);
        }
        if($service->image)
        {
            unlink('images/services'.'/'.$service->image);
        }
        $service->delete();
        session()->flash('message','Service has been deleted successfully!');
        return redirect()->route('admin.all_services');
    }
    public function render()
    {
        $services = Service::paginate(10);
        return view('livewire.admin.admin-services-component',['services'=>$services])->layout('layouts.base');
    }
}
