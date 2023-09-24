<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

/*Home Page*/
$route['default_controller'] = 'home';
$route['products'] = 'Home/productpage';
$route['product-details/(.+)'] = 'Home/product_details/$1';
$route['show-post-by-brand-id/(.+)'] = 'Home/show_post_by_brand_id/$1';
$route['show-post-by-sub-cat-id/(.+)'] = 'Home/show_post_by_sub_cat_id/$1';
$route['show-post-by-cat-id/(.+)'] = 'Home/show_post_by_cat_id/$1';
$route['show-product-by-price-range'] = 'Home/show_product_by_price_range';
$route['contact'] = 'Home/contact_page';
$route['contact-form'] = 'Home/insert_contact_info';

// sathibabu
$route['imported-cheese'] = 'Home/show_products_by_category';
$route['indian-cheese'] = 'Home/show_products_by_category';
$route['cold-cuts'] = 'Home/show_products_by_category';
$route['canned-meat'] = 'Home/show_products_by_category';
$route['ambient-products'] = 'Home/show_products_by_category';
$route['nuts'] = 'Home/show_products_by_category';

$route['cheese/search-filters'] = 'Home/show_products_by_sub_filters';
$route['meat/search-filters'] = 'Home/show_products_by_sub_filters';
$route['more/search-filters'] = 'Home/show_products_by_sub_filters';
$route['brand/search-filters'] = 'Home/show_products_by_brand_filters';



$route['cheese/(:any)'] = 'Home/show_products_by_sub_category';
$route['meat/(:any)'] = 'Home/show_products_by_sub_category';
$route['more/(:any)'] = 'Home/show_products_by_sub_category';

$route['set_search_session'] = 'Home/set_search_session';
$route['set_brand_search_session'] = 'Home/set_brand_search_session';

$route['horeca/(:any)'] = 'Home/show_horeca_by_category';
// $route['horeca/ambient-products'] = 'Home/show_horeca_by_category';
// $route['horeca/imported-products'] = 'Home/show_horeca_by_category';
// $route['horeca/meat-products'] = 'Home/show_horeca_by_category';
$route['horeca/(:any)/(:any)'] = 'Home/show_horeca_by_sub_category';

// sathibabu


// Contact Form
$route['contact-message-list'] = 'Contact/get_all_contact_message';
$route['delete-contact/(.+)'] = 'Contact/delete_contact_by_id/$1';
$route['view-contact/(.+)'] = 'Contact/view_contact_by_id/$1';
$route['replay-contact/(.+)'] = 'Contact/replay_contact_by_id/$1';



/*Admin Panel*/
$route['dashboard'] = 'Admin/admindashboard';
$route['register-form'] = 'Admin/registerform';
$route['add-category'] = 'Category/add_category_form';
$route['add-sub-category'] = 'Category/add_sub_category_form';
$route['save-category'] = 'Category/save_category';
$route['save-sub-category'] = 'Category/save_sub_category';
$route['category-list'] = 'Category/show_category_list';
$route['sub-category-list'] = 'Category/show_sub_category_list';
$route['edit-category/(.+)'] = 'Category/edit_category/$1';
$route['edit-sub-category/(.+)'] = 'Category/edit_sub_category/$1';
$route['update-category/(.+)'] = 'Category/update_category/$1';
$route['update-sub-category/(.+)'] = 'Category/update_sub_category/$1';
$route['delete-category/(.+)'] = 'Category/delete_category/$1';
$route['delete-sub-category/(.+)'] = 'Category/delete_sub_category/$1';
/*Brand*/
$route['add-brand'] = 'Brand/add_brand_form';
$route['save-brand'] = 'Brand/save_brand';
$route['brand-list'] = 'Brand/show_brand_list';
$route['edit-brand/(.+)'] = 'Brand/edit_brand/$1';
$route['update-brand/(.+)'] = 'Brand/update_brand/$1';
$route['delete-brand/(.+)'] = 'Brand/delete_brand/$1';
/*Client*/
$route['add-client'] = 'Client/add_client_form';
$route['save-client'] = 'Client/save_client';
$route['client-list'] = 'Client/show_client_list';
$route['edit-client/(.+)'] = 'Client/edit_client/$1';
$route['update-client/(.+)'] = 'Client/update_client/$1';
$route['delete-client/(.+)'] = 'Client/delete_client/$1';

