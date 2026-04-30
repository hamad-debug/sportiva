<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

<h2>Edit Product</h2>

<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Name</label>
    <input type="text" name="name" value="{{ $product->name }}"><br><br>

    <label>Price</label>
    <input type="number" name="price" value="{{ $product->price }}"><br><br>

    <label>Description</label>
    <textarea name="description">{{ $product->description }}</textarea><br><br>

    <label>Category</label>
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select><br><br>

    <label>Image</label><br>
    @if($product->image)
        <img src="{{ asset('uploads/'.$product->image) }}" width="80"><br>
    @endif
    <input type="file" name="image"><br><br>

<label>Stock</label>
<input type="number" name="stock" value="{{ $product->stock }}" min="0">
<br><br>
    <button type="submit">Update Product</button>
</form>

</body>
</html>