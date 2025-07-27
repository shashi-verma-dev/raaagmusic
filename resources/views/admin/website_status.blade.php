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
                                            <a href="javascript: void(0);">Website Status</a>
                                        </li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Website Status</h4>
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
                                    {{-- <h4 class="header-title mb-0">Quick Links</h4> --}}
                                    <div id="cardCollpase4" class="collapse show">
                                        <div class="table-responsive pt-3">
                                           <div class="tab-pane fade show active" id="website" role="tabpanel"
                                        style="padding:0px 50px;">
                                     

                                        {{-- <h5>Manage Website Status </h5> --}}
                                        <form action="{{ route('updateWebsiteStatus') }}" method="POST"
                                            id="websiteStatusForm" style="width:50%;">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="" class="" ><b> Website Status</b></label>
                                                <select name="status" id="statuss"  class="form-control">
                                                    <option value="1"
                                                        {{ $Website_status->status == 1 ? 'selected' : '' }}>Active</option>
                                                    <option value="0"
                                                        {{ $Website_status->status == 0 ? 'selected' : '' }}>Deactive
                                                    </option>

                                                </select>
                                            </div>

                                            <div class="mb-3" id="deactiveNoteBox"
                                                style="display: {{ $Website_status->status == 0 ? 'block' : 'none' }};">
                                                <label for="" class=""><b>Flash Message</b></label>
                                                <textarea name="deactive_note" id="deactive_note" rows="3" class="form-control">{{ $Website_status->note }}</textarea>
                                            </div>


                                            <button type="submit" class="btn btn-primary">Update Status</button>
                                        </form>


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

             <script>
        document.getElementById('statuss').addEventListener('change', function() {
            const noteBox = document.getElementById('deactiveNoteBox');
            if (this.value == '0') {
                noteBox.style.display = 'block';
            } else {
                noteBox.style.display = 'none';
            }
        });
    </script>
@endsection
