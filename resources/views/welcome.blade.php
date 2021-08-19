<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaraQueue</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset("style.css")}}" rel="stylesheet" />
</head>
<body class="">
   <div class="container mt-4">
       <div class="row">
           <div class="col-md-3">
                <div class="card mt-4">
                    <div class="card-body">
                        
                        <form action="{{url('send-message')}}" method="post">
                            <div class="form-group">
                                <label for="">Message</label>
                                <input type="text" id="msg" class="form-control" name="msg">
                            </div>
                            <button type="submit" id="submit" class="btn btn-primary mt-4">Send Message</button>
                        </form>
                    </div>
                </div>
           </div>
           <div class="col-md-9">
            <div  style="height: 500px; overflow-x: scroll;">
                <table id="table" class="table"></table>
            </div>
           </div>
       </div>
   </div>
</body>
</html>