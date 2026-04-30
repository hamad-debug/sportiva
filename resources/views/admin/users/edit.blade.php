<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow p-4">

        <h3 class="mb-4">✏️ Edit User</h3>

        <form method="POST" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('PUT')

            <!-- NAME -->
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control"
                       value="{{ $user->name }}" required>
            </div>

            <!-- EMAIL -->
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control"
                       value="{{ $user->email }}" required>
            </div>

            <!-- ROLE -->
            <div class="mb-3">
                <label>Role</label>
                
                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                   
                </select>
            </div>

            <!-- BUTTONS -->
            <button class="btn btn-success">Update</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>

        </form>

    </div>

</div>

</body>
</html>