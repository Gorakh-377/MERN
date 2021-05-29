function admin(){
    
    var adminlogemail=$("#adminlogemail").val();
        var adminlogpass=$("#adminlogpass").val();
        $.ajax({
            url:'Admin/Admin.php',
            method:'POST',
            //  dataType:"json",
            data:{
                
                stucheck:"good",
                adminlogemail:adminlogemail,
                adminlogpass:adminlogpass,
            },
            success:function(data){
                console.log(data);
                if(data==0){
                    $("#logadmin").html('<small class="alert alert-danger">Invalid Email Id Or Password</small>')
                }
                else if(data==1){
                    $("#logadmin").html('<small class="alert alert-success">Login Sucessful</small>')

                setTimeout(()=>{
                    window.location.href="Admin/DashB.php";
                })
                }
            }
            
        })
}