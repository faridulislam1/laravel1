@extends ('master')

@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            Department form
                            {{session('message')}}
                        </div>
                        <div class="card-body table-responsive">
                            <form action="{{route('new.department')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Department Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="department_name" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Department Code</label>
                                    <div class="col-md-9">
                                        <input type="text" name="department_code" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <div class="col-md-12">
                                        <input type="submit" value="Save Info" class="form-control btn btn-primary">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
