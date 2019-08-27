<style>
.bg-img {
  /* The image used */
  background-image: url("http://localhost/Phonebook/assets/images/Search_001.png");
  min-height: 1000px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.container {
  position: absolute;
  right: 40%;
  top:20%;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}
input[type=email], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=email]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>

<div class="bg-img">
  <form class="container" method="get" id="loginForm" action="javascript:void(0);">
    <h1>Admin Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$("#loginForm").on('submit',function(e){
    e.preventDefault();
    var email=$("#email").val();
    var pwd=$("#psw").val();
        $.post("<?=base_url()?>checkLogin/"+email+"/"+pwd,function(data){
            if(data==1){
                swal("Success!", "Login Successfully!", "success");        
                window.location.replace('../Admin/Home');
            }
            else{
                swal("Error!", "Incorrect Credentials!", "error");        
            }
        });
});
</script>