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
                                    <a href="javascript: void(0);">Manage Contact Enquiry</a>
                                </li>
                            </ol>
                        </div>
                        <h4 class="page-title">Manage Contact Enquiry</h4>
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
                                <a href="javascript: void(0);" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                <a data-bs-toggle="collapse" href="#cardCollpase4" role="button" aria-expanded="false"
                                    aria-controls="cardCollpase4"><i class="mdi mdi-minus"></i></a>
                                <a href="javascript: void(0);" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>
                            </div> --}}
                            {{-- <h4 class="header-title mb-0">Quick Links</h4> --}}
                            <div id="cardCollpase4" class="collapse show">
                                <div class="table-responsive pt-3">
                                        <table class="table table-centered  table-borderless mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $index => $contact)
                                                    <tr>
                                                        <td>{{ ($data->currentPage() - 1) * $data->perPage() + $index + 1 }}
                                                        </td>
                                                        <td>{{ $contact->name }}</td>
                                                        <td>{{ $contact->email }}</td>
                                                        <td>{{ $contact->mobile }}</td>
                                                        <td>{{ $contact->subject }}</td>
                                                        <td>{{ $contact->message }}</td>
                                                        <td>{{ $contact->created_at->format('d M Y') }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <!-- Pagination Links -->
                                        <div class="mt-3" style="display: flex; justify-content: center;">
                                            {{-- {{ $data->links() }} --}}
                                            @if ($data->lastPage() > 1)
                                                <div class="custom-pagination d-flex justify-content-center mt-3"
                                                    style="gap: 6px; flex-wrap: wrap;">
                                                    {{-- Previous Page Link --}}
                                                    @if ($data->onFirstPage())
                                                        <span class="px-3 py-1 border rounded text-muted">‹</span>
                                                    @else
                                                        <a href="{{ $data->previousPageUrl() }}"
                                                            class="px-3 py-1 border rounded text-dark text-decoration-none">‹</a>
                                                    @endif

                                                    {{-- Pagination Elements --}}
                                                    @for ($i = 1; $i <= $data->lastPage(); $i++)
                                                        @if ($i == $data->currentPage())
                                                            <span
                                                                class="px-3 py-1 border rounded bg-primary text-white">{{ $i }}</span>
                                                        @else
                                                            <a href="{{ $data->url($i) }}"
                                                                class="px-3 py-1 border rounded text-dark text-decoration-none">{{ $i }}</a>
                                                        @endif
                                                    @endfor

                                                    {{-- Next Page Link --}}
                                                    @if ($data->hasMorePages())
                                                        <a href="{{ $data->nextPageUrl() }}"
                                                            class="px-3 py-1 border rounded text-dark text-decoration-none">›</a>
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
