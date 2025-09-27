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
                    <h1>All Contacts</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>All Contacts</li>
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
                                            All Contacts
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="panel-body table-responsive">
                                    <table class="table table-striped table-hover table-responsive">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($contacts as $contact)
                                        <tr>
                                            <td>{{$contact->id}}</td>
                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{$contact->phone}}</td>
                                            <td>{{$contact->message}}</td>
                                            <td>{{$contact->created_at}}</td>
                                            {{-- <td>
                                                <a href="" class="btn btn-info"><i class="fa fa-edit fa-2x"></i></a>
                                                <a href="#" onclick="confirm('Are you sure, You want to delete this contact?') || event.stopImmediatePropagation()" wire:click.prevent="deletcontact({{$contact->id}})" class   ="btn btn-danger"><i class="fa fa-trash fa-2x"></i></a>
                                            </td> --}}
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                                <div class="wrap-pagination-info pull-right">
                                    {{$contacts->links('pagination::bootstrap-4')}}
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
