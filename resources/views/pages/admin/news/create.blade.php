<x-admin::layout title="Create" header="Create">

<div class="row">
    <div class="col-12">
      <div class="card p-3">
        <form action="{{ route('admin.news.store') }}" method="POST" class="row g-3">
            @csrf
            <div class="col-md-12">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') }}">

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-12">
                <textarea class="form-control" name="content" placeholder="Leave a comment here" style="height: 100px"></textarea>
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">Category</label>
              <select name="category_id" id="inputState" class="form-select">
                <option value="none" selected disabled>Choose...</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>

</x-admin>
