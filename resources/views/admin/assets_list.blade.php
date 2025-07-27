@extends('layouts.backend_app')

@section('content')

<style>

</style>

<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);">Byrdprographics</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);">Manage Assets </a>
                            </li>
                        </ol>
                    </div>
                    <h4 class="page-title">Manage Assets</h4>
                </div>
            </div>
        </div>

        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">


                       <div class="row">
    <div class="mb-3 col-md-6">
        <form method="GET" action="{{ route('search-items') }}" class="d-flex align-items-center gap-2">
            <input type="text" name="query" class="form-control me-2" placeholder="Search by name, category name" value="{{ request('query') }}" required>
            <button type="submit" class="btn btn-success me-2">Search</button>
            <a href="{{ route('search-items') }}" class="btn btn-danger">Clear</a>
        </form>
    </div>
</div>


                        <div id="cardCollpase4" class="collapse show">
                            <div class="table-responsive pt-3">
                                <table class="table table-centered  table-borderless mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Asset Name</th>
                                            <th>Category</th>
                                            <th>Premium</th>
                                            <th>Status</th>
                                            <th>Thumbnail</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($data->count())
                                        @foreach ($data as $index => $asset)
                                        <tr>
                                            <td>{{ ($data->currentPage() - 1) * $data->perPage() + $index + 1 }}
                                            </td>
                                            <td>{{ $asset->name }}</td>
                                            <td>{{ $asset->category_name }}</td>
                                            <td>{{ $asset->premium ? 'Yes' : 'No' }}</td>
                                            <td>
                                                @if ($asset->status == 1)
                                                <span class="badge bg-success">Active</span>
                                                @else
                                                <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td><img src="{{ asset('public/' . $asset->thumbnail_image) }}" width="40" alt="Thumbnail"></td>
                                            <td>
                                                <a href="{{route('edit-assets',['id'=>$asset->id])}}" class="btn btn-primary btn-sm editBtn">Edit</a>

                                                <a href="{{route('del-asset',['id'=>$asset->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are Your Sure You Want To Delete..')">
                                                    Delete </a>
                                            </td>

                                        </tr>
                                        @endforeach
                                        @else
                                        <td colspan="7">
                                            No results found for "{{ $query }}"
                                        </td>
                                        @endif
                                    </tbody>
                                </table>

                                <!-- Pagination Links -->
                                <div class="mt-3" style="display: flex; justify-content: center;">
                                    {{-- {{ $data->links() }} --}}
                                    @if ($data->lastPage() > 1)
                                    <div class="custom-pagination d-flex justify-content-center mt-3" style="gap: 6px; flex-wrap: wrap;">
                                        {{-- Previous Page Link --}}
                                        @if ($data->onFirstPage())
                                        <span class="px-3 py-1 border rounded text-muted">‹</span>
                                        @else
                                        <a href="{{ $data->previousPageUrl() }}" class="px-3 py-1 border rounded text-dark text-decoration-none">‹</a>
                                        @endif

                                        {{-- Pagination Elements --}}
                                        @for ($i = 1; $i <= $data->lastPage(); $i++)
                                            @if ($i == $data->currentPage())
                                            <span class="px-3 py-1 border rounded bg-primary text-white">{{ $i }}</span>
                                            @else
                                            <a href="{{ $data->url($i) }}" class="px-3 py-1 border rounded text-dark text-decoration-none">{{ $i }}</a>
                                            @endif
                                            @endfor

                                            {{-- Next Page Link --}}
                                            @if ($data->hasMorePages())
                                            <a href="{{ $data->nextPageUrl() }}" class="px-3 py-1 border rounded text-dark text-decoration-none">›</a>
                                            @else
                                            <span class="px-3 py-1 border rounded text-muted">›</span>
                                            @endif
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- .table-responsive -->
                        </div>
                        <!-- end collapse-->
                    </div>
                    <!-- end card-body-->
                </div>
                <!-- end card-->
            </div>
            <!-- end col-->
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>
@endsection
