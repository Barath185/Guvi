<?php

// Check if the user is authenticated
function is_authenticated()
{
    return isset($_SESSION['id']);
}

// Check authentication for AJAX requests
function require_authentication()
{
    if (!is_authenticated()) {
        http_response_code(401); // Unauthorized
        exit();
    }
}
require_authentication();