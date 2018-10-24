<head>
    <title>GOLF JYOSHI（ゴルフ女子）</title>
    <meta name="description" content="可愛いのにゴルフが上手で今話題の「ゴルフ女子」のPR/キャスティングサービスGOLF JYOSHI（ゴルフジョシ）">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico">
    <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/rellax.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/jquery.inview.min.js"></script>
    <?php wp_head();?>
</head>


<style>
    .register {
        background-color: #121214;
        margin: 0 50px;
        padding-bottom: 100px;
    }

    .register .section-title {
        font-family: "游明朝";
        text-align: center;
        margin: 50px 0;
    }

    .register .section-title h1 {
        color: #eadfcb;
        font-size: 20px;
        padding-top: 50px;
    }

    .register .section-title h2 {
        color: #fff;
        font-size: 30px;
        margin: 0;
    }

    #wpmem_reg {
        color: #fff;
        font-family: "游明朝";
        text-align: center;
    }

    #wpmem_reg legend {
        display: none;
    }

    #wpmem_reg fieldset {
        margin: 40px auto;
        display: block;
        text-align: center;
    }

    #wpmem_reg .form {
        margin: 0 auto;
        display: block;
        text-align: center;
        width: 500px;
    }

    #wpmem_reg .div_text {
        margin: 0 auto;
        display: block;
        text-align: center;
        width: 500px;
    }

    #wpmem_reg input {
        margin: 0 auto;
        display: block;
        text-align: center;
        width: 500px;
    }

    #wpmem_reg .textbox {
        margin: 0 auto;
        display: block;
        text-align: center;
        width: 500px;
        border-radius: 5px;
        height: 50px;
        margin-bottom: 20px;
    }

    #wpmem_reg .buttons {
        text-align: center;
        background-color: #00345f;
        color: #fff;
        border: none;
        padding: 15px;
        box-shadow: none;
        width: 200px;
        border-radius: 0px;
        margin: 20px auto;
        display: block;
    }

    #wpmem_reg .button_div {
        margin: 0 auto;
        display: block;
        text-align: center;
    }

    #wpmem_reg .buttons:hover {
        cursor: pointer;
        cursor: hand;
        opacity: 0.7;
    }

    #wpmem_reg input,
    #wpmem_reg button,
    #wpmem_reg select,
    #wpmem_reg textarea,
    #wpmem_login input,
    #wpmem_login button {
        margin: 0 auto;
        display: block;
        text-align: center;
    }

    .wpmem_msg {
        color: #b23506;
        background-color: #121214;
        margin: 0 auto;
        display: block;
        border: none;
        text-align: center;
    }

    #wpmem_msg {
        color: #b23506;
        background-color: #121214;
        margin: 0 auto;
        display: block;
        border: none;
        text-align: center;
    }

    #wpmem_login {
        color: #fff;
        font-family: "游明朝";
        text-align: center;
        margin: 50px auto;
        display: block;
    }

    #wpmem_login .div_text {
        text-align: center;
        margin: 20px auto;
        display: block;
        width: 500px;
    }

    #wpmem_login .username,
    #wpmem_login .password {
        width: 500px;
        height: 50px;
    }

    #wpmem_login .buttons {
        text-align: center;
        background-color: #00345f;
        color: #fff;
        border: none;
        padding: 15px;
        box-shadow: none;
        width: 200px;
        border-radius: 0px;
        margin: 20px auto;
        display: block;
    }

    #wpmem_login .button_div {
        margin: 0 auto;
        display: block;
        text-align: center;
    }

    #wpmem_login .button_div #rememberme {
        display: none;
    }

    #wpmem_login .button_div label {
        display: none;
    }

    #wpmem_login .buttons:hover {
        cursor: pointer;
        cursor: hand;
        opacity: 0.7;
    }

    .register p {
        text-align: center;
        font-family: "游明朝";
    }

    .register ul {
        list-style-type: none;
        font-family: "游明朝";
    }

    .register ul li {
        text-align: center;
    }

    p {
        text-align: center;
    }

    @media screen and (max-width:480px) {
        body {
            margin: 0 auto;
        }

        .register {
            background-color: #121214;
            margin: 0 10px;
            padding-bottom: 100px;
        }

        .register .section-title {
            font-family: "游明朝";
            text-align: center;
            margin: 50px 0;
        }

        .register .section-title h1 {
            color: #eadfcb;
            font-size: 17px;
            padding-top: 50px;
        }

        .register .section-title h2 {
            color: #fff;
            font-size: 20px;
            margin: 0;
        }

        #wpmem_reg {
            color: #fff;
            font-family: "游明朝";
            text-align: center;
        }

        #wpmem_reg legend {
            display: none;
        }

        #wpmem_reg fieldset {
            margin: 40px auto;
            display: block;
            text-align: center;
        }

        #wpmem_reg .form {
            margin: 0 auto;
            display: block;
            text-align: center;
            width: 300px;
        }

        #wpmem_reg .div_text {
            margin: 0 auto;
            display: block;
            text-align: center;
            width: 300px;
        }

        #wpmem_reg input {
            margin: 0 auto;
            display: block;
            text-align: center;
            width: 300px;
        }

        #wpmem_reg .textbox {
            margin: 0 auto;
            display: block;
            text-align: center;
            width: 300px;
            border-radius: 5px;
            height: 50px;
            margin-bottom: 20px;
        }

        #wpmem_reg .buttons {
            text-align: center;
            background-color: #00345f;
            color: #fff;
            border: none;
            padding: 15px;
            box-shadow: none;
            width: 150px;
            border-radius: 0px;
            margin: 20px auto;
            display: block;
        }

        #wpmem_reg .button_div {
            margin: 0 auto;
            display: block;
            text-align: center;
        }

        #wpmem_reg .buttons:hover {
            cursor: pointer;
            cursor: hand;
            opacity: 0.7;
        }

        #wpmem_reg input,
        #wpmem_reg button,
        #wpmem_reg select,
        #wpmem_reg textarea,
        #wpmem_login input,
        #wpmem_login button {
            margin: 0 auto;
            display: block;
            text-align: center;
        }



        #wpmem_login {
            color: #fff;
            font-family: "游明朝";
            text-align: center;
            margin: 50px auto;
            display: block;
        }

        #wpmem_login .div_text {
            text-align: center;
            margin: 20px auto;
            display: block;
            width: 300px;
        }

        #wpmem_login .username,
        #wpmem_login .password {
            width: 300px;
            height: 50px;
        }

        #wpmem_login .buttons {
            text-align: center;
            background-color: #00345f;
            color: #fff;
            border: none;
            padding: 15px;
            box-shadow: none;
            width: 200px;
            border-radius: 0px;
            margin: 20px auto;
            display: block;
        }

        #wpmem_login .button_div {
            margin: 0 auto;
            display: block;
            text-align: center;
        }

        #wpmem_login .button_div #rememberme {
            display: none;
        }

        #wpmem_login .button_div label {
            display: none;
        }

        #wpmem_login .buttons:hover {
            cursor: pointer;
            cursor: hand;
            opacity: 0.7;
        }
    }

