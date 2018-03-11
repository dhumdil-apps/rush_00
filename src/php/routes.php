<?php
	
	$url = $_SERVER['REQUEST_URI'];
	$file_path = $_SERVER['SCRIPT_FILENAME'];
	$pattern = '/(.*)('. preg_replace('/(\/)/', '\/', $url) .')/';

	// Redirect current path to root (Remove current path from route)
	preg_match($pattern, $file_path, $matches);

	if (isset($matches[0]))
	{
		$url = preg_replace($pattern, '/', $file_path);
	}

	// API
	var_dump($url);
	$layout = '';

	switch ($url)
	{

		case '/':
			$layout = './src/layouts/categories_layout.php';
			require('./src/php/categories.php');
			break;

		// Categories
		case '/index.php':
			$layout = './src/layouts/categories_layout.php';
			require('./src/php/categories.php');
			break;

		// List of Products
		case '/products':
			$layout = './src/layouts/products_layout.php';
			require('./src/php/products.php');
			break;

		// Product Information
		case '/product':
			$layout = './src/layouts/product_layout.php';
			require('./src/php/product.php');
			break;

		// Cart
		case '/cart':
			$layout = './src/layouts/cart_layout.php';
			require('./src/php/cart.php');
			break;

		// User Profile
		case '/profile':
			$layout = './src/layouts/profile_layout.php';
			require('./src/php/profile.php');
			break;

		// Invoice History
		case '/invoice-history':
		$layout = './src/layouts/invoice-history_layout.php';
			require('./src/php/invoice-history.php');
			break;

		// Edit Profile
		case '/edit-profile':
			$layout = './src/layouts/edit-profile_layout.php';
			require('./src/php/edit-profile.php');
			break;

		// Login
		case '/login':
			$layout = './src/layouts/login_layout.php';
			require('./src/php/login.php');
			break;

		// Register
		case '/register':
			$layout = './src/layouts/register_layout.php';
			require('./src/php/register.php');
			break;

		// Logout - index.php (categories)
		case '/logout':
			require('./src/php/logout.php');
			break;

		// 404 - Page not Found
		default:
			$layout = './src/layouts/error_layout.php';
			break;
	}
