<!DOCTYPE html>
 <html lang="en">
 
<head>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Feedback information</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
    <div class="contain" style="margin-top: 20px">
    <h1>feedback information</h1>
    <div class="row">
    
    </div>
    
        <a class="btn btn-primary" href="{{route('feedbacks.create')}}">add feedback</a>
        </div>
        </div>
    <table class="table table-dark table-stripped" style="margine-top:20px,width:80%">
    <thead>
    <th>feedback username</th>
    <th>feedback email</th>
    <th>feedback phone no</th>
    <th>feedback message</th>
    <th>action</th>
    </thead>
    @foreach($feedback as $feedback)
        <tr>
        <td style="text-aling:center;">
        {{$feedback->id}}</td>
        <td>{{$feedback->feedback_name}}</td>
        <td>{{$feedback->feedback_email}}</td>
        <td>{{$feedback->feedback_phone}}</td>
        <td>{{$feedback->feedback_message}}</td>
        <td>
        <a class="btn btn-primary" href="{{route('feedback.edit',$feedback->id)}}">EDIT</a>
        <a class="btn btn-warning" href="">SHOW</a>
        <a class="btn btn-danger" href="">delete</a>
        <td>
        </tr>
    @endforeach
    </table>
</body>
</html>