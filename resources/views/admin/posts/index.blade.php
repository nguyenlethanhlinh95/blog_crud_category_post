@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>Image</th>
                <th>Title</th>
                <th>Edit</th>
                <th>Deleting</th>
                </thead>

                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td><img width="50px" height="50px" src="{{ $post->featured }}" alt="{{ $post->title }}"></td>
                        <td> {{ $post->title }}</td>
                        <td>
                            <a href="{{ route('post.edit', ['id'=> $post->id]) }}" class="btn btn-xs btn-info">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                        </td>
                        <td>
                            {{--<a href="{{ route('category.destroy', ['id' => $category->id]) }}" class="btn btn-xs btn-danger">--}}
                            {{--x--}}
                            {{--</a>--}}
                            {!! Form::open(['method'=>'DELETE', 'action'=> ['PostsController@destroy', $post->id]]) !!}
                            {!! Form::submit('x', ['class'=>'btn btn-xs btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection