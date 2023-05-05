<x-admin::layout title="Category" header="Category">

@if (session('message'))
<div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
    <span class="alert-text"> {{ session('message') }} </span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0 d-flex justify-content-between">
          <h6>Category List</h6>
          <a href="{{ route('admin.news.create') }}" class="btn bg-gradient-primary btn-sm">Add Category</a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <p class="text-xs font-weight-bold mb-0">{{ $category->name }}</p>
                            </div>
                        </td>
                        <td class="align-middle">
                            <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                            </a>
                            |

                            <a href="#" class="text-danger font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#delete-{{ $category->id }}">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
              </tbody>

            </table>

            <nav aria-label="...">
                <ul class="pagination pagination-primary justify-content-end">
                    {{ $categories->links() }}
                </ul>
            </nav>


          </div>
        </div>
      </div>
    </div>
  </div>


    @foreach ($categories as $item)
    <x-admin::modal id="delete-{{ $item->id }}">
      <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
          <div class="modal-content">
          <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default">Are you sure want to delete this {{ $item->name }}?</h6>
              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">
              <p>
                  Delete this category will permanently remove the data from our database.
              </p>
          </div>
          <div class="modal-footer">
              <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn bg-gradient-primary">Delete</button>
              </form>
              <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
          </div>
          </div>
      </div>
    </x-admin::modal>
    @endforeach

</x-admin>
