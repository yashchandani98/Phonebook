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
input[type=text], input[type=email], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=email]:focus, input[type=password]:focus {
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
  <form class="container" action="javascript:void(0);" method="post" id="registerForm">
    <h1>Register</h1>

    <label for="name"><b>Name</b> *</label>
    <input type="text" placeholder="Enter Name" name="username" id="username" required>

    <label for="email"><b>Email</b> *</label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b> *</label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw"><b>Confirm Password</b> *</label>
    <input type="password" placeholder="Enter Confirm Password" name="confpsw" id="confpsw" required>

    <button type="submit" class="btn">Register</button>
  </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$("#registerForm").on('submit',function(e){
    e.preventDefault();
    var name=$("#username").val();
    var email=$("#email").val();
    var pwd=$("#psw").val();
    var confpwd=$("#confpsw").val();
    if(pwd==confpwd){
        $.post("<?=base_url()?>registerDetails/"+name+"/"+email+"/"+pwd,function(data){
            if(data==1){
                swal("Success!", "Admin Registered Successfully!", "success");        
                window.location.replace('Admin/Login');
            }
            else{
                swal("Error!", "Something went wrong!", "error");        
            }
        });
    }
    else{
        swal("Error!", "Password should be same!", "error");
        return 0;
    }
});
</script>