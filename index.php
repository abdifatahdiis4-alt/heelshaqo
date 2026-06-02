<?php
// ============================================
// HEELSHAQO - Main Entry Point
// ============================================

// Start session
session_start();

// Load configuration
require_once 'src/config/constants.php';
require_once 'src/config/database.php';

// Load helpers
require_once 'src/helpers/functions.php';
require_once 'src/helpers/SecurityHelper.php';
require_once 'src/helpers/ValidationHelper.php';

// Load middleware
require_once 'src/middleware/CsrfMiddleware.php';
require_once 'src/middleware/AuthMiddleware.php';

// Redirect to homepage
header('Location: ' . BASE_URL . '/public/home.php');
exit();