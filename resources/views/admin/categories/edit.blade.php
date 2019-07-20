@extends('layouts.app')

@section('content')
    {{--@include('admin.includes.errors')--}}

    <div class="panel panel-default">
        <div class="panel-heading">
            Update category: {{ $category->name }}
        </div>

        <div class="panel-body">
            <form action="{{ route('category.update', ['id'=> $category->id]) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">
                        Update category
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection