
function restrict_site_to_logged_in_users() {
    if ( !is_user_logged_in() && !is_page('my-account') ) { // صفحه حساب کاربری ووکامرس را استثنا کنید
        wp_redirect( wc_get_page_permalink('myaccount') ); // به صفحه حساب کاربری هدایت می‌شود
        exit;
    }
}
add_action('template_redirect', 'restrict_site_to_logged_in_users');
