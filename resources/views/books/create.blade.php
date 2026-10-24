
@extends('books.layouts.app')

@section('title', 'إضافة كتاب جديد')

@section('content')

<div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
    <div>
        <h2 class="page-heading mb-1">إضافة كتاب جديد</h2>
        <p class="text-secondary mb-0">
            أضف كتابًا جديدًا إلى مكتبتك وسجّل بياناته.
        </p>
    </div>

    <a href="{{ route('books.index') }}" class="btn btn-light border">
        العودة إلى الكتب
    </a>
</div>

<div class="card main-card">
    <div class="card-body p-4 p-md-5">

        <form action="{{ route('books.store') }}" method="POST">
            @csrf

            @include('books.form', [
                'buttonText' => 'حفظ الكتاب'
            ])

        </form>

    </div>
</div>

@endsection
