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
                        @include('questions._form',['button_name'=>'Ask Question'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection