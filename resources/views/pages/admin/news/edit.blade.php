<x-admin::layout title="Create" header="Create">

<div class="row">
    <div class="col-12">
      <div class="card p-3">
        <form method="POST" action="{{ route('admin.news.update', $news->id) }}" class="row g-3">
            @csrf
            @method('PUT')

            <img src="{{ asset('storage/images/news/' . $news->image) }}">

            <div class="col-md-12">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" value="{{ $news->title }}" class="form-control" id="title">
            </div>
            <div class="col-md-12">
                <textarea class="form-control" name="content" placeholder="Leave a comment here" style="height: 100px">{{ $news->content }}</textarea>
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">Category</label>
              <select name="category_id" id="inputState" class="form-select">
                <option value="none" disabled>Choose...</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if($news->category_id == $category->id) selected @endif>
                        {{ $category->name }}
                    </option>
                @endforeach
              </select>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
      </div>
    </div>
  </div>

</x-admin>