/*Product*/
$route['add-product'] = 'Product/add_product_form';
$route['product-list'] = 'Product/show_product_list';
$route['save-product'] = 'Product/insert_product';
$route['edit-product/(.+)'] = 'Product/edit_product/$1';
$route['update-product'] = 'Product/update_product';
$route['delete-product/(.+)'] = 'Product/delete_product/$1';

// Cart Class
$route['add-to-cart'] = 'Cart/add_to_cart';
$route['show-cart'] = 'Cart/show_cart';
$route['delete-to-cart/(.+)'] = 'Cart/delete_to_cart/$1';
$route['update-cart-qty'] = 'Cart/update_cart_quantity';
$route['update-cart-qty-payment'] = 'Cart/update_cart_quantity_payment';
$route['delete-to-cart-payment/(.+)'] = 'Cart/delete_to_cart_payment/$1';
// Checkout
$route['checkout'] = 'Checkout/checkout';
$route['ccavenue'] = 'Checkout/ccavenue';
// $route['my-account'] = 'Checkout/my_account';
$route['my-account'] = 'Checkout/my_login';
$route['my-orders'] = 'Home/my_orders';
$route['my-login'] = 'Checkout/my_login';
$route['customer-registration'] = 'Checkout/customer_registration';
$route['my-registration'] = 'Checkout/my_registration';
$route['customer-login'] = 'Checkout/customer_login';
$route['billing'] = 'Checkout/billing';
$route['shipping'] = 'Checkout/shipping';
$route['update-billing'] = 'Checkout/update_billing';
$route['insert-shipping'] = 'Checkout/insert_shipping';
$route['payment'] = 'Checkout/payment';
$route['place-order'] = 'Checkout/place_order';
$route['logout'] = 'Checkout/customer_logout';
$route['order-success'] = 'Checkout/order_success';


// Search
$route['search'] = 'Search/index';

$route['welcome'] = 'Welcome/PaytmGateway';

// Invoice
$route['manage-order'] = 'Invoice/manage_order';
$route['view-order/(.+)'] = 'Invoice/view_order/$1';
$route['delete-order/(.+)'] = 'Invoice/delete_order/$1';



$route['404_override'] = 'Home/_404_page';
$route['translate_uri_dashes'] = FALSE;

//productpage
$route['product-page'] = 'Home/product_page';

//about page
$route['about-us'] = 'Home/about_us';
$route['faq'] = 'Home/faq';
$route['terms'] = 'Home/terms';
$route['privacy'] = 'Home/privacy';
$route['delivery'] = 'Home/delivery';

$route['mail'] = 'Home/phpmailer';
$route['forget-password'] = 'Home/forget_password';
$route['postpass'] = 'Home/reset_password';
$route['new_password'] = 'Home/new_password';
$route['change_password'] = 'Home/change_password';
$route['confirm-account/(.+)'] = 'Home/confirm_account/$1';
$route['change-pass/(.+)'] = 'Home/change_pass/$1';
$route['search-by'] = 'Home/search_by';
$route['horeco-contact'] = 'Home/horeco_contact';

//about news letter
$route['news-letter'] = 'Home/news_letter';
$route['news'] = 'Admin/news';

//about horeca
$route['add-horeca'] = 'Horeca/add_horeca_form';
$route['edit-horeca/(.+)'] = 'Horeca/edit_horeca_form/$1';
$route['save-horeca'] = 'Horeca/save_horeca';
$route['update-horeca/(.+)'] = 'Horeca/update_horeca/$1';
$route['delete-horeca/(.+)'] = 'Horeca/delete_horeca_by_id/$1';
$route['horeca-list'] = 'Horeca/show_horeca_list';

//about cheese by weight
$route['cheese-by-weight'] = 'Home/cheese_by_weight';

$route['meat-by-weight'] = 'Home/meat_by_weight';
