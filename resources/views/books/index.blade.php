
@extends('books.layouts.app')

@section('title', 'جميع الكتب')

@section('content')

{{-- Page Header --}}
<div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
    <div>
        <h2 class="page-heading mb-1">إدارة الكتب</h2>

        <p class="text-secondary mb-0">
            عرض وتنظيم جميع الكتب الموجودة في المكتبة.
        </p>
    </div>

    <a href="{{ route('books.create') }}" class="btn btn-primary px-4 py-2">
        + إضافة كتاب جديد
    </a>
</div>

{{-- Search Form --}}
<form action="{{ route('books.index') }}" method="GET" class="mb-4">
    <div class="card main-card">
        <div class="card-body">

            <label for="search" class="form-label fw-bold">
                البحث عن كتاب
            </label>

            <div class="input-group">
                <input
                    type="text"
                    name="search"
                    id="search"
                    class="form-control"
                    placeholder="ابحث بالاسم أو الوصف أو الدور أو الغرفة أو القطاع أو الرقم..."
                    value="{{ $search ?? '' }}"
                >

                <button type="submit" class="btn btn-primary px-4">
                    بحث
                </button>

                @if(!empty($search))
                    <a href="{{ route('books.index') }}"
                       class="btn btn-outline-secondary">
                        إلغاء البحث
                    </a>
                @endif
            </div>

        </div>
    </div>
</form>

{{-- Books Table --}}
<div class="card main-card">
    <div class="card-body p-0">

        @if($books->count())

            <div class="table-responsive">
                <table class="table table-hover mb-0">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم الكتاب</th>
                            <th>الوصف</th>
                            <th>الدور</th>
                            <th>الغرفة</th>
                            <th>القطاع</th>
                            <th>رقم الكتاب</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>

                                <td class="fw-bold">
                                    {{ $book->name }}
                                </td>

                                <td>
                                    {{ $book->description ?: '—' }}
                                </td>

                                <td>{{ $book->floor ?? '—' }}</td>

                                <td>{{ $book->room ?? '—' }}</td>

                                <td>{{ $book->sector ?? '—' }}</td>

                                <td>{{ $book->number ?? '—' }}</td>

                                <td>
                                    <div class="d-flex gap-1">

                                        <a
                                            href="{{ route('books.show', $book) }}"
                                            class="btn btn-sm btn-outline-info"
                                        >
                                            عرض
                                        </a>

                                        <a
                                            href="{{ route('books.edit', $book) }}"
                                            class="btn btn-sm btn-outline-primary"
                                        >
                                            تعديل
                                        </a>

                                        <form
                                            action="{{ route('books.destroy', $book) }}"
                                            method="POST"
                                            onsubmit="return confirm('هل أنت متأكد من حذف هذا الكتاب؟')"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-sm btn-outline-danger"
                                            >
                                                حذف
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

            {{-- Pagination --}}
            <div class="p-3">
                {{ $books->links('pagination::bootstrap-5') }}
            </div>

        @else

            {{-- Empty State --}}
            <div class="text-center py-5 px-3">

                <div class="fs-1 mb-3">📚</div>

                @if(!empty($search))

                    <h5 class="fw-bold">لا توجد نتائج للبحث</h5>

                    <p class="text-secondary">
                        لم يتم العثور على كتب تطابق:
                        <strong>{{ $search }}</strong>
                    </p>

                    <a
                        href="{{ route('books.index') }}"
                        class="btn btn-outline-primary"
                    >
                        عرض جميع الكتب
                    </a>

                @else

                    <h5 class="fw-bold">لا توجد كتب حتى الآن</h5>

                    <p class="text-secondary">
                        ابدأ بإضافة أول كتاب إلى المكتبة.
                    </p>

                    <a
                        href="{{ route('books.create') }}"
                        class="btn btn-primary"
                    >
                        إضافة أول كتاب
                    </a>

                @endif

            </div>

        @endif

    </div>
</div>

@endsection
