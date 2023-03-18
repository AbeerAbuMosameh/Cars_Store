@extends('admin/layouts/contentLayoutMaster')


@section('content')
    <!-- Kick start -->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Service 🚀</h4>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active" id="slider" aria-labelledby="slider-tab" role="tabpanel">
                    <form enctype="multipart/form-data" method="POST" action="{{route('services.update',$service->id)}}">
                        @csrf
                        @method('put')
                        <div class="row">
                            @include('admin._msg')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput1">Service Title</label>
                                    <input type="text" value="{{$service->title}}" class="form-control" id="basicInput1" placeholder="Enter Title"
                                           name="title"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput1">Sub Title</label>
                                    <input type="text" value="{{$service->description}}" class="form-control" id="basicInput1" placeholder="Enter Title"
                                           name="description"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInput1">Service Price</label>
                                    <input type="text" value="{{$service->price}}" class="form-control" id="basicInput1" placeholder="Enter Title"
                                           name="price"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicInputFile3">service image</label>
                                    <input type="file" class="form-control-file" id="basicInputFile3"
                                           name="img"/>
                                    <img width="120" height="100"
                                         src="{{asset('uploads/images/services/'.$service->img)}}" alt="service">

                                </div>
                            </div>


                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('services')}}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--/ Kick start -->

@endsection
