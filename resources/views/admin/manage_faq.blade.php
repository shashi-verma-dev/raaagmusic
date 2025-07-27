@extends('layouts.backend_app')

@section('content')

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
                                <a href="javascript: void(0);">Manage Faq</a>
                            </li>
                        </ol>
                    </div>
                    <h4 class="page-title">Manage Faq</h4>
                </div>
            </div>
        </div>

        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        {{-- <div class="card-widgets">
                                        <a href="javascript: void(0);" data-bs-toggle="reload"><i
                                                class="mdi mdi-refresh"></i></a>
                                        <a data-bs-toggle="collapse" href="#cardCollpase4" role="button"
                                            aria-expanded="false" aria-controls="cardCollpase4"><i
                                                class="mdi mdi-minus"></i></a>
                                        <a href="javascript: void(0);" data-bs-toggle="remove"><i
                                                class="mdi mdi-close"></i></a>
                                    </div> --}}
                        <h4 class="header-title mb-0"><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#testimonialModal">
                                    Add New
                                </button></h4>
                        
                        <div id="cardCollpase4" class="collapse show">
                            <div class="table-responsive pt-3">
                                <table class="table table-centered  table-borderless mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $index => $faq)
                                        <tr>
                                            <td>{{ ($data->currentPage() - 1) * $data->perPage() + $index + 1 }}
                                            </td>
                                            <td>{{ $faq->question }}</td>
                                            <td>{{ $faq->answer }}</td>
                                            
                                            <td> <a href="{{ route('del-faq', ['id' => $faq->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are Your Sure You Want To Delete..')"> Delete </a> </td>
                                        </tr>
                                        @endforeach
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

                            <!-- Modal -->
                            <div class="modal fade" id="testimonialModal" tabindex="-1" aria-labelledby="testimonialModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <!-- Large modal for better spacing -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="testimonialModalLabel">Add Faq</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('faq-store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf

                                                @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul class="mb-0">
                                                        @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif

                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label>Question:</label>
                                                        <textarea name="question" class="form-control" rows="3" required>{{ old('question') }}</textarea>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label>Answer:</label>
                                                        <textarea name="answer" class="form-control" rows="3" required>{{ old('answer') }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Add
                                                        Faq</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


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
