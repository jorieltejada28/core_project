<?php 

    $page = isset($_GET['page']) ? $_GET['page'] : '' ;

    switch ($page) {
        case "dashboard":
            $page_title = "Dashboard";
            break;
        case "profile":
            $page_title = "Profile";
            break;
        case "settings":
            $page_title = "Settings";
            break;
        default:
            $page_title = "My Website";
    }
?>