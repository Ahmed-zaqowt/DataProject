<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>جداول البيانات</title>
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>
<body>

  <div class="container">
    <h1 class="page-title">بيانات النظام</h1>
    
    <!-- جدول المنتجات -->
    <section class="table-container">
      <h2 class="table-title">جدول بيانات المنتجات </h2>
      <br><br>
      {{-- // DataProject/products/product --}}
    <!-- عرض رسالة النجاح -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}
        </button>
    </div>
    <br><br>
@endif
<a class="btn btn-primary" href="{{ route('DataProject.product.create') }}">Add Profile</a>
{{-- <button type="submit" class="btn btn-primary">Add Profile</button> --}}
<br><br>
      <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Desc</th>
                <th>Price</th>
                <th>Qun</th>
                <th>Action</th>
          
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name}}</td>
                    <td>{{ $product->desc }}</td>
                    <td>{{ $product->price}}</td>
                    <td>{{ $product->qun}}</td>
                    <td>
                      <a href="{{route('DataProject.product.edit' , $product->id)}}">Edit</a>
                      <br><br>
                      <form method="POST" action="{{ route('DataProject.product.delete', $product->id) }}">
                        @csrf
                        @method('DELETE')  
                        {{-- <a href="{{route('DataProject.profiles.delete' , $profile->user_id)}}">Delete</a> --}}
                        <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

    </section>
    
    {{$products->links()}}
  </div>

</body>
</html>
