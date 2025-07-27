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
                                <a href="javascript: void(0);">Manage Account</a>
                            </li>
                        </ol>
                    </div>
                    <h4 class="page-title">Manage Account</h4>
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
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <form action="{{ route('update-user-info') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="contact-form-item mb-25">
                                            <input type="text" class="form-control" name="name" placeholder="Your Name" value="{{ auth()->user()->name }}" required>

                                            @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <br> <br>
                                    <div class="col-12">
                                        <div class="contact-form-item mb-25">
                                            <input type="email" readonly class="form-control" name="email" placeholder="Your Email" value="{{ auth()->user()->email }}" required>

                                            @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <br> <br>
                                    <div class="col-12">
                                        <div class="contact-form-item mb-25">
                                            <input type="text" class="form-control" name="password" placeholder="Update Your Password (min character 4)">

                                            @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <br> <br>
                                    <div class="col-12">
                                        <div class="contact-form-item pt-10">
                                            <button type="submit" class="btn btn-primary">Submit Form</button>
                                        </div>
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


</main>
@endsection
