<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../views/css/style.css">
    <title>Form</title>
</head>
<body>
   <div class="container contact-form col-lg-6 col-md-offset-4" style="margin-top:100px;">
     @if (session('status'))
       <div class="alert alert-success">
           {{ session('status')}}
       </div>
    @endif
    @if (session('warning'))
    <div class="alert alert-warning">
        {{session('warning')}}
    </div>
    @endif

    <form method="POST" action ="{{ route('users.store')}}" >
     {{ csrf_field()}}

     <div class="col-md-6">

        {{-- NAME --}}
         <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                الإسم
            <input type="text" name="name" class="form-control" placeholder="Your Name *" required/>
             @if ($errors->has('name'))
                 <span class="help-block">
                     <strong>
                         {{ $errors->first('name')}}
                     </strong>
                 </span>
             @endif
         </div>


        {{-- MOBILE --}}

        <div class="form-group" {{$errors->has('mobile') ? 'has-error' : ''}}>
            الجوال
         <input type="text" name="mobile" class="form-control" placeholder="Your Phone Number *" required/>

         @if ($errors->has('mobile'))
             <span class="help-block">
                 <strong>
                     {{ $errors->first('mobile')}}
                 </strong>
             </span>
         @endif
        </div>
         {{-- EMAIL --}}
         <div class="form-group" {{$errors->has('email') ? 'has-error' : ''}}>
            البريد الإلكتروني
          <input type="email" name="email" class="form-control" placeholder="Your Email *" required />

            @if ($errors->has('email'))
            <span class="help-block">
                <strong>
                    {{ $errors->first('email')}}
                </strong>
            </span>
            @endif
        </div>

        <div class="form-group">

            <input type="submit" name="btnSubmit" class="btn btn-primary btn-square btn-sm col-lg-8 col-md-offset-2" value="إرسال" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
        </div>
     </div>


     {{-- Popup Start --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
            <div class="form-group">
                {{-- <label for="recipient-name" class="col-form-label"></label>
                <input type="text" class="form-control" id="recipient-name"> --}}
                <button type="button" class="btn btn-primary dark"> عرض3</button>

                <button type="button" class="btn btn-primary dark"> عرض3</button>

            </div>
            <div class="form-group">
                {{-- <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea> --}}

            </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Send message</button>
        </div>
        </div>
    </div>
</div>
     {{-- Popup End --}}


</form>
</div>
</body>
</html>
