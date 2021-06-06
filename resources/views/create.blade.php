@extends('layouts.layout')

@section('title')@parent:: {{ $title }} @endsection


@section('content')
    <section class="jumbotron text-center">
        <div class="container">
    <form action="{{ route('posts.store')}}" METHOD="POST">
        <div class="form-group">
            @csrf
            <label for="exampleFormControlInput1">Titie</label>
            <input type="test" class="form-control" name="title" value="{{old('title')}}" id="title" placeholder="title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea class="form-control" name="content" id="content" value="{{old('content')}}" placeholder="content" id="content" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">rubric</label>
            <select  name="rubric_id" class="form-control" id="rubric">
                <option> select runbric </option>

               @foreach($rubrics as $k => $v)
                    <option value="{{$k}}"
                    @if(old('rubric_id')==$k)
                    selected
                    @endif
                    >{{$v}}</option>
                @endforeach
            </select>
        </div>
<button type="submit" class="btn btn-primary">submit</button>
    </form>
        </div>
</section>


@endsection()

