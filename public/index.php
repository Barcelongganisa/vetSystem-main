<?php
$routes = [];

// Define the route function
function route(string $path, callable $callback) {
    global $routes;
    $routes[$path] = $callback;
}

// Define the run function to match routes
function run() {
    global $routes;

    // Normalize the request URI
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri = rtrim($uri, '/');
    $uri = $uri === '' ? '/' : $uri;

    foreach ($routes as $path => $callback) {
        if ($path !== $uri) continue;

        // Call the matching callback
        $callback();
        return;
    }

    http_response_code(404);
    echo "404 Not Found";
}

// Define routes
route('/', function () {
    include __DIR__ . '/../resource/view/landing.php';
});

route('/register', function () {
    include __DIR__ . '/../resource/view/register.php';
});

route('/register', function () {
    include __DIR__ . '/../resource/view/register.php';
});

route('/process-signup', function () {
    include __DIR__ . '/../resource/view/auth/process-signup.php';
});

route('/signup-success', function () {
    include __DIR__ . '/../resource/view/layout/signup-success.php';
});

route('/activate-account', function () {
    include __DIR__ . '/../resource/view/auth/activate-account.php';
});

route('/otp-verify', function () {
    include __DIR__ . '/../resource/view/layout/otp-verify.php';
});

route('/logout', function () {
    include __DIR__ . '/../resource/view/auth/logout.php';
});

route('/forgot-password', function () {
    include __DIR__ . '/../resource/view/layout/forgot-password.php';
});

route('/send-password-reset', function () {
    include __DIR__ . '/../resource/view/auth/send-password-reset.php';
});
route('/userdash', function () {
    include __DIR__ . '/../resource/view/userdash.php';
});
route('/admindash', function () {
    include __DIR__ . '/../resource/view/admindash.php';
});

// Run the routing logic
run();
