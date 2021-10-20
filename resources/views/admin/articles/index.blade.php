@extends('layouts.master')


@section('content')


    <table class="table">

        <thead>
                <tr>

                    <th>ردیف</th>
                    <th>عنوان</th>
                    <th>شناسه</th>
                    <th> بازدید</th>
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
                <td>
                    <form action="{{route('articles.edit',$post->id)}}"  method="GET">

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
