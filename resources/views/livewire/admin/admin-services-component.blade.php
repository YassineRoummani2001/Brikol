<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
        
    </style>
        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>All Services</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>All Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central ">
            <div class="content_info ">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row portfolioContainer">
                            <div class="col-md-12 profile1 table-responsive">
                                <div class="panal panal-default">
                                <div class="panel-heading">
                                    <div class="row shadow-xl"  style="background-color: #f9f9f9; margin: 0px; padding: 10px;" >
                                        <div class="col-md-6">
                                            All Services
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.add_service') }}" class="btn btn-info pull-right">Add New</a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="panel-body table-responsive">
                                    @if(Session::has('message') )
                                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                    @endif
                                    <table class="table table-striped table-hover table-responsive">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Featured</th>
                                            <th>Category</th>
                                            <th>Created At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($services as $service)
                                        <tr>
                                            <td>{{$service->id}}</td>
                                            <td><img src="{{asset('images/services/thumbnails')}}/{{$service->thumbnail}}" width="60"/></td>
                                            <td>{{$service->name}}</td>
                                            <td>{{$service->price}}</td>
                                            <td>
                                                @if ($service->status == 1)
                                                    <h5 style="color: green;" ><i class="fa fa-dot-circle-o" aria-hidden="true"> Active</i></h5> 
                                                @else
                                                    <h5 style="color: red;" > <i class="fa fa-dot-circle-o" aria-hidden="true"> Inactive</i> </h5>    
                                                @endif
                                            </td>
                                            <td>
                                                @if ($service->featured == 1)
                                                    <h5 style="color: green;" > YES</i></h5> 
                                                @else
                                                    <h5 style="color: red;" > NO</i> </h5>    
                                                @endif
                                            </td>
                                            <td>{{$service->category->name}}</td>
                                            <td>{{$service->created_at}}</td>
                                            <td>
                                                <a href="{{ route('admin.edit_service',['service_slug'=>$service->slug]) }}" class="btn btn-info"><i class="fa fa-edit fa-2x"></i></a>
                                                <a href="#" onclick="confirm('Are you sure, You want to delete this service?') || event.stopImmediatePropagation()" wire:click.prevent="deletService({{$service->id}})" class   ="btn btn-danger"><i class="fa fa-trash fa-2x"></i></a>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                                <div class="wrap-pagination-info pull-right">
                                    {{$services->links('pagination::bootstrap-4')}}
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
