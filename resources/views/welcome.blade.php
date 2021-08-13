<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaraQueue</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{asset("bootstrap/css/bootstrap.css")}}" rel="stylesheet" />
    <link href="{{asset("style.css")}}" rel="stylesheet" />
</head>


<body class="">
   <div class="container mt-4">
       <div class="row">
           <div class="col-md-3">
                <div class="card mt-4">
                    <div class="card-body">
                        
                            
                            <div class="form-group">
                                <label for="">Message</label>
                                <input type="text" id="msg" class="form-control" name="name">
                            </div>
                            <button type="button" id="submit" class="btn btn-primary mt-4">Send Message</button>
                        
                    </div>
                </div>
           </div>
           <div class="col-md-9">
            <div  style="height: 500px; overflow-x: scroll;">
                <table id="table" class="table"></table>
            </div>
           </div>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
           <script>

               const submit = document.getElementById("submit");
               const msg = document.getElementById("msg").value;
               submit.addEventListener("click", function(e){
                   e.preventDefault();
                   console.log(msg)
                   var payload = {
                                    msg
                                };

                                var data = new FormData();
                             data.append( "msg", msg);

                                fetch("/send-message",
                                {
                                    method: "POST",
                                    body: data
                                },{
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                })
                                .then(function(res){ return res.json(); })
                                .then(function(data){ })
                                .finally(alert())
                 })
                const laraTable = document.getElementById("table");
                setInterval(function(){
                    fetch('api/laraqueue')
                        .then(response => response.text())
                        .then(data => {
                            laraTable.innerHTML = data
                            console.log(data);
                        })
                }, 1000);
           </script>
       </div>
   </div>

</body>

</html>