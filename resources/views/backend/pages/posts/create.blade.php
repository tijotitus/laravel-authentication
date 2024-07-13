@extends('backend.layouts.master')

@section('admin-content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Add New Post
                    </div>
                    <div class="float-end">
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.blogs.store') }}" method="post">
                        @csrf

                        <div class="mb-3 row">
                            <label for="code" class="col-md-4 col-form-label text-md-end text-start">Title</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('code') is-invalid @enderror"
                                    id="title" name="title" value="{{ old('title') }}">
                                @if ($errors->has('code'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="description"
                                class="col-md-4 col-form-label text-md-end text-start">Description</label>
                            <div class="col-md-6">
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Post">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
