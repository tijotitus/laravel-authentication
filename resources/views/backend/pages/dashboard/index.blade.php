@extends('backend.layouts.master')

@section('title')
    Dashboard Page - Admin Panel
@endsection


@section('admin-content')
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Dashboard</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                @include('backend.layouts.partials.logout')
            </div>
        </div>
    </div>
    <!-- page title area end -->

    <div class="main-content-inner">
        <div class="row">
            
                <div class="card-header">Post List</div>
                

                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="width: 100%">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">S#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $post)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td>
                                    <a href="{{ route('admin.blogs.show', $post->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-eye"></i> Show
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center">
                                    <span class="text-danger"><strong>No Posts Found!</strong></span>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                

                    {{ $posts->links() }}

                
        </div>
    </div>
@endsection
