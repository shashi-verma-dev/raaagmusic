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
                                <form method="GET" action="{{ route('users-list') }}" class="d-flex align-items-center gap-2">
                                    <input type="text" name="query" class="form-control me-2" placeholder="Search by name" value="{{ request('query') }}" required>
                                    <button type="submit" class="btn btn-success me-2">Search</button>
                                    <a href="{{ route('users-list') }}" class="btn btn-danger">Clear</a>
                                </form>
                            </div>
                        </div>
                        <div id="cardCollpase4" class="collapse show">
                            <div class="table-responsive pt-3">
                                <table class="table table-centered  table-borderless mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>#</th>
                                            <th> Name</th>
                                            <th>Email</th>
                                            <th>Wallet Amount</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($data->count())
                                        @foreach ($data as $index => $user_data)
                                        <tr>
                                            <td>{{ ($data->currentPage() - 1) * $data->perPage() + $index + 1 }}
                                            </td>
                                            <td>{{ $user_data->name }}</td>
                                            <td>{{ $user_data->email }}</td>
                                            <td>{{ $user_data->wallet_amount }}</td>
                                            <td>{{ $user_data->created_at->format('d M Y, h:i A') }}</td>

                                            <td>
                                                <!-- Add Amount Button -->
                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addAmountModal" data-userid="{{ $user_data->id }}">
                                                    Add Amount
                                                </button>


                                                <a href="{{route('del-user',['id'=>$user_data->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are Your Sure You Want To Delete..')">
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

                    <!-- Add Amount Modal -->
                    <div class="modal fade" id="addAmountModal" tabindex="-1" aria-labelledby="addAmountModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form method="POST" action="{{ route('add.wallet.amount') }}">
                                @csrf
                                <input type="hidden" name="user_id" id="modal_user_id">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Wallet Amount</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="amount" class="form-label">Amount</label>
                                            <input type="number" class="form-control" name="amount" required min="1">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Add Amount</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- end card-->
            </div>
            <!-- end col-->
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>

<script>
    var addAmountModal = document.getElementById('addAmountModal');
    addAmountModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var userId = button.getAttribute('data-userid');
        var userIdInput = addAmountModal.querySelector('#modal_user_id');
        userIdInput.value = userId;
    });

</script>

@endsection
