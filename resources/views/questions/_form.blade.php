{{ csrf_field() }}
<div class="form-group">
    <label for="question-title">Question Title</label>
    <input type="text" name="title" id="question-title" value="{{old('title',$question->title)}}" class="form-control {{$errors->has('title')?'is-invalid':''}}"/>
</div>

@if($errors->has('title'))
<div class="alert alert-danger">
    <strong>Error !</strong> {{$errors->first('title')}}
</div>
@endif

<div class="form-group">
    <label for="question-body">Explain you question</label>
    <textarea name="body" id="question-body" rows="10" class="form-control  {{$errors->has('body')?'is-invalid':''}}">{{old('body',$question->body)}}</textarea>
</div>

@if($errors->has('body'))
<div class="alert alert-danger">
    <strong>Error !</strong> {{$errors->first('body')}}
</div>
@endif

<div class="form-group">
    <input type="submit" value="{{$button_name}}" class="btn btn-success"/>
</div>