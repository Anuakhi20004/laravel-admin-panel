<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            margin: 20px;
        }
        .dashboard-title {
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="dashboard-title">Admin Dashboard</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-primary">
                    <div class="card-header">Total Users</div>
                    <div class="card-body">
                        <h5 class="card-title">150</h5>
                        <p class="card-text">Total number of registered users.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success">
                    <div class="card-header">Active Users</div>
                    <div class="card-body">
                        <h5 class="card-title">100</h5>
                        <p class="card-text">Users currently online.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger">
                    <div class="card-header">Banned Users</div>
                    <div class="card-body">
                        <h5 class="card-title">5</h5>
                        <p class="card-text">Users who are banned.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning">
                    <div class="card-header">Total Posts</div>
                    <div class="card-body">
                        <h5 class="card-title">300</h5>
                        <p class="card-text">Number of posts in the system.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>