<!DOCTYPE html>
<html>
<head>
    @include('admin.header')
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

                @if(session()->has('message'))
                    <div class="alert alert-success text-white">
                        <button type="button" class="close text-black" role="alert" data-dismiss="alert">X</button>

                        {{session()->get('message')}}
                    </div>

                @endif

                @if(session()->has('message_deleted'))
                  <div class="alert alert-danger text-white">
                    <button type="button" class="close text-black" role="alert" data-dismiss="alert">X</button>

                    {{session()->get('message_deleted')}}
                  </div>
                @endif

                <div class="col coll-md-5 col-lg-5 mb-4 order-0">
                  <div class="card">
                    <h5 class="card-header">Light Table head</h5>
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
                          @foreach ($trend as $trends)
                          <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{mb_strimwidth($trends->title, 0, 20, '...')}}</strong></td>
                            <td>{{$trends->category}}</td>
                            <td>
                                <a href="{{route('edit_news', ['trend' => $trends->id])}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a href={{"delete_trends/" .$trends['id']}}><i class="bx bx-trash me-1"></i> Delete</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col coll-md-7 col-lg-7 mb-4 order-1">
                    <div class="card p-3">
                      @if(Session::has('error'))
                      <p class="alert alert-danger">{{ Session::get('error') }}</p>
                      @endif
                      @if(Session::has('success'))
                      <p class="alert alert-success">{{ Session::get('success') }}</p>
                      @endif
                        <form action="{{ !isset($edit_trend) ? url('upload_trends') : url('edit_news') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="row">
                              @if(isset($edit_trend))
                                <input type="hidden" name="id" value="{{$edit_trend->id}}">
                              @endif
                              <div class="col-md-12 pt-4">
                                  <div class="input-group">
                                      <label class="input-group-text" for="inputGroupFile02">Title</label>
                                      <input type="text" name="title" class="form-control" id="inputGroupFile02" value="{{isset($edit_trend) ? $edit_trend->title : ''}}" required />
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="input-group pt-4 mb-3">
                                      <label class="input-group-text" for="inputGroupFile02">Category</label>
                                      <input type="text" name="category" class="form-control" id="inputGroupFile02" value="{{isset($edit_trend) ? $edit_trend->category : ''}}" required/>
                                  </div>
                              </div>
                              
                              <div class="col-md-12 mt-4">
                                  <div class="input-group input-group-merge speech-to-text mb-3">
                                    <textarea name="writeup" id="summernote" value="{{isset($edit_trend) ? $edit_trend->wriiteup : ''}}" required></textarea>
                                  </div>
                              </div>
                              @if (!isset($edit_trend))
                              <div class="col-md-12 pt-4">
                                <div class="input-group mb-3">
                                  <label for="photo">
                                    <i class="bx bx-image-alt"></i>
                                    <span>Upload Image</span>
                                    <input type="file" name="photo" class="form-control mt-3" id="photo"required />
                                  </label>
                                 </div>
                              </div>
                              @endif
                              <div class="">
                                <div class="input-group mt-3 d-flex justify-content-center">
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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

    {{-- summernote links --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#summernote').summernote({
          height: 200,
        });
      });
    </script>
  </body>
</html>
