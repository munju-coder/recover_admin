<!DOCTYPE html>
<html>
    
    <head>
        <title>LOGIN</title>

        <link rel="stylesheet" href="../css/style.css" />
        <script src="//code.jquery.com/jquery-latest.min.js"></script>

       
    </head>

    <style>
        .login_box {width:350px; margin:0 auto; margin-top:230px;}

        .login_box .lb_top,
        .login_box .lb_middle,
        .login_box .lb_text_box,
        .login_box .lb_bottom {padding:5px 0;}

        .login_box .lb_top {margin-bottom:20px;}
        .login_box .lb_middle .lb_input input {width:98.99%; border-radius:5px; border:1px solid #111111; padding:12px 0; margin:5px 0;}

        .login_box .lb_text_box div {float:left; width:50%; font-size:12px;}
        .login_box .lb_text_box div input {position:relative; top:2px;}
        .login_box .lb_text_box .lbtb_right {text-align:right;}
        .login_box .lb_bottom input {width:100%; padding:12px 0; margin:5px 0; border:1px solid #ffffff; border-radius:5px; color:#ffffff; font-size:15px; font-weight:bold;}
        .login_box .lb_bottom input[type=submit] {background-color:#00c752;}
        .login_box .lb_bottom input[type=button] {background-color:#ffd821;}
        
    </style>

    <body>
        <div class="wrap">

            <div class="login_box">

                <div class="lb_top text_23_b text_c">
                    <img src="../images/login_logo.png" alt="">
                </div>

                <form id = "login_form">
                    <div class="lb_middle">
                        <div class="lb_input">
                            <input type="text" name="id" id="id">
                        </div>

                        <div class="lb_input">
                            <input type="password" name="passwd" id="passwd">
                        </div>

                        <div class="lb_text_box">
                            <div class="lbtb_left">
                                <input type="checkbox" name="id_save" id="id_save">아이디 저장
                            </div>

                            <div class="lbtb_right null_btn">비밀번호찾기</div>
                        </div>
                    </div>

                    <div class="lb_bottom">
                        <input type="submit" value="로그인">
                        <input type="button" class = " null_btn" value="회원가입">
                    </div>
                </form>

            </div>

        </div>

        <script>

            $("document").ready(function(){
                $("#login_form").submit(function(e) {
                    e.preventDefault();

                    var formObject = $(this).serializeObject();
                    formObject["api_key"] = "123456789";

                    if(formObject["id"] == "")
                    {
                        alert("아이디를 입력하세요.");
                        return false;
                    }

                    if(formObject["pw"] == "")
                    {
                        alert("비밀번호를 입력하세요.");
                        return false;
                    }

                    $.ajax({
                        type: "POST",
                        cache : false,
                        dataType: "json",
                        url: URL + "/REST/login/user/index.php",
                        data: JSON.stringify(formObject),
                        success: function(data)
                        {
                            //alert(data['return_msg']);
                            if(data['return_cd'] == "0000")
                            {
                                location.href = "../";
                            }
                            else
                            {
                                alert(data['return_msg']);
                                return false;
                            }
                        },
                        error: function(r) {
                            alert("통신실패...");
                        }
                    });
                    
                    return true;        

                });
                
                $(".null_btn").click(function(){
                    alert("사용할 수 없습니다.");
                });
            });

        </script>
    </body>
</html> 