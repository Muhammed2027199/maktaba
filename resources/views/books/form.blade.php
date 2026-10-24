
<div class="row g-4">

    {{-- اسم الكتاب --}}
    <div class="col-md-6">
        <label for="name" class="form-label fw-bold">
            اسم الكتاب <span class="text-danger">*</span>
        </label>

        <input
            type="text"
            name="name"
            id="name"
            class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', $book->name ?? '') }}"
            placeholder="أدخل اسم الكتاب"
            required
        >

        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- وصف الكتاب --}}
    <div class="col-md-6">
        <label for="description" class="form-label fw-bold">
            وصف الكتاب
        </label>

        <input
            type="text"
            name="description"
            id="description"
            class="form-control @error('description') is-invalid @enderror"
            value="{{ old('description', $book->description ?? '') }}"
            placeholder="وصف مختصر للكتاب"
        >

        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- الدور --}}
    <div class="col-md-6">
        <label for="floor" class="form-label fw-bold">الدور</label>

        <input
            type="number"
            name="floor"
            id="floor"
            min="0"
            class="form-control @error('floor') is-invalid @enderror"
            value="{{ old('floor', $book->floor ?? '') }}"
            placeholder="رقم الدور"
        >

        @error('floor')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- الغرفة --}}
    <div class="col-md-6">
        <label for="room" class="form-label fw-bold">الغرفة</label>

        <input
            type="number"
            name="room"
            id="room"
            min="0"
            class="form-control @error('room') is-invalid @enderror"
            value="{{ old('room', $book->room ?? '') }}"
            placeholder="رقم الغرفة"
        >

        @error('room')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- القطاع --}}
    <div class="col-md-6">
        <label for="sector" class="form-label fw-bold">القطاع</label>

        <input
            type="text"
            name="sector"
            id="sector"
            class="form-control @error('sector') is-invalid @enderror"
            value="{{ old('sector', $book->sector ?? '') }}"
            placeholder="اسم القطاع"
        >

        @error('sector')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- رقم الكتاب --}}
    <div class="col-md-6">
        <label for="number" class="form-label fw-bold">رقم الكتاب</label>

        <input
            type="number"
            name="number"
            id="number"
            min="0"
            class="form-control @error('number') is-invalid @enderror"
            value="{{ old('number', $book->number ?? '') }}"
            placeholder="الرقم التعريفي للكتاب"
        >

        @error('number')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

</div>

{{-- الأزرار --}}
<div class="d-flex gap-2 mt-4">
    <button type="submit" class="btn btn-primary px-4">
        {{ $buttonText ?? 'حفظ الكتاب' }}
    </button>

    <a href="{{ route('books.index') }}"
       class="btn btn-light border px-4">
        إلغاء
    </a>
</div>
