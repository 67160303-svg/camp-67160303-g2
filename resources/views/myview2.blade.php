@extends('template.default')

@section('title', 'Workshop Result')
@section('header1')

@section('content')

<style>
    body {
        background-color: #f5f7fa;
    }

    .result-card {
        max-width: 1100px; /* ทำให้กล่องกว้างขึ้น */
        margin: auto;
    }

    .result-card .card-body {
        padding: 3rem; /* เพิ่มระยะหายใจ */
    }

    table td, table th {
        font-size: 1.05rem;
        padding: 14px;
    }
</style>

<div class="container-fluid mt-5 mb-5">

    <!-- หัวข้อ -->
    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary">
            ผลลัพธ์จาก Workshop Form
        </h2>
        <hr class="mx-auto" style="width:140px; border:3px solid #0d6efd;">
    </div>

    <div class="result-card">

        <div class="card shadow-lg border-0 rounded-4">

            <div class="card-header bg-white text-center border-0 pt-4 pb-3">
                <h4 class="text-primary fw-semibold mb-0">
                    ข้อมูลที่รับจากฟอร์ม
                </h4>
            </div>

            <div class="card-body">

                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-primary text-center">
                        <tr>
                            <th style="width:35%">ชื่อ</th>
                            <th>ข้อมูลที่ได้รับ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $value)
                            @if($key !== '_token')
                            <tr>
                                <td class="fw-bold text-secondary">{{ $key }}</td>
                                <td>
                                    @if(is_array($value))
                                        {{ implode(', ', $value) }}
                                    @else
                                        {{ $value }}
                                    @endif
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>

                <div class="text-center mt-5">
                    <a href="{{ url('/workshop-form') }}"
                       class="btn btn-primary btn-lg px-5 rounded-pill">
                        ← กลับไปหน้า Form
                    </a>
                </div>

            </div>
        </div>

    </div>

</div>

@endsection
