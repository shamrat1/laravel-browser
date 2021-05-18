<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
body {
  font-family: Arial
}

* {
  box-sizing: border-box;
}

/* The browser window */
.container {
  border: 3px solid #f1f1f1;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}

/* Container for columns and the top "toolbar" */
.row {
  padding: 10px;
  background: #f1f1f1;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
}

.left {
  width: 15%;
}

.right {
  width: 10%;
}

.middle {
  width: 75%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Three dots */
.dot {
  margin-top: 4px;
  height: 12px;
  width: 12px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}

/* Style the input field */
input[type=text] {
  width: 100%;
  border-radius: 3px;
  border: none;
  background-color: white;
  margin-top: -8px;
  height: 25px;
  color: #666;
  padding: 5px;
}

/* Three bars (hamburger menu) */
.bar {
  width: 17px;
  height: 3px;
  background-color: #aaa;
  margin: 3px 0;
  display: block;
}

/* Page content */
.content {
  padding: 10px;
}
</style>
  </head>
  <body>
  @php
    $val = 30;
  @endphp
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <input type="text" id="url" class="form-control form-control-lg" placeholder="Enter Url">
                </div>
            </div>
            <div class="col-3">
                <button id="browse" class="btn btn-block btn-success">Browse</button>
            </div>
        </div>
    </div>
    <div class="col-3"></div>
  </div>
  <div class="row bg-white">
  @for($i = 0; $i < $val; $i++)
    <div class="col-6 p-3">
        <div class="container">
            <div class="row">
                <div class="column left">
                <!-- <span class="dot" style="background:#ED594A;"></span>
                <span class="dot" style="background:#FDD800;"></span>
                <span class="dot" style="background:#5AC05A;"></span> -->
                </div>
                <div class="column middle">
                <input type="text" disabled value="http://www.w3schools.com" id="url_text_{{ $i }}">
                </div>
                <div class="column right">
                <div style="float:right">
                    <!-- <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span> -->
                </div>
                </div>
            </div>

            <iframe class="content" width="500px" height="500px" id="browser_windows_{{ $i }}">
                <h3>Browser Window</h3>
                <p>How to create a detailed browser window look with CSS.</p>
            </iframe>
        </div>
    </div>
  @endfor
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-linkify/2.1.9/linkify.min.js" integrity="sha512-kxj7VjlzsQgiku2vbRcZI0FJ0dXmPsiRLugiRxJrCROusKHaFfX/hGDD1/L/R0Y+xI8zlA2B5nm6USapz7nQbg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let windows = "{{ $val }}";
        $(document).on("click",'#browse',function(){
            if(linkify.find($('#url').val()) == ''){

            }else{
                let data = linkify.find($('#url').val());
                let url = data[0]['href'];
                for(let j = 0; j < windows; j++){
                    $('#url_text_'+j).val(url);
                    $('#browser_windows_'+j).attr('src',url);
                }
 
            }
        });
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>