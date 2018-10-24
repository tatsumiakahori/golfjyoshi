<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" content="initial-scale=1.0">
</head>

<style>
    
    body{
        margin-top:100px;
    }
    
    legend {
        border: 1px solid black;
        margin: 20px;
        text-align: center;
        padding: 10px;
    }

    .form label {
        text-align: center;
        margin: 0 auto;
        display: block;
    }

    fieldset {
        border: none;
    }

    .text {
        text-align: center;
        margin: 0 auto;
        display: block;
        margin: 20px 0 0;
    }

    .textbox {
        border-radius: 3px;
        width:150px;
        line-height: 1.2em;
    }

    .div_text {
        text-align: center;
    }

    .button_div {
        text-align: center;
        margin: 10px;
        width:150px;
    }

    .buttons {
        background: #b2eae1;
        color: #fff;
        font-size: 15px;
        padding: 5px;
        border-radius: 4px;
        box-shadow: none;
        border: none;
    }

    .req-text {
        text-align: center;
    }

    ul {
        list-style-type: none;
    }

</style>

<?php echo do_shortcode('[wpmem_form login]'); ?>
