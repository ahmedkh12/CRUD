@extends('main')

@section('title')
    Edit Job
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

    <form method="post" action={{route('jobs.update', $data_to_update->id)}}>
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="job_name" required  value={{$data_to_update->name}}>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Department</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="dept" required  value={{$data_to_update->dept}}>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salary</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="salary" required value={{$data_to_update->salary}}>
        </div>


        <input type="submit" class="btn btn-success">
    </form>



