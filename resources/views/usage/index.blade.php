@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-body alert alert-info">
                    <a href="/">To home page</a>
                </div>
            </div>
            <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('reviews.approved')}}">Approved</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link " href="{{route('reviews.processing')}}">Processing</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link " href="{{route('reviews.rejected')}}">Rejected</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active " href="{{route('usage.index')}}">Usage</a>
                        </li>
                        
                    </ul>
                <div class="card-header">Usage</div>
                <div class="card-body">
                    <table class="table ">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Total Views</th>
                            <th scope="col">Course Views</th>
                            <th scope="col">Review Views</th>
                            <th scope="col">Professor Views</th>
                            <th scope="col">About Views</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($usage_logs as $usage_log)
                            <tr>
                                <th  scope="row">{{$usage_log->id}}</th>
                                <td>{{$usage_log->created_at}}</td>
                                <td>{{$usage_log->course_views+$usage_log->professor_views+$usage_log->review_views+$usage_log->about_views}}</td>
                                <td>{{$usage_log->course_views}}</td>
                                <td>{{$usage_log->review_views}}</td>
                                <td>{{$usage_log->professor_views}}</td>
                                <td>{{$usage_log->about_views}}</td>
                                
                                
                              </tr>
                            @endforeach
                            <div>
                                {{$usage_logs->links()}}

                            </div>
                          
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection