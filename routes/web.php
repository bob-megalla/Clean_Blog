<?php
session_start();

require_once(BASE_PATH . 'core/connection.php');
require_once(BASE_PATH . 'core/database.php');
$setting = getSettings("settings");
// dd($setting);


if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case "home":
            $page_name = $setting['site_name'];
            require_once BASE_PATH . 'controllers/user/home.php';
            break;
        case "about":
            $page_name = $setting['about_title'];
            require_once BASE_PATH . 'controllers/user/about.php';
            break;
        case "contact":
            $page_name = $setting['contact_title'];
            require_once BASE_PATH . 'controllers/user/contact.php';
            break;
        case "posts":
            $page_name = "Posts";
            require_once BASE_PATH . 'controllers/user/posts.php';
            break;
        case "post":
            $page_name = "Post";
            require_once BASE_PATH . 'controllers/user/post.php';
            break;
        case "login":
            require_once BASE_PATH . 'controllers/auth/login.php';
            break;
        case "send_message":
            require_once BASE_PATH . 'controllers/user/send_message.php';
            break;
        case "add_comment":
            require_once BASE_PATH . 'controllers/user/add_comment.php';
            break;

        default:
            require_once BASE_PATH . 'views/errors/404.php';

    }




} elseif (isset($_GET['admin']) && isset($_SESSION['user_id'])) {
    $admin_page = $_GET['admin'];
    switch ($admin_page) {
        case "logout":
            require_once BASE_PATH . 'controllers/admin/logout.php';
            break;
        case "dashboard":
            $active_id = 0;
            $page_name = 'dashboard';
            require_once BASE_PATH . 'controllers/admin/dashboard.php';
            break;
        case "posts":
            $active_id = 1;
            $page_name = "Posts";
            require_once BASE_PATH . 'controllers/admin/posts.php';
            break;

        case "messages":
            $active_id = 2;
            $page_name = 'Messages';
            require_once BASE_PATH . 'controllers/admin/messages.php';
            break;
        case "categories":
            $active_id = 3;
            $page_name = 'Categories';
            require_once BASE_PATH . 'controllers/admin/categories.php';
            break;
        case "users":
            $active_id = 4;
            $page_name = 'Users';
            require_once BASE_PATH . 'controllers/admin/users.php';
            break;
        case "settings":
            $active_id = 5;
            $page_name = 'Users';
            require_once BASE_PATH . 'controllers/admin/settings.php';
            break;
        case "store-settings":
            $active_id = 5;
            $page_name = 'Settings';
            require_once BASE_PATH . 'controllers/admin/settings/store-settings.php';
            break;

        case "add-post":
            $active_id = 1;
            require_once BASE_PATH . 'controllers/admin/posts/show-store-post.php';
            break;
        case "store-post":
            $active_id = 1;
            require_once BASE_PATH . 'controllers/admin/posts/store-post.php';
            break;
        case "delete-post":
            $active_id = 1;
            require_once BASE_PATH . 'controllers/admin/posts/delete-post.php';
            break;
        case "edit-post":
            $active_id = 1;
            require_once BASE_PATH . 'controllers/admin/posts/show-edit-post.php';
            break;
        case "save-edit-post":
            $active_id = 1;
            require_once BASE_PATH . 'controllers/admin/posts/edit-post.php';
            break;
        case "show_store_categories":
            $active_id = 3;
            require_once BASE_PATH . 'controllers/admin/categories/show_store_categories.php';
            break;
        case "store_category":
            $active_id = 3;
            require_once BASE_PATH . 'controllers/admin/categories/store-category.php';
            break;
        case "delete_category":
            $active_id = 3;
            require_once BASE_PATH . 'controllers/admin/categories/delete_category.php';
            break;
        case "show_edit_category":
            $active_id = 3;
            require_once BASE_PATH . 'controllers/admin/categories/show_edit_category.php';
            break;
        case "edit_category":
            $active_id = 3;
            require_once BASE_PATH . 'controllers/admin/categories/edit_category.php';
            break;
        case "delete_user":
            $active_id = 3;
            require_once BASE_PATH . 'controllers/admin/users/delete_user.php';
            break;
        case "show_edit_user":
            $active_id = 4;
            require_once BASE_PATH . 'controllers/admin/users/show_edit_user.php';
            break;
        case "edit_user":
            $active_id = 4;
            require_once BASE_PATH . 'controllers/admin/users/edit_user.php';
            break;
        case "add_user":
            $active_id = 4;
            require_once BASE_PATH . 'controllers/admin/users/show_store_users.php';
            break;
        case "store_user":
            $active_id = 4;
            require_once BASE_PATH . 'controllers/admin/users/store-users.php';
            break;
        case "delete_message":
            $active_id = 2;
            require_once BASE_PATH . 'controllers/admin/messages/delete-message.php';
            break;

        case "read_message":
            $active_id = 2;
            require_once BASE_PATH . 'controllers/admin/messages/read_message.php';
            break;
        case "comments":
            $active_id = 6;
            $page_name = 'comments';
            require_once BASE_PATH . 'controllers/admin/comments.php';
            break;
        case "delete_comment":
            $active_id = 6;
            require_once BASE_PATH . 'controllers/admin/comments/delete_comment.php';
            break;

        case "read_comment":
            $active_id = 6;
            require_once BASE_PATH . 'controllers/admin/comments/read_comment.php';
            break;
        default:
            require_once BASE_PATH . 'views/errors/404.php';

    }
} else {
    $page_name = $setting['site_name'];
    require_once BASE_PATH . 'controllers/user/home.php';
    // echo "404";
}
