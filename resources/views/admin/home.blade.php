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
                                            <a href="javascript: void(0);">Dashboards</a>
                                        </li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Admin Dashboard</h4>
                            </div>
                        </div>
                    </div>

                    <!-- end row -->
                    <div class="row">
                        <div class="col-12">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-widgets">
                                        <a href="javascript: void(0);" data-bs-toggle="reload"><i
                                                class="mdi mdi-refresh"></i></a>
                                        <a data-bs-toggle="collapse" href="#cardCollpase4" role="button"
                                            aria-expanded="false" aria-controls="cardCollpase4"><i
                                                class="mdi mdi-minus"></i></a>
                                        <a href="javascript: void(0);" data-bs-toggle="remove"><i
                                                class="mdi mdi-close"></i></a>
                                    </div>
                                    <h4 class="header-title mb-0">Quick Links</h4>
                                    <div id="cardCollpase4" class="collapse show">
                                        <div class="table-responsive pt-3">
                                            <!-- <table class="table table-centered table-nowrap table-borderless mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Project Name</th>
                                                        <th>Start Date</th>
                                                        <th>Due Date</th>
                                                        <th>Team</th>
                                                        <th>Status</th>
                                                        <th>Clients</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>App design and development</td>
                                                        <td>Jan 03, 2015</td>
                                                        <td>Oct 12, 2018</td>
                                                        <td id="tooltip-container">
                                                            <div class="avatar-group">
                                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                                    data-bs-container="#tooltip-container"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Mat Helme">
                                                                    <img src="ubold/layouts/modern/assets/images/users/user-1.jpg"
                                                                        class="rounded-circle avatar-xs" alt="friend" />
                                                                </a>
                                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                                    data-bs-container="#tooltip-container"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Michael Zenaty">
                                                                    <img src="ubold/layouts/modern/assets/images/users/user-2.jpg"
                                                                        class="rounded-circle avatar-xs" alt="friend" />
                                                                </a>
                                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                                    data-bs-container="#tooltip-container"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="James Anderson">
                                                                    <img src="ubold/layouts/modern/assets/images/users/user-3.jpg"
                                                                        class="rounded-circle avatar-xs" alt="friend" />
                                                                </a>
                                                                <a href="javascript: void(0);" class="avatar-group-item"
                                                                    data-bs-container="#tooltip-container"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Username">
                                                                    <img src="ubold/layouts/modern/assets/images/users/user-5.jpg"
                                                                        class="rounded-circle avatar-xs" alt="friend" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-soft-info text-info p-1">Work in
                                                                Progress</span>
                                                        </td>
                                                        <td>Halette Boivin</td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table> -->
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
