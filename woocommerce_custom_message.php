<?php

// Method 1: Display simple message on product page (WooCommerce)
// TruzzBlogg  -  https://youtu.be/SPDQHUXUIyc
// Let's learn how to display custom text/message before short description --- WooCommerce:

add_action( 'woocommerce_before_single_product', 'add_text_message_single_product', 25 );
function add_text_message_single_product(){
    global $product;

    // Show your custom text
    echo '<h2>20% off on ALL PRODUCTS - This offer will expire at March 25. Hurry Up!!!</h2>';    
}



// Method 2 - Fancy and modern text (using "woocommerce-message" class)
// TruzzBlogg  -  https://youtu.be/SPDQHUXUIyc
// Add custom message to Woocommerce cart page - Display message on Product Page
add_action( 'woocommerce_before_single_product', 'shop_message_product_page', 20 );
function shop_message_product_page() {
    // Show your custom text
    echo '<p class="woocommerce-message">Estimated delivery time: 24 - 48 hours - From Monday to Friday.</br>We do not deliver on Saturdays and Sundays to guarantee the freshness of the products.</br>If you have any questions, please contact us: info@mywebsite.com</p>'; 
}






?>