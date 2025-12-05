<!-- resources/views/html101.blade.php -->
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>แบบฟอร์มสมัคร</title>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Itim&family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    body {
    font-family: "Itim", cursive;
    }
    
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        background: 
        radial-gradient(circle, rgba(255, 255, 255, 0.8) 1px, transparent 1px),
        linear-gradient(to bottom, #e0f2ff, #bfe7ff);
        background-size: 3px 3px, 100% 100%;
        height: 100vh;
        /* width: 100vw; */
    }

    .form {
        border-radius: 30px;
        width: 700px;
        background-color: #FFFFFF;
        padding: 40px;

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
            border: 1px solid #7dcaf0;
            cursor: pointer;
            background-color: #BFE7FF;
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
        <div class="form">
            <h1>Workshop #HTML - FORM</h1>

            <form>
                <div class="form-group">
                    <label>ชื่อ</label>
                    <input type="text" name="fname"><br>
                </div>
                <div class="form-group">
                    <label>สกุล</label>
                    <input type="text" name="lname"><br>
                </div>
                <div class="form-group">
                    <label>วัน/เดือน/ปีเกิด</label>
                    <input type="date" name="birth"><br>
                </div>
                <div class="form-group gender">
                    <label>เพศ</label>
                    <input type="radio" name="gender" value="male"> ชาย
                    <input type="radio" name="gender" value="female"> หญิง<br>
                </div>
                <div class="form-group">
                    <label>รูป</label>
                    <input type="file" name="photo"><br>
                </div>
                <div class="form-group">
                    <label>ที่อยู่</label>
                    <textarea name="address"></textarea><br>
                </div>
                <div class="form-group">
                    <label>สีที่ชอบ</label>
                    <select name="color">
                        <option>สีแดง</option>
                        <option>สีน้ำเงิน</option>
                        <option>สีดำ</option>
                        <option>สีชมพู</option>
                    </select><br>
                </div>
                <div class="form-group">

                    <label>แนวเพลงที่ชอบ</label>
                    <input type="radio" name="music" value="เพื่อชีวิต"> เพื่อชีวิต
                    <input type="radio" name="music" value="ลูกทุ่ง"> ลูกทุ่ง
                    <input type="radio" name="music" value="อื่นๆ"> อื่นๆ<br><br>
                </div>
                <div>
                    <input type="checkbox" name="agree">
                    <label>
                        ยินยอมให้เก็บข้อมูล
                    </label>
                </div>
                

                <div class="btn-area">
                    <button type="reset">Reset</button>
                    <button type="submit">Submit</button>
                </div>

            </form>
        </div>

    </div>
</body>

</html>