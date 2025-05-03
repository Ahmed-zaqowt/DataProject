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
    
    <!-- جدول المستخدمين -->
    <section class="table-container">
      <h2 class="table-title">جدول بيانات المستخدمين </h2>
      <br><br>
    <!-- عرض رسالة النجاح -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}

        </button>
    </div>
@endif
<a class="btn btn-primary" href="{{ route('DataProject.profiles.create') }}">Add Profile</a>
<br><br>
      <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
          
            </tr>
        </thead>
        <tbody>
          
            @foreach ($profiles as $profile)
                <tr>
                    <td>{{ $profile->id }}</td>
                    <td>{{ $profile->user->name }}</td>
                    <td>{{ $profile->user->email }}</td>
                    <td>{{ $profile->phone }}</td>
                    <td>{{ $profile->address }}</td>
                    <td>
                      <a href="{{route('DataProject.profiles.edit' , $profile->user_id)}}">Edit</a>
                      <br><br>
                      <form method="POST" action="{{ route('DataProject.category.delete', $profile->id) }}">
                        @csrf
                        @method('DELETE')  
                        <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

    </section>
    
    {{$profiles->links()}}
  </div>

</body>
</html>
