
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
<div class="container">
    <h1>Create New Category</h1>

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  {{-- // DataProject/products/product --}}
    <!-- Form for creating a new category -->
    <form method="POST" action="{{ route('DataProject.product.add') }}">
        @csrf

        <div class="form-group">
            <label for="name">product Name</label>
            <input type="text" name="name" id="name" class="form-control"  required>
        </div>
        <div class="form-group">
            <label for="name">product Desc</label>
            <input type="text" name="desc" id="desc" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">product Price</label>
            <input type="text" name="price" id="Price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">product Qun</label>
            <input type="text" name="qun" id="qun" class="form-control"  required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Create product</button>
    </form>

    <a href="{{ route('DataProject.product.index') }}" class="btn btn-secondary mt-3">Back to products </a>
</div>

   <!-- Add Bootstrap JS and dependencies -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>