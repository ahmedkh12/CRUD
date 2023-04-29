@extends('main')

@section('title')
     Create Job
@endsection


@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post"  enctype="multipart/form-data"  action={{route('jobs.store')}}>
        @csrf

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="job_name" required  value={{old('job_name')}}>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Department</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="dept" required  value={{old('dept')}}>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salary</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="salary" required value={{old('salary')}}>
        </div>

        <div class="mb-3">
            <label  class="form-label">Job Logo</label>
            <input type="file" class="form-control"   name="photo" required >
        </div>

        <input type="submit" class="btn btn-success">
    </form>




@endsection
