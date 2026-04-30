<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Edit Category</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Category Name</label>

            <input
                type="text"
                name="name"
                class="form-control"
                value="{{ old('name', $category->name) }}"
                required
            >
        </div>

        <button type="submit" class="btn btn-primary">
            Update Category
        </button>

        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
            Back
        </a>
    </form>

</div>

</body>
</html>