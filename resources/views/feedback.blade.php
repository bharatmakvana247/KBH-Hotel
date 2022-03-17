<!DOCTYPE html>
 <html lang="en">
 
<head>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Feedback</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
    <div class="contain" style="margin-top: 20px">

    <h1>Add feedback</h1>
    <div class="container" style="width:60%">
    @if($errors->any())
    <div class="row">
        <div class="col col-lg-12 margin-tb">
            <div class="pull-left">
                <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                     <p>{{$error}}</p>
                 @endforeach
                </div>
         </div>
     </div>
     @endif
    <form action="{{route('feedbacks.store')}}" method="post">
    @csrf
        <div class="form-group">
            <strong> enter user name</strong>
            <input type="text" class="form-control" name="feedback_name" placeholder="enter feedback name">
        </div>
        <div class="form-group">
            <strong> enter email</strong>
            <input type="text" class="form-control" name="feedback_email" placeholder="enter email">
        </div>
        <div class="form-group">
            <strong> enter phone</strong>
            <input type="text" class="form-control" name="feedback_phone" placeholder="enter phoneno">
        </div>
        <div class="form-group">
            <strong> enter message</strong>
            <input type="text" class="form-control" name="feedback_message" placeholder="enter message">
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    
    </form>
    </div>
    
</body>
</html>