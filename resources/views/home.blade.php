<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة التسجيل والدخول</title>
    <link href="{{ asset('assets/css/main_0.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>مرحبًا بك في موقعنا</h1>
        <div class="button-container">
            <a href="{{ route('DataProject.profiles.index') }}"  class="btn login"> profiles</a>
            <a href="{{ route('DataProject.category.index') }}" class="btn register">categories </a>
            <a href="{{ route('DataProject.product.index') }}" class="btn aa">products</a>
        </div>
    </div>
</body>
</html>
