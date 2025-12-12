<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>แบบฟอร์มสมัคร</title>
    <!-- Bootstrap --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Itim&family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    body {
    font-family: "Itim", cursive;
    }

    /* ขอบสีเขียวเมื่อกรอกถูกต้อง */
    .is-valid {
    border: 2px solid #28a745 !important;
    }

    /* ขอบสีแดงเมื่อกรอกผิด */
    .is-invalid {
    border: 2px solid #dc3545 !important;
    }

    /* ข้อความแจ้งเตือน */
    .invalid-feedback,
    .valid-feedback {
        font-size: 14px;
        margin-top: 4px;
        display: block;
    }

    .valid-feedback {
        color: #28a745;
    }

    .invalid-feedback {
        color: #dc3545;
    }

    
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 100px;
        background: 
        radial-gradient(circle, rgba(255, 255, 255, 0.8) 1px, transparent 1px),
        linear-gradient(to bottom, #e0f2ff, #bfe7ff);
        background-size: 3px 3px, 100% 100%;
        height: 100vh;
        /* width: 100vw; */
    }

    .form {
        border-radius: 100px;
        width: 1000px;
        background-color: #FFFFFF;
        padding: 100px;

        h1 {
            font-size: 45px;
            text-align: center;
        }

        textarea {
            margin-bottom: 8px;
            width: 100%;      /* ให้เต็มแถว */
            height: 100px;    /* ปรับความสูงตรงนี้ */
            font-size: 16px;  /* ขนาดตัวอักษรในช่อง */
            border-radius: 4px;
            border: 1px solid #BFE7FF;
            padding: 4px;
        }

        select {
            margin-bottom: 8px;
            width: 100%;       /* ให้เต็มความกว้าง */
            height: 36px;      /* ปรับความสูงของกล่องเลือก */
            font-size: 16px;   /* ขนาดตัวอักษร */
            border-radius: 4px;
            border: 1px solid #BFE7FF;
            padding: 4px;
        }

        input {
            margin-bottom: 8px;
            font-size: 20px;       /* ขนาดฟอนต์ใหญ่ขึ้น */
            padding: 10px;          /* เพิ่มพื้นที่ด้านใน ทำให้ปุ่มใหญ่ขึ้น */
            
        }

        button {
            padding: 8px 20px;   /*เพิ่มขนาดปุ่ม (บนล่าง 8px, ซ้ายขวา 20px) */
            font-size: 16px;     /*ขนาดตัวอักษรในปุ่ม */
            border-radius: 6px;  /*ทำมุมโค้ง */
        }

        form {
            font-size: 20px;
            display: flex;
            flex-direction: column;
            gap: 14px;    /* ระยะห่างระหว่างแต่ละ input */
            
            .form-group {
                &.gender {
                    font-size: 20px;
                    display: flex;
                    gap: 8px;
                }

                label {
                    display: block;        /* ให้ label อยู่บรรทัดของตัวเอง */
                    margin-bottom: 6px;  
                    font-size: 20px;
                }

                input:not([type="radio"], [type="file"]) {
                    margin-bottom: 6px;
                    font-size: 15px;
                    width: 100%;
                    height: 30px;
                    border-radius: 4px;
                    border: solid 1px #7dcaf0;

                    &:focus {
                        outline: solid 2px #7dcaf0;
                        border-radius: 4px;
                    }
                }
            }
        }
    }
    </style>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
    @stack('scripts')
</body>

</html>