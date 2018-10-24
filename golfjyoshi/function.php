<? php
    
    function custom_scripts() {
  wp_enqueue_script('function', 'https://code.jquery.com/jquery-3.1.1.min.js');
}
add_action('wp_enqueue_scripts', 'custom_scripts');
    
// jQuery読み込みを停止
add_action('wp_print_scripts', 'deregister_script', 100);
function deregister_script() {
  wp_deregister_script('jquery');
}


?>
