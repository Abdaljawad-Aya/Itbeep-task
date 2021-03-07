<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Form</title>
</head>
<body>
   <div class="container contact-form" style="margin-top:100px;">
     @if (seesion('status'))
       <div class="alert alert-success">
           {{ session('status')}}
       </div>
    @endif
    @if (seesion('warning'))
    <div class="alert alert-warning">
        {{session('warning')}}
    </div>
    @endif

    <form method="POST" action="{{ route('form.store')}}">
     {{ csrf_field()}}
     <h3>Form Field</h3>
     <div class="col-md-6">
         <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">

            <input type="text" name="name" class="form-control" placeholder="Your Name *" required/>
             @if ($errors->has('name'))
                 <span class="help-block">
                     <strong>
                         {{ $errors->first('name')}}
                     </strong>
                 </span>
             @endif
         </div>
         <div class="form-group" {{$errors->has('email') ? 'has-error' : ''}}>
          <input type="email" name="email" class="form-control">
        </div>
     </div>
    </form>
</div>
</body>
</html>
