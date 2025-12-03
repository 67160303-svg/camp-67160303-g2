<!-- resources/views/html101.blade.php -->
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /> 
        <title>Workshop HTML</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <style>
            body {
                font-family: "Prompt", sans-serif;
            }
        </style>
        <div class="container pt-5">
            <h1> Workshop #HTML - FORM</h1> 
            <form>
                <div class="row mt-3">
                    <div class="col-1">
                        <label for="fname" class="col-form-label">
                            ชื่อ
                        </label>
                    </div>
                    <div class="col-4">
                        <input type="text" id="fname" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-1">
                        <label for="lname" class="col-form-label">
                            นามสกุล
                        </label>
                    </div>
                    <div class="col-4">
                        <input type="text" id="lname" class="form-control">
                    </div>
                </div>
                <div>
                    วัน/เดือน/ปี
                </div>
            </form>
        </div>
        </div>
    </body>
</html>
