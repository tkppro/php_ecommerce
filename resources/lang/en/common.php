<?php

return [
    'form' => [
        'button' => [
            'login' => 'Login',
            'register' => 'Register',
            'send_password_reset' => 'Send password reset link',
            'login' => 'Log In',
            'create' => 'Create',
            'logout' => 'Log out',
            'reset' => 'Reset',
            'submit' => 'Submit',
            'cancel' => 'Cancel',
        ],
        'label' => [
            'remember_me' => 'Remember Me',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email address',
            'password' => 'Password',
            'password_confirm' => 'Confirm password',
            'password_reset' => 'Password reset',
            'address' => 'Address',
            'phone' => 'Phone',
            'birthday' => 'Birthday',
            'comment' => 'Comment',
            'payment_name' => 'Payment',
        ],
    ],
    'header' => [
        'dashboard' => 'Dashboard',
        'logged_in' => 'You are logged in!',
        'login' => 'Login',
        'logout' => 'Logout',
        'register' => 'Register',
        'verify' => 'Verify Your Email Address',
        'reset_password' => 'Reset password',
    ],
    'text' => [
        'no_task' => 'Nothing. Let\'s add some tasks!!',
        'verification_link_reset' => 'A fresh verification link has been sent to your email address.',
        'check_verify' => 'Before proceeding, please check your email for a verification link.',
        'receive_email' => 'If you did not receive the email',
        'request_email' => 'click here to request another',
        'not_purchase' => 'You didn\'t purchase anything',
        'nav' => [
            'brand' => 'T.E-Shopping',
            'home' => 'Home',
            'shop' => 'Shop',
            'account_setting' => 'Account Setting',
            'profile' => 'View profile',
            'cart' => 'Cart',
            'your_cart' => 'Your cart',
            'view_order' => 'View order',
            'checkout' => 'Checkout',
            'total' => 'Total',
            'quantity' => 'Quantity: :qty',
        ],
        'welcome_page' => [
            'heading' => 'Welcome',
            'subheading' => 'Find your favourite product here. Enjoy your shopping time.',
            'see_more' => 'See more',
            'hot' => 'Hot',
            'trend_products' => 'Trend products',
        ],
        'shop_page' => [
            'heading' => 'Welcome',
            'subheading' => 'Find your favourite product here. Enjoy your shopping time.',
            'category' => 'Category',
            'available_product' => 'Available products',
            'buy' => 'Buy now',
            'single_product_page' => [
                'heading' => 'Welcome',
                'subheading' => 'Your happiness today is visitting our shop. Enjoy your shopping time.',
                'product' => 'Product',
                'detail_product' => 'Detail product',
                'no_product' => 'No product to display. Comeback later!',
                'also_like' => 'You might also like',
                'viewed_product' => 'You\'ve recently seen products',
                'in_stock' => ':num in stock',
                'add_to_cart' => 'Add to cart',
                'quantity' => 'Quantity',
                'review' => 'Review',
                'leave_comment' => 'Leave comment',
                'comment' => 'Comment',
                'give_this' => 'Give this product',
                'star' => 'star(s)',
                'no_comment' => 'Nothing. Be the first',
                'commented_at' => 'commented at',
            ],

            'cart_page' => [
                'heading' => 'Be careful',
                'subheading' => 'Check your cart carefully before checkout',
                'check_order_detail' => 'Check your information and order before submit',
                'choose_payment' => 'Choose payment',
                'order_detail' => 'Order detail',
                'order_detail_item' => ':name x :qty',
                'order_note' => 'Note: You can change information in your profile page',
            ],
        ],
        'profile_page' => [
            'heading' => 'Welcome to your profile',
            'subheading' => 'Edit or create your profile and let peoples connect to you.',
            'profile' => 'Profile',
            'history' => 'History',
            'history_order' => 'History Order',
            'request' => 'Product request',
            'user_profile' => 'User profile',
            'history' => 'History',
            'upload_photo' => 'Upload a different photo',
            'choose_file' => 'Choose file',
            'status' => [
                'pending' => 'Pending',
                'accepted' => 'Accepted',
                'rejected' => 'Rejected',
            ],
            'request_empty' => 'Empty. Request something!',
        ],
    ],
    'table' => [
        'date' => 'Date',
        'order_id' => 'Order ID',
        'total' => 'Total',
        'status' => 'Status',
        'product' => 'Product',
        'price' => 'Price',
        'quantity' => 'Quantity',
        'action' => 'Action',
        'product_name' => 'Product name',
        'product_description' => 'Product description',
    ],
    'user' => [
        'update' => [
            'success' => 'Your profile was updated successfully',
        ],
        'request_product' => [
            'success' => 'Your request product has been sent to admin. Wait for response!'
        ],
        'order' => [
            'success' => 'Your order has been ordered successfully. Please check you history order.',
            'fail' => 'Your order has not been ordered yet. Try later.',
            'qty_fail' => 'The stock quantity of product is not enough for this order. Try later!'
        ],
    ],
    'breadcrumb' => [
        'home' => 'Home',
        'shop' => 'Shop',
        'cart' => 'Cart',
    ],
    'cart' => [
        'add_success' => 'Your product has been added successfully',
        'delete_success' => 'Your product was deleted',
        'continue_shopping' => 'Continue shopping',
        'update_cart' => 'Update Cart',
        'proceed_checkout' => 'Proceed to checkout',
        'buy_something' => 'Buy something',
        'total_qty' => 'Total :qty item(s)',
    ],
];
