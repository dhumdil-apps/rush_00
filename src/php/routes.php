<?php

	$url = $_SERVER['REQUEST_URI'];
	$layout = '';

<<<<<<< HEAD
	// Redirect 'base_urls' to root
	$base_urls = array('htdocs');

	// Find 'base_urls' and remove them from the main route
	foreach ($base_urls as $key => $value)
	{
		preg_match('/(.*)(\/'. $value .')/', $url, $matches);

		if (isset($matches[0]))
		{
			if ($matches[0] == '/'.$value)
			{
				$url = preg_replace('/(.*)(\/'. $value .')/', '', $url);
			}
		}
	}

	// If empty, add '/'
	if ($url == '')
	{
		$url = '/';
	}

=======
>>>>>>> 83a6e6180ccdd06469bd02249d1e0a1499c4c60a
	switch ($url)
	{
		// Categories
		case '/':
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
