@extends('layouts.app')


@section('content')

<div class="d-flex justify-content-end mb-2 ">
    <a href="{{ route('categories.create') }}" class="btn btn-success">Add Category</a>
</div>

<div class="card card-default">
    <div class="card-header">
        Categories
    </div>
    <div class="card-body">
      @if($categories->count() > 0)
        <table class="table">
            <thead>
                <th>Name</th>
                <th>Posts count</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($categories as $categorie)
                    <tr>
                        <td>
                            {{ $categorie->name }}
                        </td>
                        <td>
                            {{ $categorie->posts->count() }}
                        </td>
                        <td>
                            <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-info btn-sm">
                                Edit
                            </a>

                            <button class="btn btn-danger btn-sm" onclick="handleDelete({{ $categorie->id }})">Delete</button>
			
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
<!-- Modal -->
<form action="" method="post" id="deleteCategoryForm">
  @csrf
  @method('DELETE')
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center text-bold">
          Are you  sure you want to delete this category ?
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
        <button type="submit" class="btn btn-danger">Yes, Delete</button>
      </div>
    </div>
  </div>
</div>
</form>
      @else 
        <h3 class="text-center">No Categories Yet.</h3>
      @endif

    </div>
</div>

@section('scripts')
<script>
  function handleDelete(id) {
    var form = document.getElementById('deleteCategoryForm')
    form.action = '/categories/' + id
    $('#deleteModal').modal('show')
  }
</script>
@endsection
    
@endsection
