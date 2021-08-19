<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaraQueue</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset("style.css")}}" rel="stylesheet" />
</head>
<body class="">
   <div class="container mt-4">
       <div class="row">
           <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        
            <div  style="height: 500px; overflow-x: scroll;">
                <table id="table" class="table">
                    @foreach($laras as $key => $lara)
                        <tr><td>{{ $lara->id }}</td><td>{{$lara->msg}}</td><td>{{$lara->phone}}</td><td>{{$lara->created_at}}</td></tr>
                    @endforeach
                </table>
            </div>
           </div>           
       </div>
   </div>
</body>
</html>