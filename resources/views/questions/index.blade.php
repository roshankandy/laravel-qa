@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row well">
                        <div class="col-md-9">
                            <h2 style="margin-top:0">All Questions</h2>
                        </div>
                        <div class="col-md-3">
                            <a href="{{route('questions.create')}}" class="btn btn-success">Ask Question</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @include('layouts._messages')
                    @foreach($questions as $question)
                    <div class="row media">
                        <div class="col-md-3">
                            <div class="d-flex flex-column counters">
                                <div class="vote">
                                    <strong>{{$question->votes}}</strong>{{str_plural('vote',$question->votes)}}
                                </div>
                                <div class="status {{$question->answer_status}}">
                                    <strong>{{$question->answers}}</strong>{{str_plural('answer',$question->answers)}}
                                </div>
                                <div class="view">
                                    <strong>{{$question->views}}</strong>{{str_plural('view',$question->views)}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="media-body">
                                <div class="col-md-10">
                                    <h3 class="mt-0" style="margin-top:0"><a href="{{$question->url}}">{{$question->title}}</a> - Queen {{$question->user->my_queen}}</h3>
                                    <p class="lead">
                                        Asked by
                                        {{-- {{$question->users->name}}--}}
                                        <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                                        <small class="text-muted">{{$question->created_date}}</small>
                                    </p>
                                    {{str_limit($question->body,250)}}
                                </div>
                                <div class="col-md-2">
                                    <a href="{{route('questions.edit',$question->id)}}" class="btn btn-sm btn-info">Edit</a>
                                </div>



                                

                            </div>
                        </div>
                    </div>


                    @endforeach
                    {{--<div class="text-center">--}}
                    {{--{{$questions->links()}}--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection