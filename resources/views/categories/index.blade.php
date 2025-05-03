<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>جداول البيانات</title>
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>
<body>
      {{-- categories  category --}}
  <div class="container">
    <h1 class="page-title">بيانات النظام</h1>
    
    <!-- جدول المستخدمين -->
    <section class="table-container">
      <h2 class="table-title">جدول بيانات المستخدمين </h2>
      <br><br>
      @if(session('success'))
      <div class="alert alert-success">
          <strong>Success!</strong> {{ session('success') }}
      </div>
  @endif

<br><br>
<a class="btn btn-primary" href="{{ route('DataProject.category.create') }}">Add category</a>
{{-- <button type="submit" class="btn btn-primary">Add category</button> --}}
<br><br>
      <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                      <a href="{{route('DataProject.category.edit' , $category->id)}}">Edit</a>
                      <br><br>
                      <form method="POST" action="{{ route('DataProject.category.delete', $category->id) }}">
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
    
    {{$categories->links()}}
  </div>

</body>
</html>
