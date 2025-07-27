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
                                    <a href="javascript: void(0);">Manage Image Categories</a>
                                </li>
                            </ol>
                        </div>
                        <h4 class="page-title">Manage Image Categories</h4>
                    </div>
                </div>
            </div>

            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <!-- Portlet card -->
                    <div class="card">
                        <div class="card-body">


                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <h4 class="header-title mb-0"><button type="button" class="btn btn-primary btn-sm"
                                    data-bs-toggle="modal" data-bs-target="#testimonialModal">
                                    Add New
                                </button></h4>

                            <div id="cardCollpase4" class="collapse show">
                                <div class="table-responsive pt-3">
                                    <table class="table table-centered  table-borderless mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Icon</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $index => $cat)
                                                <tr>
                                                    <td>{{ ++$index }}
                                                    </td>
                                                    <td>{{ $cat->name }}</td>
                                                    <td>
                                                        @if ($cat->icon)
                                                            <img src="{{ asset('public/' . $cat->icon) }}" alt="icon"
                                                                width="25" height="25" class="rounded">
                                                        @else
                                                            <span class="text-muted">No Icon</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($cat->status == 1)
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-danger">Inactive</span>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        {{-- <a href="#" class="btn btn-primary btn-sm editBtn"
                                                            data-id="{{ $cat->id }}" data-name="{{ $cat->name }}"
                                                            data-status="{{ $cat->status }}"
                                                              data-icon="{{ $cat->icon }}"
                                                               data-bs-toggle="modal"
                                                            data-bs-target="#editCategoryModal"> {{$cat->icon}} Edit</a> --}}

                                                            <a href="#" class="btn btn-primary btn-sm editBtn"
    data-id="{{ $cat->id }}" 
    data-name="{{ $cat->name }}"
    data-status="{{ $cat->status }}"
    data-iconn="{{ $cat->icon }}"
    data-bs-toggle="modal"
    data-bs-target="#editCategoryModal">Edit</a>


                                                        <a href="{{ route('del-image-category', ['id' => $cat->id]) }}"
                                                            class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are Your Sure You Want To Delete..')">
                                                            Delete </a>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                                <!-- .table-responsive -->
                            </div>



                            <!-- Modal -->
                            <div class="modal fade" id="testimonialModal" tabindex="-1"
                                aria-labelledby="testimonialModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <!-- Large modal for better spacing -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="testimonialModalLabel">Add Image Category</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('image-category-store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label>Name:</label>
                                                        <input type="text" name="name" class="form-control"
                                                            value="{{ old('name') }}" required>
                                                    </div>

                                                    <div class="mb-3 col-md-6">
                                                        <label>Upload Icon (300px * 220px):</label>
                                                        <input type="file" name="icon" class="form-control"
                                                            accept="image/*" required>
                                                    </div>

                                                    <div class="mb-3 col-md-6">
                                                        <label>Status:</label>
                                                        <select name="status" class="form-control">
                                                            <option value="1"
                                                                {{ old('status') == '1' ? 'selected' : '' }}>Active
                                                            </option>
                                                            <option value="0"
                                                                {{ old('status') == '0' ? 'selected' : '' }}>Inactive
                                                            </option>
                                                        </select>
                                                    </div>




                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Add Image
                                                        Category</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Category Modal -->
                            <div class="modal fade" id="editCategoryModal" tabindex="-1"
                                aria-labelledby="editCategoryModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{ route('update-image-category') }}" method="POST"  enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" id="edit_id">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Image Category</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label>Name:</label>
                                                    <input type="text" name="name" id="edit_name"
                                                        class="form-control" required>
                                                </div>


                                                <div class="mb-3">
                                                    <label>Update Icon (300px * 220px):</label>
                                                    <input type="file" name="icon" class="form-control"
                                                        accept="image/*" >
                                                    <div id="icon_preview" class="mt-2"></div>
                                                    <!-- Display existing icon -->

                                                </div>

                                                <div class="mb-3">
                                                    <label>Status:</label>
                                                    <select name="status" id="edit_status" class="form-control"
                                                        required>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </div>
                                    </form>
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

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.editBtn').forEach(button => {
                button.addEventListener('click', function() {
                    document.getElementById('edit_id').value = this.dataset.id;
                    document.getElementById('edit_name').value = this.dataset.name;
                    document.getElementById('edit_status').value = this.dataset.status;
                });
            });
        });
    </script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.editBtn').forEach(button => {
                button.addEventListener('click', function() {
                    document.getElementById('edit_id').value = this.dataset.id;
                    document.getElementById('edit_name').value = this.dataset.name;
                    document.getElementById('edit_status').value = this.dataset.status;

                    // Show existing icon
                    const iconUrl = this.dataset.iconn;
                    const previewDiv = document.getElementById('icon_preview');
                    previewDiv.innerHTML = iconUrl ?
                        `<img src="public/${iconUrl}" alt="Icon" width="50" height="50" class="rounded border">` :
                        `<span class="text-muted">No Icon</span>`;
                });
            });
        });
    </script>


@endsection
