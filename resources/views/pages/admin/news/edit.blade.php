<x-admin::layout title="Create" header="Create">

<div class="row">
    <div class="col-12">
      <div class="card p-3">
        <form class="row g-3">
            <div class="col-md-12">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title">
            </div>
            <div class="col-md-12">
                <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">Category</label>
              <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
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
