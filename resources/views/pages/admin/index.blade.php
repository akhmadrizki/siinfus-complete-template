<x-admin::layout title="Dashboard">

    <div class="row mt-4">
        <div class="col-lg-12">
          <div class="card h-100 p-3">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/ivancik.jpg');">
              <span class="mask bg-gradient-dark"></span>
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                <h5 class="text-white font-weight-bolder mb-4 pt-2">Welcome back</h5>
                <p class="text-white text-capitalize">{{ Auth::user()->name }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

</x-admin>
