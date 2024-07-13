@extends('backend.layouts.master')

@section('admin-content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Post Information
                </div>
                <div class="float-end">
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
                <form action="{{ route('admin.report-violations.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <input type="hidden" name="user_id" value="{{ $post->user_id }}">

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to report this post?');"><i class="bi bi-trash"></i> Report Violation</button>
                </form>
                
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Title:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $post->title }}
                        </div>
                    </div>

                
                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $post->description }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection