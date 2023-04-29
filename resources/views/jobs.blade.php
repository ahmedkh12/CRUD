@extends('main')

@section('title')
   All Jobs
@endsection


@section('content')
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>

@elseif(Session::has('delete'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('delete')}}
    </div>
@endif

<div class="row row-sm">


    <!--div-->

                    <table id="example" class="table key-buttons text-md-nowrap">
                        <thead>
                        <tr>
                            <th class="border-bottom-0" scope="col">#</th>
                            <th class="border-bottom-0" scope="col">Job Name</th>
                            <th  class="border-bottom-0"scope="col">Department</th>
                            <th  class="border-bottom-0"scope="col">Salary</th>
                            <th class="border-bottom-0" scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($jobs as $info)
                            <tr>

                                <td>{{$info->id}}</td>
                                <td>{{$info->name}}</td>
                                <td>{{$info->dept}}</td>
                                <td>{{$info->salary}}</td>
                                <td>
                                    <div>

                                        <form action="{{route('jobs.destroy',$info->id)}}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a class="btn btn-info" href="{{route('jobs.edit',$info->id)}}">Edit</a>
                                            <button  class="btn btn-danger" type="submit">delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                        @endforeach



                        </tbody>
                    </table>

    <!--/div-->

    <!--div-->



@endsection




