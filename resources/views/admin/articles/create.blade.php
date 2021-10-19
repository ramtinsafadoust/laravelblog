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
 



<form action="/admin/articles" method="POST">

    @csrf
    <div class="form-group">

        <label for="title">عنوان : </label>
        <input type="text" name="title" class="form-control" placeholder="Title">
    </div>
    <div class="form-group">
        <label for="body">متن مقاله : </label>
        <textarea  name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <br>
    <button class="btn btn-primary">ارسال مقاله</button>
</form>

@endsection