
@extends('books.layouts.app')

@section('title', 'تفاصيل الكتاب')

@section('content')

<div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
    <div>
        <h2 class="page-heading mb-1">تفاصيل الكتاب</h2>
        <p class="text-secondary mb-0">عرض جميع بيانات الكتاب.</p>
    </div>

    <a href="{{ route('books.index') }}" class="btn btn-light border">
        العودة إلى الكتب
    </a>
</div>

<div class="card main-card">
    <div class="card-body p-4 p-md-5">

        <div class="text-center mb-4">
            <div class="fs-1 mb-2">📖</div>
            <h3 class="fw-bold">{{ $book->name }}</h3>
            <span class="badge text-bg-light border">
                رقم السجل: {{ $book->id }}
            </span>
        </div>

        <hr>

        <div class="row g-4 mt-1">

            <div class="col-md-6">
                <div class="text-secondary small mb-1">وصف الكتاب</div>
                <div class="fw-bold">
                    {{ $book->description ?: 'غير محدد' }}
                </div>
            </div>

            <div class="col-md-6">
                <div class="text-secondary small mb-1">رقم الكتاب</div>
                <div class="fw-bold">{{ $book->number ?? 'غير محدد' }}</div>
            </div>

            <div class="col-md-6">
                <div class="text-secondary small mb-1">الدور</div>
                <div class="fw-bold">{{ $book->floor ?? 'غير محدد' }}</div>
            </div>

            <div class="col-md-6">
                <div class="text-secondary small mb-1">الغرفة</div>
                <div class="fw-bold">{{ $book->room ?? 'غير محدد' }}</div>
            </div>

            <div class="col-md-6">
                <div class="text-secondary small mb-1">القطاع</div>
                <div class="fw-bold">{{ $book->sector ?: 'غير محدد' }}</div>
            </div>

            <div class="col-md-6">
                <div class="text-secondary small mb-1">تاريخ الإضافة</div>
                <div class="fw-bold">
                    {{ $book->created_at->format('Y-m-d') }}
                </div>
            </div>

        </div>

        <div class="d-flex gap-2 mt-5">
            <a href="{{ route('books.edit', $book) }}"
               class="btn btn-primary px-4">
                تعديل الكتاب
            </a>

            <a href="{{ route('books.index') }}"
               class="btn btn-light border px-4">
                رجوع
            </a>
        </div>

    </div>
</div>

@endsection
