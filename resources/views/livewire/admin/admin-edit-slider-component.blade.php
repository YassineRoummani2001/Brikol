<div>
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Slides</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Edit Slides</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central" >
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container "style=" border: 1px solid #F3F2F2; ">
                        <div class="row portfolioContainer">
                            <div class="col-md-12 profile1">
                                <div class="panal panal-default">
                                <div class="panel-heading">
                                    <div class="row shadow-xl" style="background-color: #f9f9f9; margin: 0px; padding: 10px;" >
                                        <div class="col-md-6">
                                            Edit Slides
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{route('admin.slider')}}" class="btn btn-info pull-right">All Slides</a>
                                        </div>
                                    </div>
                                <div class="panel-body" >
                                    @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                    @endif
                                    <form class="form-horizontal" wire:submit.prevent="updateSlide"  >
                                        @csrf
                                            <div class="form-group">
                                                <label for="title" class="control-label col-sm-3">Title :</label>
                                                <div class="col-sm-9">
                                                    <input type="text"  class="form-control " name="title" wire:model="title" />
                                                    @error('title') <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="status" class="control-label col-sm-3">Status :</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" wire:model="status">
                                                        <option value="">Select Status</option>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                    @error('status') <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="image" class="control-label col-sm-3">Image :</label>
                                                <div class="col-sm-9">
                                                    <input type="file" placeholder="Image" class="form-control-file" name="image" wire:model="newimage" />
                                                    @error('newimage') <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                    @if($newimage)
                                                        <img src="{{$newimage->temporaryUrl()}}" width="60px" />
                                                    @else
                                                        <img src="{{asset('images/slider')}}/{{$image}}" width="60px" />
                                                    @endif

                                                    <div wire:loading wire:target="image" style="margin-top:8px;">
                                                        <span class="spinner-border spinner-border-sm text-primary" role="status" aria-hidden="true"></span>
                                                        Uploading...
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success pull-right">Edit Slide</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
</div>
<div>
</div>
