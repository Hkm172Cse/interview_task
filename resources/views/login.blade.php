@extends('include.app')


@section('content')
<div class="container ">
<div class="row justify-content-center d-flex mt-5 mb-5">

<div class="col-md-10 card">
  <div class="row">
    <div style="height: 450px" class="col-md-6 p-3">
      
        
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input  required="" id="email"  value="" type="email" class="form-control" id="exampleInputPassword1" placeholder="E-mail">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input  required="" id="password"  value="" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <button id="regiId" class="btn btn-block btn-danger">Login</button>
        </div>
    
</div>

<div style="height: 450px" class="col-md-6 bg-light">
<img class="w-75 m-5" src="{{asset('image/bannerImg.png')}}">
</div>
</div>
</div>




</div>
</div>


@endsection

@section('script')

<script type="text/javascript">
  $(document).on("click", "#regiId", function(){
    
    var password = $('#password').val();
    var email = $('#email').val();



    console.log(password + email);

    axios.post('/Login', {
      password:password, 
      email:email
    })
        .then(function(response){
          if(response.status == 200 && response.data==1){
            toastr.success('Login is  SuccessFull');
              window.location.href="/";
          }else{
            toastr.error('Data Not Match');
              window.location.href="/";
          }
        })
        .catch(function(error){
         console.log("ctachBlock")
         
          
        })
  })
    

</script>

@endsection