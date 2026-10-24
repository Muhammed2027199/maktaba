
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'إدارة المكتبة')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background: #f5f7fb;
            color: #243047;
        }

        .navbar {
            background: #173b65;
        }

        .navbar-brand {
            font-weight: 800;
            color: #fff;
        }

        .navbar-brand:hover {
            color: #e4edff;
        }

        .page-heading {
            font-weight: 800;
            color: #173b65;
        }

        .main-card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 5px 25px rgba(23, 59, 101, .07);
        }

        .btn {
            border-radius: 8px;
        }

        .btn-primary {
            background: #245ba8;
            border-color: #245ba8;
        }

        .btn-primary:hover {
            background: #194783;
        }

        .form-control, .form-select {
            border-radius: 8px;
            padding: 11px 14px;
        }

        .form-control:focus {
            border-color: #7ba8e5;
            box-shadow: 0 0 0 .2rem rgba(36, 91, 168, .12);
        }

        .table thead th {
            background: #edf3fb;
            color: #173b65;
            white-space: nowrap;
        }

        .table td, .table th {
            padding: 14px 12px;
            vertical-align: middle;
        }

        .page-footer {
            color: #7c8798;
            font-size: 13px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('books.index') }}">
            📚 مكتبة الكتب
        </a>

        <div class="d-flex gap-2">
            <a href="{{ route('books.index') }}"
               class="btn btn-outline-light btn-sm">
                جميع الكتب
            </a>

            <a href="{{ route('books.create') }}"
               class="btn btn-light btn-sm">
                + إضافة كتاب
            </a>
        </div>
    </div>
</nav>

<main class="container py-5">

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close"
                    data-bs-dismiss="alert" aria-label="إغلاق"></button>
        </div>
    @endif

    @yield('content')

</main>

<footer class="text-center py-4 page-footer">
    نظام إدارة المكتبة © {{ date('Y') }}
    <br>
    تم تصميم وتطوير هذا التطبيق بواسطة قسم نظم المعلومات وقام بالتنفيذ الباش مهندس 
    <span class="fw-bold text-primary">Muhammed Ragab</span>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
