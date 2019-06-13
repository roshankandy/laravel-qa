@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row well">
                        <div class="col-md-9">
                            <h2 style="margin-top:0">Ask Question</h2>
                        </div>    
                        <div class="col-md-3">
                            <a href="{{route('questions.index')}}" class="btn btn-info">Back To All Question</a>
                        </div>
                    </div> 
                </div>

                <div class="card-body">
                    <h3>Question Form</h3>
                    <form action="{{route('questions.store')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="question-title">Question Title</label>
                            <input type="text" name="title" id="question-title" class="form-control {{$errors->has('title')?'is-invalid':''}}"/>
                        </div>

                        @if($errors->has('title'))
                        <div class="alert alert-danger">
                            <strong>Error !</strong> {{$errors->first('title')}}
                        </div>
                        @endif

                        <div class="form-group">
                            <label for="question-body">Explain you question</label>
                            <textarea name="body" id="question-body" rows="10" class="form-control  {{$errors->has('body')?'is-invalid':''}}"></textarea>
                        </div>

                        @if($errors->has('body'))
                        <div class="alert alert-danger">
                            <strong>Error !</strong> {{$errors->first('body')}}
                        </div>
                        @endif

                        <div class="form-group">
                            
                            <input type="submit" value="Ask this question" class="btn btn-success"/>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection