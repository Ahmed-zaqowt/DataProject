<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Edit </title>
    <!-- Add Bootstrap CSS for styling -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/main_1.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Add Profile</h2>
        <form method="POST" action="{{ route('DataProject.profiles.add') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Profile</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
