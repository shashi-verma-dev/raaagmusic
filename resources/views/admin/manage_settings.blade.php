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
                                    <a href="javascript: void(0);">Manage Settings</a>
                                </li>
                            </ol>
                        </div>
                        <h4 class="page-title">Manage Settings</h4>
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
                              <form action="{{ route('save-setting') }}" method="POST">
    @csrf
    <div class="row">
        <!-- Email 1 -->
        <div class="col-md-6 mb-3">
            <label for="email1" class="form-label">Email 1</label>
            <input type="email" name="email1" id="email1"
                class="form-control @error('email1') is-invalid @enderror"
                value="{{ old('email1', $setting->email1 ?? '') }}" required>
            @error('email1')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email 2 -->
        <div class="col-md-6 mb-3">
            <label for="email2" class="form-label">Email 2</label>
            <input type="email" name="email2" id="email2"
                class="form-control @error('email2') is-invalid @enderror"
                value="{{ old('email2', $setting->email2 ?? '') }}">
            @error('email2')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Number 1 -->
        <div class="col-md-6 mb-3">
            <label for="number1" class="form-label">Number 1</label>
            <input type="text" name="number1" id="number1"
                class="form-control @error('number1') is-invalid @enderror"
                value="{{ old('number1', $setting->number1 ?? '') }}" required>
            @error('number1')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Number 2 -->
        <div class="col-md-6 mb-3">
            <label for="number2" class="form-label">Number 2</label>
            <input type="text" name="number2" id="number2"
                class="form-control @error('number2') is-invalid @enderror"
                value="{{ old('number2', $setting->number2 ?? '') }}">
            @error('number2')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Address -->
        <div class="col-12 mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address"
                class="form-control @error('address') is-invalid @enderror" rows="3" required>{{ old('address', $setting->address ?? '') }}</textarea>
            @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Timing -->
        <div class="col-12 mb-3">
            <label for="timing" class="form-label">Timing</label>
            <input type="text" name="timing" id="timing"
                class="form-control @error('timing') is-invalid @enderror"
                value="{{ old('timing', $setting->timing ?? '') }}" required>
            @error('timing')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Social Links -->
        @php
            $socials = [
                'insta_link' => 'Instagram',
                'x_link' => 'X (Twitter)',
                'pinterest_link' => 'Pinterest',
                'fb_link' => 'Facebook',
                'linkedin_link' => 'LinkedIn',
            ];
        @endphp
        @foreach ($socials as $field => $label)
            <div class="col-md-6 mb-3">
                <label for="{{ $field }}" class="form-label">{{ $label }} Link</label>
                <input type="text" name="{{ $field }}" id="{{ $field }}"
                    class="form-control @error($field) is-invalid @enderror"
                    value="{{ old($field, $setting->$field ?? '') }}">
                @error($field)
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        @endforeach

        <!-- Submit Button -->
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Save Settings</button>
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
