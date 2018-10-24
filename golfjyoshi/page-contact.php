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
    .section-top {
        padding-top: 50px;
        text-align: center;
        font-family: "游明朝";
        margin: 50px 50px 0;
    }

    .section-top h2 {
        font-weight: normal;
        padding-top: 30px;
    }

    .section-top p {
        font-size: 30px;
        padding: 0 0 10px;
        margin-top: 0;
    }

    .wpcf7-form p {
        text-align: center;
        margin: 30px auto;
        font-size: 20px;
        font-family: "游明朝";
    }

    .wpcf7-form-control {
        text-align: center;
        margin: 0 auto;
        font-size: 20px;
        display: block;
        border-radius: 5px;
        height: 50px;
        width: 500px;
    }

    .wpcf7-textarea {
        height: 200px;
        text-align: left;
    }

    .wpcf7-submit {
        text-align: center;
        margin: 50px auto;
        background-color: #00345f;
        color: #fff;
        border: none;
        padding: 15px;
        box-shadow: none;
        width: 200px;
        border-radius: 0px;
    }

    .wpcf7-submit:hover {
        cursor: pointer;
        cursor: hand;
        opacity: 0.7;
    }

    .item {
        text-align: left;
    }

    .contact {
        background-color: #121214;
        margin: 0 50px;
        padding-bottom: 100px;
    }

    .wpcf7-mail-sent-ok {
        text-align: center;
        width: 500px;
    }

    div.wpcf7-response-output {
        margin: 0 auto;
        display: block;
        border:none;
    }
    
    span.wpcf7-not-valid-tip{
        text-align: center;
        margin: 0 auto;
        display: block;
    }
    
    div.wpcf7-validation-errors{
        text-align: center;
        margin:0 auto;
        display: block;
    }

    @media screen and (max-width:480px) {
        .section-top {
            margin: 30px 10px 0;
        }
        .section-top p {
            font-size: 15px;
            padding: 0 0 10px;
            margin-top: 0;
        }

        .wpcf7-form-control {
            text-align: left;
            font-size: 20px;
            height: 30px;
            width: 300px;
        }

        .wpcf7-submit {
            text-align: center;
            margin: 50px auto;
            background-color: #00345f;
            color: #fff;
            border: none;
            padding: 15px;
            box-shadow: none;
            width: 200px;
            border-radius: 0px;
            height: 60px;
        }


        .contact {
            margin: 0 10px;
        }
    }

</style>

<body>
    <div class="row">
        <div class="col-md-4">
            <div class="bg4">
                <?php get_header();?>
                <div class="contact">
                    <div class="section-top">
                        <h2>CONTACT</h2>
                        <p>サービスに関する疑問や、実際の利用希望など<br>いつでもお問い合わせください。</p>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="12" title="コンタクトフォーム 1"]'); ?>
                </div>


                <footer>
                    <div class="information">
                        <img src="<?php echo get_template_directory_uri();?>/img/logo-wh2.png" class="logo">
                        <ul class="ul-footer">
                            <li><a href="http://reynato.co.jp/">運営会社</a></li>
                            <li>/</li>
                            <li><a href="http://golfgirls.jp/private-information">個人情報保護方針</a></li>
                        </ul>
                    </div>
                    <p>&copy;2018 GOLF JYOSHI ALL RIGHTS RESERVED.</p>
                </footer>
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
