@if (Session::has('success'))    
    <div class="bs-toast toast bg-success fade show toast-placement-ex top-0 end-0 m-2" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <i class="bx bx-bell me-2"></i>
          <div class="me-auto fw-semibold">Success</div>
          <small>11 mins ago</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ Session::get('success') }}
        </div>
      </div>
@endif

