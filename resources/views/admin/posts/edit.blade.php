@extends('layouts.app')

@section('content')
    {{--@include('admin.includes.errors')--}}

    <div class="panel panel-default">
        <div class="panel-heading">
            Update post: {{ $post->title }}
        </div>

        <div class="panel-body">
            <form action="{{ route('post.update', ['id'=> $post->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" value="{{ $post->title }}" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="featured">Featured image</label>
                    <input type="file" name="featured" id="featured" class="form-control"  value="{{ $post->featured }}">
                </div>

                <div class="form-group">
                    <label for="category">Select a category</label>
                    <select name="category_id" id="category" class="form-control">
                        <option value="">--Choose category--</option>
                        @foreach($categories as $cate)
                            <option @if($cate->id == $post->category_id) {{ 'selected'  }} @endif value="{{ $cate->id }}">{{ $cate->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{ $post->content }}</textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Store post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection