<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html>
<head>
    @include('admin.header')
  </head>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        @include('admin.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          @include('admin.topbar')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">

                @if(session()->has('noted'))
                    <div class="alert alert-success text-white">
                        <button type="button" class="close text-black" role="alert" data-dismiss="alert">X</button>

                        {{session()->get('noted')}}
                    </div>

                @endif

                {{-- @if(session()->has('message_deleted'))
                  <div class="alert alert-danger text-white">
                    <button type="button" class="close text-black" role="alert" data-dismiss="alert">X</button>

                    {{session()->get('message_deleted')}}
                  </div>
                @endif --}}

                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <h5 class="card-header">Documents</h5>
                    <div class="table-responsive text-nowrap">
                      <table class="table">
                        <thead class="table-light">
                          <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          @foreach ($docum as $docums)
                          <tr>
                            <td>{{$docums->name}}<i class="fab fa-angular fa-lg text-danger me-3"></i> <strong></strong></td>
                            <td>{{$docums->file}}</td>
                            <td>
                                {{-- <a href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a> --}}
                                <a href={{"delete_docs/" .$docums['id']}}><i class="bx bx-trash me-1"></i> Delete</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4 order-1">
                    <div class="card p-3">
                        <h2>Add Document</h2>
                        <form action="{{url('upload_docs')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="row">
                              <div class="col-md-12 pt-4">
                                  <div class="input-group">
                                      <label class="input-group-text" for="inputGroupFile02">Name</label>
                                      <input type="text" name="name" class="form-control" required/>
                                  </div>
                              </div>
                              
                              <div class="col-md-12 pt-4">
                                <div class="input-group">
                                    {{-- <label class="input-group-text" for="inputGroupFile02"></label><br> --}}
                                    <input type="file" name="file" class="form-control" id="inputGroupFile" required />
                                 </div>
                              </div>
                              <div class="col-md-6">
                                <div class="input-group mt-3">
                                  <button type="submit" class="btn btn-primary bg-primary">Save</button>
                                </div>
                              </div>
                            </div>
                        </form>
                    </div>
                  </div>
                
              </div>
              
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('admin.footer')
            <!-- / Footer -->

            {{-- <div class="content-backdrop fade"></div> --}}
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


<!-- Core JS -->
    <!-- build:js admin/assets/vendor/js/core.js -->
    <script src="../admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="../admin/assets/vendor/js/bootstrap.js"></script>
    <script src="../admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../admin/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../admin/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
