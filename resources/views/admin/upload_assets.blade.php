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
                                    <a href="javascript: void(0);">Upload Assets</a>
                                </li>
                            </ol>
                        </div>
                        <h4 class="page-title">Upload Assets</h4>
                    </div>
                </div>
            </div>

            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <!-- Portlet card -->
                    <div class="card">
                        <div class="card-body">
                            <div id="cardCollpase4" class="collapse show">

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                <form action="{{ route('image-assets-store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="mb-3 col-md-6">
                                            <label for="category_id">Category</label>
                                            <select name="category_id" id="category_id" class="form-control" required>
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $cat)
                                                    <option value="{{ $cat->id }}"
                                                        {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                                                        {{ $cat->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="name">Asset Name</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                value="{{ old('name') }}" required>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="stars">Stars (Rating 1-5)</label>
                                            <input type="number" name="stars" id="stars" class="form-control"
                                                min="1" max="5" value="{{ old('stars') }}" required>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="premium">Premium</label>
                                            <select name="premium" id="premium" class="form-control" required>
                                                <option value="0" {{ old('premium') == '0' ? 'selected' : '' }}>Free
                                                </option>
                                                <option value="1" {{ old('premium') == '1' ? 'selected' : '' }}>Premium
                                                </option>
                                            </select>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="og_price">Price (INR)</label>
                                            <input type="number" name="og_price" id="og_price" class="form-control"
                                                value="{{ old('og_price', 0) }}" min="0" required>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="thumbnail_image">Thumbnail Image (300px*300px)</label>
                                            <input type="file" name="thumbnail_image" id="thumbnail_image"
                                                class="form-control" required>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="org_file">Original File (image/other)</label>
                                            <input type="file" name="org_file" id="org_file" class="form-control"
                                                required>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="org_file_without_bg">Original File (Without Background)</label>
                                            <input type="file" name="org_file_without_bg" id="org_file_without_bg"
                                                class="form-control">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="resolution">Resolution (e.g. 1920x1080)</label>
                                            <input type="text" name="resolution" id="resolution" class="form-control"
                                                value="{{ old('resolution') }}" required>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="size">File Size (in KB/MB)</label>
                                            <input type="text" name="size" id="size" class="form-control"
                                                value="{{ old('size') }}" required>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="zip_file">Zip File (All Sizes)</label>
                                            <input type="file" name="zip_file" id="zip_file" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="size">Zip File Size (in KB/MB)</label>
                                            <input type="text" name="zip_file_size" id="zip_file_size"
                                                class="form-control" value="{{ old('zip_file_size') }}">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="status">Status</label>
                                            <select name="status" id="statussss" class="form-control" required>
                                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active
                                                </option>
                                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>
                                                    Inactive</option>
                                            </select>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="tags">Tags (comma-separated)</label>
                                            <textarea name="tags" id="tags" class="form-control" rows="1" required>{{ old('tags') }}</textarea>
                                        </div>

                                        <div class="mb-3 col-md-12">
                                            <label for="description">Description</label>
                                            <textarea name="description" id="description" class="form-control" rows="3" required>{{ old('description') }}</textarea>
                                        </div>

                                        <div class="mb-3 col-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>




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
