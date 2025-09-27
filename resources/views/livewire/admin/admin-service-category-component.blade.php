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
                    <h1>Services Categories</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Services Categories</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row portfolioContainer">
                            <div class="col-md-12 profile1 table-responsive">
                                <div class="panal panal-default">
                                <div class="panel-heading">
                                    <div class="row shadow-xl"  style="background-color: #f9f9f9; margin: 0px; padding: 10px;" >
                                        <div class="col-md-6">
                                            All Service Categories
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{route('admin.add_service_category')}}" class="btn btn-info pull-right">Add New</a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="panel-body table-responsive">
                                    @if(Session::has('message') )
                                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                    @endif
                                    <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Featured</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($scategories as $scategory)
                                        <tr>
                                            <td>{{$scategory->id}}</td>
                                            <td><img src="{{asset('images/categories')}}/{{$scategory->image}}" width="60"/></td>
                                            <td>{{$scategory->name}}</td>
                                            <td>{{$scategory->slug}}</td>
                                            <td>
                                                @if ($scategory->featured == 1)
                                                    <h5 style="color: green;" > YES</i></h5> 
                                                @else
                                                    <h5 style="color: red;" > NO</i> </h5>    
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('admin.services_by_category',['category_slug'=>$scategory->slug])}}" class="btn btn-info" style="margin-right:10px;"><i class="fa fa-list fa-2x"></i></a>
                                                <a href="{{route('admin.edit_service_category',['category_id'=>$scategory->id])}}" class="btn btn-info"><i class="fa fa-edit fa-2x"></i></a>
                                                <a href="#" onclick="confirm('Are you sure, You want to delete this category?') || event.stopImmediatePropagation()" wire:click.prevent="deleteServiceCategory({{$scategory->id}})" class   ="btn btn-danger"><i class="fa fa-trash fa-2x"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                                <div class="wrap-pagination-info pull-right">
                                    {{$scategories->links('pagination::bootstrap-4')}}
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
