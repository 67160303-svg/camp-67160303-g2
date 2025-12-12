@extends('template.default')

@section('content')
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>HTML Form Validation</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background: linear-gradient(to bottom, #d9f0ff, #bfe5ff);
        }

        .form-card {
            max-width: 900px;
            margin: auto;
            padding: 30px;
            border-radius: 20px;
            background: #fff;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        h1 {
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }
    </style>

</head>

<body>

    <div class="container py-4">
        <div class="form-card">

            <h1>Workshop #HTML - FORM</h1>

            <form id="myForm" novalidate>

                <!-- Row 1 -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" id="fname" name="fname">
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">กรุณากรอกชื่อ</div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">สกุล</label>
                        <input type="text" class="form-control" id="lname" name="lname">
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">กรุณากรอกสกุล</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">วัน/เดือน/ปีเกิด</label>
                        <input type="date" class="form-control" id="birth" name="birth">
                        <div class="invalid-feedback">กรุณาเลือกวันเกิด</div>
                    </div>

                    <!-- Age -->
                    <div class="col-md-6 mb-1">
                        <label class="form-label">อายุ</label>
                        <input type="number" class="form-control" id="age" name="age" min="1" max="120">
                        <div class="invalid-feedback">กรุณากรอกอายุ</div>
                    </div>
                </div>

                <!-- Gender -->
                <div class="mb-3">
                    <label class="form-label d-block">เพศ</label>
                    <div class="form-check form-check-inline">
                    <input type="radio" name="gender" value="male" class="form-check-input">
                    <label class="form-check-label">ชาย</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="gender" value="female" class="form-check-input">
                    <label class="form-check-label">หญิง</label>
                </div>
                <div id="genderError" class="text-danger" style="display:none;">
                    กรุณาเลือกเพศ
                </div>
            </div>

                <!-- Photo -->
                <div class="mb-3">
                    <label class="form-label">รูป</label>
                    <input type="file" class="form-control" id="photo" name="photo">
                    <div class="invalid-feedback">กรุณาอัปโหลดรูป</div>
                </div>

                <!-- Address -->
                <div class="mb-3">
                    <label class="form-label">ที่อยู่</label>
                    <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                    <div class="invalid-feedback">กรุณากรอกที่อยู่</div>
                </div>

                <!-- Color -->
                <div class="mb-3">
                    <label class="form-label">สีที่ชอบ</label>
                    <select class="form-select" id="color" name="color">
                        <option value="">-- เลือกสี --</option>
                        <option>สีแดง</option>
                        <option>สีน้ำเงิน</option>
                        <option>สีดำ</option>
                        <option>สีชมพู</option>
                    </select>
                    <div class="invalid-feedback">กรุณาเลือกสีที่ชอบ</div>
                </div>

                <!-- Music -->
                <div class="mb-3">
                    <label class="form-label d-block">แนวเพลงที่ชอบ</label>
                    <div class="form-check">
                        <input type="radio" name="music" value="เพื่อชีวิต" class="form-check-input">
                        <label class="form-check-label">เพื่อชีวิต</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="music" value="ลูกทุ่ง" class="form-check-input">
                        <label class="form-check-label">ลูกทุ่ง</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="music" value="อื่นๆ" class="form-check-input">
                        <label class="form-check-label">อื่นๆ</label>
                    </div>
                    <div id="musicError" class="text-danger" style="display:none;">
                        กรุณาเลือกแนวเพลงที่ชอบ
                    </div>
                </div>

                <!-- Agree -->
                <div class="form-check mb-4">
                    <input type="checkbox" id="agree" name="agree" class="form-check-input">
                    <label class="form-check-label">ยินยอมให้เก็บข้อมูล</label>
                    <div class="invalid-feedback">กรุณายอมรับก่อนส่งข้อมูล</div>
                </div>

                <!-- Buttons -->
                <div class="text-center">
                    <button class="btn btn-secondary px-4" type="reset">reset</button>
                    <button class="btn btn-primary px-4 ms-2" type="button" onclick="validateForm()">บันทึก</button>
                </div>

            </form>

        </div>

    </div>

@endsection

@push('scripts')
<script>
function validateForm() {
    let isValid = true;

    function checkInput(element) {
        if (element.value.trim() === "") {
            element.classList.add("is-invalid");
            element.classList.remove("is-valid");
            isValid = false;
        } else {
            element.classList.remove("is-invalid");
            element.classList.add("is-valid");
        }
    }

    checkInput(fname);
    checkInput(lname);
    checkInput(birth);
    checkInput(address);
    checkInput(color);
    checkInput(age);

    if (photo.files.length === 0) {
        photo.classList.add("is-invalid");
        isValid = false;
    } else {
        photo.classList.remove("is-invalid");
        photo.classList.add("is-valid");
    }

    let gender = document.querySelector('input[name="gender"]:checked');
    document.getElementById("genderError").style.display = gender ? "none" : "block";
    if (!gender) isValid = false;

    let music = document.querySelector('input[name="music"]:checked');
    document.getElementById("musicError").style.display = music ? "none" : "block";
    if (!music) isValid = false;

    if (!agree.checked) {
        agree.classList.add("is-invalid");
        isValid = false;
    } else {
        agree.classList.remove("is-invalid");
        agree.classList.add("is-valid");
    }

    if (isValid) {
        alert("✔ ข้อมูลครบถ้วน บันทึกสำเร็จ!");
    } else {
        alert("✘ กรุณากรอกข้อมูลให้ครบถ้วน");
    }
}
</script>
@endpush

</body>

</html>
