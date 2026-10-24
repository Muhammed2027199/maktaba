
@extends('books.layouts.app')

@section('title', 'تعديل الكتاب')

@section('content')

<div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
    <div>
        <h2 class="page-heading mb-1">تعديل بيانات الكتاب</h2>
        <p class="text-secondary mb-0">
            يمكنك تعديل بيانات الكتاب: {{ $book->name }}
        </p>
    </div>

    <a href="{{ route('books.index') }}" class="btn btn-light border">
        العودة إلى الكتب
    </a>
</div>

<div class="card main-card">
    <div class="card-body p-4 p-md-5">

        <form action="{{ route('books.update', $book) }}" method="POST">
            @csrf
            @method('PUT')

            @include('books.form', [
                'book' => $book,
                'buttonText' => 'حفظ التعديلات'
            ])

        </form>

    </div>
</div>

@endsection
