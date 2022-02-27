@extends('layouts.app')
@section('title', "Jobs")
@section('content')
<div class="container">
        <!-- Current Tasks -->
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Medvarsity Job Portal</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="div float-right">
                         <a href="{{ route('jobPosting.create') }}"  class="btn btn-primary btn-sm active"><i class="fa fa-plus-square-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                            <th>Job Title</th>
                            <th>Comapany</th>
                            <th>Salary</th>
                            <th>Job Location</th>
                            <th>Skills</th>
                            <th>Job Description</th>
                            <th>Education / Experience</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($jobPosts as $post)
                                <tr>
                                    <td class="table-text"><div>{{ $post->job_title }}</div></td>
                                    <td class="table-text"><div>{{ $post->company_name }}</div></td>
                                    <td class="table-text"><div>{{ $post->sal_package }}</div></td>
                                    <td class="table-text"><div>{{ $post->job_location }}</div></td>
                                    <td class="table-text"><div>{{ $post->skills }}</div></td>
                                    <td class="table-text"><div>{{ $post->job_description }}</div></td>
                                    <td class="table-text"><div>{{ $post->education_experiance }}</div></td>
                                    <td><a href="{{ url('/jobPosting/'.$post->id.'/edit') }}" class="btn btn-primary btn-sm"><i class="	fa fa-pencil-square-o"></i></a>
                                    <!-- <a href="{{ url('/jobPosting/delete/'.$post->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o fa-lg"></i></a></td> -->
                                    <form method="POST" action="{{ url('/jobPosting/'.$post->id) }}" name="delete-item" class="d-inline">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                        <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash-o fa-lg"></i>
                                        </button>
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            <div class="d-flex justify-content-center">
             {!! $jobPosts->links() !!}
           </div> 
        </div> 
        
</div>

@endsection
  