<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>

<h2>Add Product</h2>

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Name</label>
    <input type="text" name="name"><br><br>

    <label>Price</label>
    <input type="number" name="price"><br><br>

    <label>Description</label>
    <textarea name="description"></textarea><br><br>

    <label>Category</label>
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach
    </select><br><br>
<label>Stock</label>
<input type="number"
       name="stock"
       class="form-control"
       value="{{ old('stock', $product->stock ?? 0) }}"
       min="0">
<br><br>
    <label>Image</label>
    <input type="file" name="image"><br><br>

    <button type="submit">Save Product</button>
</form>

</body>
</html>