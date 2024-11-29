<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <div class="dashboard-container">
        <h1>Admin Dashboard</h1>
        <div class="dashboard-grid">
            <a href="{{ route('customers.index') }}" class="dashboard-card">
                <div class="icon">&#128100;</div>
                <h2>Customers</h2>
            </a>
            <a href="{{ route('users.index') }}" class="dashboard-card">
                <div class="icon">&#128101;</div>
                <h2>Users</h2>
            </a>
            <a href="{{ route('product.index') }}" class="dashboard-card">
                <div class="icon">&#128717;</div>
                <h2>Products</h2>
            </a>
            <a href="{{ route('categories.index') }}" class="dashboard-card">
                <div class="icon">&#128200;</div>
                <h2>Categories</h2>
            </a>
        </div>
    </div>
</body>
</html>
