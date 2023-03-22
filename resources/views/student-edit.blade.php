@extends ('master')

@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            Student form
                            {{session('message')}}
                        </div>
                        <div class="card-body">
                            <form action="{{route('update.student')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$student->id}}"> </input>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Seip Id</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="seid" value="{{ $student->seid }}">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" value="{{ $student->name }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" name="email" class="form-control" value="{{$student->email}}" >
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Phone</label>
                                    <div class="col-md-9">
                                        <input type="text" name="phone" class="form-control" value="{{$student->phone}}" >
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Address</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control"  name="address">{{$student->address}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Department</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="department">
                                            <option>Select A Department</option>
                                            @foreach($departments as $department)
                                                <option value="{{$department->id}}"{{$department->id==$student->department ? 'selected': ''}}>{{$department->department_name}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Course name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="course_name" class="form-control" value="{{$student->course_name}}">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-form-label col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{asset($student->image)}}" class="img-fluid" alt="">
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

