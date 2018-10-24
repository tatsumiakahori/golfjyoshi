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
    .wpmem_msg {
        color: #b23506;
        background: none;
        margin: 0 auto;
        display: block;
        border: none;
        text-align: center;
    }

    #wpmem_login legend {
        margin-bottom: 50px;
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

    @media screen and (max-width:480px) {
        body {
            margin: 0 auto;
        }

        .wpmem_msg {
            margin: 50px auto;
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
            text-align: center;
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

<div class="row">
    <div class="col-md-4">
        <div class="bg4">
            <?php get_header();?>
            <?php echo do_shortcode('[wpmem_profile]'); ?>
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
