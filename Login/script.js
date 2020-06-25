function pop()
      {
        document.getElementById("loginbox").style.display='block';
      }
      function pop1()
      {
        document.getElementById("sign_upbox").style.display='block';
        document.getElementById("loginbox").style.display='none';
      }function validate_sig()
      {
          var user_name=document.getElementById("name").value;
          var user_email=document.getElementById("email").value;
          var user_mobile=document.getElementById("mobile").value;
          var user_aadhar=document.getElementById("adh").value;
          var password=document.getElementById("pass").value;
          var repassword=document.getElementById("re_pass").value;
          var error_message=document.getElementById("error_message");
          error_message.style.padding="10px";
          var text;
         
          var str=user_name.slice(0,1);
          if(user_name.slice(0,1)=="_" ||user_name.slice(0,1)=="@" || str.match(/[0-9]/g)!=null)
          {
            //alert("user name should not start with _ @ or digit");
            text="user name should not start with _ @ or digit";
            error_message.innerHTML=text;
            return false;
          }
          if(user_email.indexOf("@")==-1 || email.length<10)
          {
              text="please enter valid email id";
              error_message.innerHTML=text;
              return false;
          }
          if(isNaN(user_mobile) || user_mobile.length!=10)
          {
              text="please enter valid mobile number";
              error_message.innerHTML=text;
              return false;
          }
          
          if(user_aadhar.length<10 || isNaN(user_aadhar))
          {
              text="please enter valid aadhar number";
              error_message.innerHTML=text;
              return false;
          }
          
          if(password.length<5 || password.length>15)
          {
              text="please enter valid password";
              error_message.innerHTML=text;
              return false;
          }
          if(password==repassword)
          {
          return true;
          }
      }