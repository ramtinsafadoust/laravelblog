@extends('layouts.master')


@section('content')


    <table class="table">

        <thead>
                <tr>

                    <th>ردیف</th>
                    <th>عنوان</th>
                    <th>شناسه</th>

                    <th> بازدید</th>
                    <th>نویسنده</th>
                    <th >عملیات</th>



                </tr>


        </thead>

        <tbody>

        @foreach($posts as $post)

            <tr>

                <td>{{ $loop->index +1 }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->id }}</td>
                <td>{{ $post->view }}</td>
                <td><a href="{{route('usersarticles',$post->user->id)}}" class="btn btn-info" style="font-size: small">{{$post->user->name}}=>{{count($post->user->articles)}}</a></td>
                <td>
                    <form action="/admin/articles/user/{{$post->user->id}}"  method="GET">

                        <button class="btn btn-primary" type="submit" ><i class="fa fa-pen-nib fa-1x  ">  </i></button>
                    </form>
                </td>


                <td>
                    <form action="{{route('articles.destroy',$post->id)}}"  method="POST">

                        @csrf
                        @method('delete')

                        <button class="btn btn-danger" type="submit" ><i class="fa fa-trash-alt fa-1x  ">  </i></button>
                    </form>
                </td>

                <td>   </td>




            </tr>


        @endforeach






        </tbody>



    </table>

@endsection
