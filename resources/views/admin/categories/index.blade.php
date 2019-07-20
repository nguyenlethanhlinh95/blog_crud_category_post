@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>Category name</th>
                <th>Editing</th>
                <th>Deleting</th>
                </thead>

                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('category.edit', ['id'=> $category->id]) }}" class="btn btn-xs btn-info">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                        </td>
                        <td>
                            {{--<a href="{{ route('category.destroy', ['id' => $category->id]) }}" class="btn btn-xs btn-danger">--}}
                                {{--x--}}
                            {{--</a>--}}
                            {!! Form::open(['method'=>'DELETE', 'action'=> ['CategoryController@destroy', $category->id]]) !!}
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