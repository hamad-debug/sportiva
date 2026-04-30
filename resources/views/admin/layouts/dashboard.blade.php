<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sportiva Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>
        body { margin:0; background:#f1f5f9; }

        .sidebar {
            width:240px;
            height:100vh;
            position:fixed;
            background:#0f172a;
            color:white;
            padding:20px;
        }

        .sidebar a {
            display:block;
            color:#cbd5f5;
            padding:10px;
            border-radius:8px;
            margin-bottom:10px;
            text-decoration:none;
            cursor:pointer;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background:#22c55e;
            color:white;
        }

        .main {
            margin-left:240px;
            padding:20px;
        }

        .topbar {
            background:white;
            padding:15px 20px;
            border-radius:10px;
            margin-bottom:20px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .admin-center {
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            flex:1;
        }

        .section { display:none; }
        .section.active { display:block; }

        .product-img {
            width:50px;
            height:50px;
            object-fit:cover;
            border-radius:8px;
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <div class="text-center mb-4">
        <h4 class="text-success fw-bold">⚽ Sportiva</h4>
        <small class="text-white-50">Admin Panel</small>
    </div>

    <hr class="text-white-50">

    <a onclick="showSection('products')" class="active" id="productsTab">
        <i class="fa fa-box"></i> Products
    </a>

    <a onclick="showSection('categories')" id="categoriesTab">
        <i class="fa fa-list"></i> Categories
    </a>

    <a onclick="showSection('users')" id="usersTab">
        <i class="fa fa-users"></i> Users
    </a>

    <a onclick="showSection('orders')" id="ordersTab">
        <i class="fa fa-shopping-cart"></i> Orders
    </a>

</div>

<!-- MAIN -->
<div class="main">

    <!-- TOPBAR -->
    <div class="topbar">

        <div>
            <h5 class="m-0">Admin Dashboard</h5>
        </div>

        <div class="admin-center">
            <i class="fa fa-user-circle fa-2x text-success"></i>
            <div class="fw-bold">{{ auth()->user()->name }}</div>
            <small class="text-muted">{{ auth()->user()->role ?? 'Admin' }}</small>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-dark btn-sm">Logout</button>
        </form>

    </div>

    <!-- PRODUCTS -->
    <div id="products" class="section active">

        <div class="d-flex justify-content-between mb-3">
            <h4>📦 Products</h4>
            <a href="{{ route('products.create') }}" class="btn btn-success">+ Add Product</a>
        </div>

        <table class="table table-hover bg-white text-center">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @forelse($products as $p)
                <tr>
                    <td>{{ $p->id }}</td>

                    <td>
                        @if($p->image)
                            <img src="{{ asset('uploads/'.$p->image) }}" class="product-img">
                        @endif
                    </td>

                    <td>{{ $p->name }}</td>
                    <td>Rs. {{ $p->price }}</td>
                    <td>{{ $p->description }}</td>
                    <td>{{ $p->stock ?? 'N/A' }}</td>

                    <td>
                        <a href="{{ route('products.edit', $p->id) }}"
                           class="btn btn-sm btn-success me-2">Edit</a>

                        <form action="{{ route('products.destroy', $p->id) }}"
                              method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Delete product?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7">No products found</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <!-- CATEGORIES -->
    <div id="categories" class="section">

        <div class="d-flex justify-content-between mb-3">
            <h4>📂 Categories</h4>
            <a href="{{ route('categories.create') }}" class="btn btn-success">+ Add Category</a>
        </div>

        <table class="table table-hover bg-white text-center">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @forelse($categories as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>

                    <td>
                        <a href="{{ route('categories.edit', $c->id) }}"
                           class="btn btn-sm btn-success me-2">Edit</a>

                        <form action="{{ route('categories.destroy', $c->id) }}"
                              method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Delete this category?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="3">No categories</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <!-- USERS -->
    <div id="users" class="section">

        <h4>👤 Users</h4>

        <table class="table table-hover bg-white text-center">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @forelse($users as $u)
                <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->role }}</td>

                    <td>
                        @if($u->role !== 'admin')

                            <a href="{{ route('users.edit', $u->id) }}"
                               class="btn btn-sm btn-success me-2">Edit</a>

                            <form action="{{ route('users.destroy', $u->id) }}"
                                  method="POST"
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Delete this user?')">
                                    Delete
                                </button>
                            </form>

                        @else
                            <span class="badge bg-dark">Protected Admin</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">No users</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <!-- ORDERS -->
    <div id="orders" class="section">

        <h4>📦 Orders</h4>

        @forelse($orders as $o)
            <div class="card p-3 mb-3">
                <strong>Order #{{ $o->id }}</strong><br>
                User: {{ $o->user->name ?? 'N/A' }} <br>
                Total: Rs. {{ $o->total_price }}
            </div>
        @empty
            <p>No orders found</p>
        @endforelse

    </div>

</div>

<script>
function showSection(section) {
    document.querySelectorAll('.section').forEach(s => s.classList.remove('active'));
    document.getElementById(section).classList.add('active');

    document.querySelectorAll('.sidebar a').forEach(a => a.classList.remove('active'));
    document.getElementById(section + 'Tab').classList.add('active');
}
</script>

</body>
</html>