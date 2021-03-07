<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
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

    <form id="user-field"  >
     {{ csrf_field()}}
     {{-- @csrf --}}
     <div class="col-md-6">

        {{-- NAME --}}
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                <p style="text-align: right">الإسم</p>
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
            <p style="text-align: right">الجوال</p>
         <input type="text" name="mobile" class="form-control" placeholder="Your Phone Number *" required/>

         @if ($errors->has('mobile'))

             <div class="alert alert-success d-none" id="msg_div">
                <span id="res_message"></span>
                <span class="help-block">
                    <strong>
                        {{ $errors->first('mobile')}}
                    </strong>
                </span>
            </div>
         @endif
        </div>


         {{-- EMAIL --}}
         <div class="form-group" {{$errors->has('email') ? 'has-error' : ''}}>
             <p style="text-align: right">البريد الإلكتروني</p>
          <input type="email" name="email" id="email" class="form-control"  placeholder="Your Email *" required />

            @if ($errors->has('email'))
            <span class="help-block">
                <strong>
                    {{ $errors->first('email')}}
                </strong>
            </span>
            @endif
        </div>

        <div class="form-group">

            <button id="click"  type="button" class="btn btn-primary btn-square btn-sm col-lg-8 col-md-offset-2 submit" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" > Submit </button>
            {{--     this is inside the button if i want to added it --}}
        </div>
     </div>


     {{-- Popup Start --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            {{-- <h5 class="modal-title" id="exampleModalLabel">New message</h5> --}}
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
            <div class="form-group ">
                <p style="text-align: center" >إختر عرض من العروض الاتيه</p>
                <button type="button" style=" background-color:rgb(95, 51, 95); color:#FFF;" class=" btn-square btn-sm col-lg-2 col-md-offset-2"> عرض3</button>


                <button type="button" style=" background-color:rgb(95, 51, 95); color:#FFF;"class="btn-square btn-sm col-lg-2 col-md-offset-1"> عرض2</button>


                <button type="button" style=" background-color:rgb(95, 51, 95); color:#FFF;"class="btn-square btn-sm col-lg-2 col-md-offset-1"> عرض1</button>
                 <br> <br>

                <button type="button"style=" background-color:rgb(95, 51, 95); color:#FFF;" class=" btn-square btn-sm col-lg-8 col-md-offset-2">التالي</button>
                <br> <br>

            </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>

        </div>
        </div>
    </div>
</div>
     {{-- Popup End --}}


</form>
</div>
<script>
$('#click').click(function(){
    // e.preventDefualt();
    let name = $('#name').val();
    console.log(name);
});

</script>

<script>

//   if ($("#user-field").length > 0){

    //   $("#user-field").validate({
    //       rules: {
    //       name: {
    //       required : true,
    //       maxlength: 20
    //       },
    //       mobile: {
    //           required: true,
    //           digits  : true,
    //           minlength: 10,
    //           maxlength: 12,
    //       },
    //       email: {
    //           required :true,
    //           maxlength: 50,
    //           email: true,
    //       },
    //       },
    //       messages: {
    //           name: {
    //               required : "Please enter name",
    //               maxlength: "Your last nam maxlength should be 20 characters long."
    //           },
    //           mobile: {
    //               required : "Please enter contact number",
    //               digits   : "Please enter only numbers"  ,
    //               minlength: "The contact number should be 10 digits",
    //               maxlength: "The contact number should be 20 digits",
    //           },
    //           email: {
    //               required : "Please enter valid email",
    //               email    : "Please enter valid email",
    //               maxlength: "The email name should less than or equal to 20 characters",
    //           },
    //       },
        //   submitHandler : function(form) {
     $('#submit').submit(function(e){
        e.preventDefualt();

        //   $.ajaxSetup({
        //       headers: {
        //           'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        //       }
        //   });
          let name = $('#name').val();
          console.log(name);
        //   $('#send_form').html('Sending..');
        //   $.ajax({
        //       url  : 'form-user',
        //       type : "POST",
        //       data : $('#user-field').serialize(),
        //       success : function( response ){
        //         //   $('#send_form').html('submit');
        //         //   $('#res_message').show();
        //         //   $('#res_message').html(response.msg);
        //         //   $('#msg_div').removeClass('d-none');
        //           document.getElementById("user-field").reset();
        //           console.log(response);
        //         //   setTimeout(function(){
        //         //       $('#res_message').hide();
        //         //       $('#msg_div').hide();
        //         //   },10000);
        //         }
        //   });
     });
        // });
    //   })

    // });
//   }
</script>
</body>
</html>

{{-- $.post('store',{
    'name'  : user_name,
    'mobile': user_mobile,
    'email' : user_email,
    '_token':$('input[name=_token]').val()},function(data){
    sessionStorage.setItem("user_id", data)
    console.log(data);
}); --}}