</style>

<body>
    <div class="row">
        <div class="col-md-4">
            <div class="bg4">
                <?php get_header();?>

                <div class="register">
                    <div class="section-title">
                        <h1>REGISTER / 新規会員登録</h1>
                        <h2>必要な項目にご入力の上送信して<br>ゴルフ女子一覧ページへお進みください。</h2>
                    </div>

                    <?php echo do_shortcode('[wpmem_form register]'); ?>

                    <?php echo do_shortcode('[wpmem_form login]'); ?>


                </div>

                <?php get_footer();?>
            </div>
        </div>
    </div>

    <script>
        jQuery(function() {
            var $offset = jQuery('#lastWidget').offset();
            jQuery(window).scroll(function() {
                if (jQuery(window).scrollTop() > $offset.top) {
                    jQuery('#lastWidget').addClass('fixedWidget');
                } else {
                    jQuery('#lastWidget').removeClass('fixedWidget');
                }
            });
        });

        $(function() {
            $('a[href^="#"]').click(function() {
                var speed = 500;
                var href = $(this).attr("href");
                var target = $(href == "#" || href == "" ? 'html' : href);
                var position = target.offset().top;
                $("html, body").animate({
                    scrollTop: position
                }, speed, "swing");
                return false;
            });
        });

    </script>
</body>
