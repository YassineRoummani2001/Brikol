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
                    <h1>{{$category_name}} Services</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>{{$category_name}} Services</li>
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
                                            {{$category_name}} Services
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{route('admin.service_categories')}}" class="btn btn-info pull-right">All Service Category</a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="panel-body table-responsive">
                                    <table class="table table-striped table-hover table-responsive">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Status</th>
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
                                                    <h5 style="color: green;" ><i class="fa fa-dot-circle-o" aria-hidden="true"i> Active</>
                                                @else
                                                    <h5 style="color: red;" > <i class="fa fa-dot-circle-o" aria-hidden="true"i></i> Inactive</h5>    
                                                @endif
                                            </td>
                                            <td>{{$service->category->name}}</td>
                                            <td>{{$service->created_at}}</td>
                                            <td>
                                                <a href="#" class="btn btn-info"><i class="fa fa-edit fa-2x"></i></a>
                                                <a href="#"   class   ="btn btn-danger"><i class="fa fa-trash fa-2x"></i></a>
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
