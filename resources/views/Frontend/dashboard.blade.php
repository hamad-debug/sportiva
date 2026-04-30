@extends('layouts.app')

@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: #f4f6f9;
}

.dashboard-container {
    display: flex;
    min-height: 100vh;
}

/* Sidebar */
.sidebar {
    width: 260px;
    background: #111;
    color: white;
    padding: 20px;
}

.logo {
    text-align: center;
    margin-bottom: 30px;
    font-size: 28px;
    font-weight: bold;
    color: #ff4d4d;
}

.sidebar ul {
    list-style: none;
    padding-left: 0;
}

.sidebar ul li {
    margin: 12px 0;
}

.sidebar ul li a,
.sidebar ul li button {
    width: 100%;
    display: block;
    text-decoration: none;
    background: #222;
    color: white;
    padding: 14px 16px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 15px;
    text-align: left;
    transition: 0.3s;
}

.sidebar ul li a:hover,
.sidebar ul li button:hover {
    background: #ff4d4d;
}

.sidebar ul li i {
    margin-right: 10px;
}

/* Main */
.main {
    flex: 1;
    padding: 30px;
}

.main h1 {
    margin-bottom: 25px;
}

/* Cards */
.cards {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.card-box {
    background: white;
    padding: 25px;
    flex: 1;
    min-width: 220px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    text-align: center;
}

.card-box h3 {
    margin-bottom: 10px;
    color: #333;
}

.card-box p {
    font-size: 30px;
    font-weight: bold;
    color: #ff4d4d;
}

/* Sections */
.section {
    margin-top: 35px;
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.08);
}

.section h2 {
    margin-bottom: 18px;
}

input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 8px;
}

.update-btn {
    background: #ff4d4d;
    color: white;
    border: none;
    padding: 12px 25px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
}

.update-btn:hover {
    background: #e63c3c;
}

.order-item {
    padding: 12px 0;
    border-bottom: 1px solid #eee;
}
</style>

<div class="dashboard-container">

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">Sportiva</div>

        <ul>
            <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a href="#profile"><i class="fa fa-user"></i> My Profile</a></li>
            <li><a href="#orders"><i class="fa fa-box"></i> Orders</a></li>
            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
            <li><a href="#"><i class="fa fa-shopping-cart"></i> Cart</a></li>

            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">
                        <i class="fa fa-sign-out"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main">

        <h1>Welcome {{ auth()->user()->name ?? 'User' }} 👋</h1>

        <!-- Stats -->
        <div class="cards">
            <div class="card-box">
                <h3>Total Orders</h3>
                <p>12</p>
            </div>

            <div class="card-box">
                <h3>Wishlist</h3>
                <p>5</p>
            </div>

            <div class="card-box">
                <h3>Cart Items</h3>
                <p>3</p>
            </div>
        </div>

        <!-- Profile -->
        <div class="section" id="profile">
            <h2>My Profile</h2>

            <form>
                <input type="text" value="{{ auth()->user()->name ?? '' }}" placeholder="Full Name">
                <input type="email" value="{{ auth()->user()->email ?? '' }}" placeholder="Email Address">
                <input type="text" placeholder="Phone Number">

                <button type="submit" class="update-btn">Update Profile</button>
            </form>
        </div>

        <!-- Recent Orders -->
        <div class="section" id="orders">
            <h2>Recent Orders</h2>

            <div class="order-item">
                Order #1001 - Running Shoes - <strong>Delivered</strong>
            </div>

            <div class="order-item">
                Order #1002 - Football Jersey - <strong>Pending</strong>
            </div>

            <div class="order-item">
                Order #1003 - Sports Watch - <strong>Shipped</strong>
            </div>
        </div>

    </div>

</div>

@endsection
