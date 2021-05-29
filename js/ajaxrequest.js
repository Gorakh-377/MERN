$(document).ready(function(){
    var reg=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    $("#stuemail").on("keypress blur",function(){
        var stuemail=$("#stuemail").val();
        $.ajax({
            url:'student/addstudent.php',
            method:"POST",
            data:{
checkemail:"checkemail",
stuemail:stuemail,
            },
            success:function(data){
                // console.log(data)
                if(data!=0){
                    $("#stumsg2").html('<small style="color:red;">Already Email Exit!</small>');
                    $("#signup12").attr("disabled",true)

                }
                else if(data==0 && reg.test(stuemail)){
                    $("#stumsg2").html('<small style="color:green;">Thank you go!</small>');
                    $("#signup12").attr("disabled",false)

                }
                else if(!reg.test(stuemail)){
                    $("#stumsg2").html('<small style="color:red;">please enter valid!</small>');
                    $("#signup12").attr("disabled",true)

                }
                if(stuemail==""){
                    $("#stumsg2").html('<small style="color:red;">Please Enter the email!</small>');
                    $("#signup12").attr("disabled",false)
                }
            }
        })
    })
})





function addstu()

{
    var reg=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var stuname=$("#stuname").val()
    var stuemail=$("#stuemail").val()
    var stupass=$("#stupass").val()
    console.log(stuname)
    console.log(stuemail)
    console.log(stupass)
    if(stuname.trim() == ""){
    
$("#stumsg1").html('<small style="color:red;">Please enter the name!</small>');
$("#stuname").focus();
return false;
    }
    else if(stuemail.trim() == ""){
    
$("#stumsg2").html('<small style="color:red;">Please enter the email!</small>');
$("#stuemail").focus();
return false;
    }
    else if(stuemail.trim()!=""&&!reg.test(stuemail))
    {
        $("#stumsg2").html('<small style="color:red;">Please enter the valid email!</small>');
$("#stuemail").focus();

    }
    else if(stupass.trim() == ""){
    
$("#stumsg3").html('<small style="color:red;">Please enter the password!</small>');
$("#stupass").focus();
return false;
    } else{
        $.ajax({
            url:'student/addstudent.php',
            method:'POST',
            dataType:"json",
            data:{
                stusign:"good",
                stuname:stuname,
                stuemail:stuemail,
                stupass:stupass,
                
            },
            success:function(data) {
                console.log(data)
                if(data == "ok"){
                
                    $('#sucessmsg').html("<span class='alert alert-success'>Registration sucessful</span>");
                   clearstu();
                }

                else if(data=="failed"){
                
                    $('#sucessmsg').html("<spanclass='alert alert-danger'>Registration failed</spanclass=alert>");
                }
            }
        }) 

    }
    function clearstu()
    {
        $("#stuRegForm").trigger("reset");
        $("#stumsg1").html("");
        $("#stumsg2").html("");
        $("#stumsg3").html("");

    }
    

    
}

    function stuLogin()
    {

        
        var stulogemail=$("#logemail").val();
        var stulogpass=$("#logpass").val();
        $.ajax({
            url:'student/addstudent.php',
            method:'POST',
            //  dataType:"json",
            data:{
                
                stucheck:"good",
                stulogemail:stulogemail,
                stulogpass:stulogpass,
            },
            success:function(data){
                if(data==0){
                    $("#login1").html('<small class="alert alert-danger">Invalid Email Id Or Password</small>')
                }
                else if(data==1){
                    $("#login1").html('<small class="alert alert-success">Login Sucessful</small>')

                setTimeout(()=>{
                    window.location.href="index.php";
                })
                }
            }
            
        })
    }
    function cancelstu()
    {
        $("#stulogForm").trigger("reset");
        $("#logemail").html("");
        $("#logpass").html("");
        

    }