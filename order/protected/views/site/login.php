<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <meta charset = "utf-8">
    <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel = "stylesheet" href = "http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "../../../assets/css/basic.css">
    <link rel = "stylesheet" href = "../../../assets/css/test.css">
    <script src = "http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
    <script src='http://cdn.ractivejs.org/latest/ractive.min.js'></script>
</head>
<body id = "login">
<!--header for login-->
    <div class = "header">
        <div class = "container">
            <div class = "row">
                <div class = "col-lg-12 header__branding cf">
                    <a class = "header-logo fl" href = "http://www.yunshanmeicai.com">美菜网</a>
                    
                </div>
            </div>
        </div>
    </div>
<!--content for login-->
    <div class = "content pg-login">
        <div class = "container">
            <div class = "row">
                <div class = "col-md-6 visible-md-block visible-lg-block promotion-banner">
                <img class = "vblock ct"alt = "美菜网2015" width = "480" height = "370" src = "../../../assets/image/common/frontPage001.jpg">

                </div>
                <div class = "col-md-6 login-section">
                    <div id = "info-content">
                    </div>
                    <h2 class = "text-center">账号登陆</h2>

                    <form class="form-horizontal" role="form" id = "J-login-form">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">登录名：</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="手机号/用户名/邮箱">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">密码：</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="密码">
                        </div>
                      </div>

                      <div class = "form-group">
                        <div class = "col-sm-offset-10 col-sm-2">
                          <button type = "submit" class = "btn btn-default" id = "J-login-submit">登录</button>
                        </div>
                      </div>
                    </form>





                </div>
            </div>
        </div>

    </div>
<!--footer for footer-->
    <div class = "footer">
    </div>

<script id = "info-template" type = "text/ractive">
    <div  class = "validate-info"style = 'visibility:{{show}};'>{{text}}</div>
</script>
<script>
    var infoRactive = new Ractive({
        el: 'info-content',
        template: '#info-template',
        data: {
            show: 'hidden'
        }
    });
    $('#J-login-submit').click(function(event){
        event.preventDefault();
        console.log(1);
        $.post("get1.php", $('#J-login-form').serialize(), function (data, textStatus) {
            console.log(textStatus);
            if (data.status == 1) {
            } else {
                infoRactive.set({
                    show: 'visible',
                    text: data.text
                });
            }
        });

    });
</script>
</body>
</html>
