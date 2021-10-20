@extends('layouts.master')


@section('content')


    <h1>Create Article</h1>




    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif




    <form action="{{route('articles.update',[$article->id])}}" method="POST">

        @csrf
        @method('put')

        <div class="form-group">

            <label for="title">عنوان : </label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{$article->title}}">
        </div>
        <div class="form-group">
            <label for="body">متن مقاله : </label>
            <textarea  name="body" id="body" cols="30" rows="10" class="form-control">{{$article->body}}</textarea>
        </div>
        <br>
        <button class="btn btn-primary">به روز رسانی مقاله</button>
    </form>

@endsection
