<?php 
session_start();
include("config/dbconfig.php");  // connect to DB
include("includes/header.php");

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    // Sanitize & validate input
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    if (empty($errors)) {
        // Prepare SQL statement to prevent SQL Injection
        $stmt = $connection->prepare("SELECT email, password FROM users WHERE email = ?");
        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();

            // Fetch result
            $result = $stmt->get_result();
            if ($result->num_rows === 1) {
                $user = $result->fetch_assoc();

                // Verify password
                if (password_verify($password, $user['password'])) {
                    // Password matches, create session
                    session_regenerate_id(true);
                    $_SESSION['email'] = $user['email'];

                    // Redirect to dashboard
                    header("Location: ./dashboard.php");
                    exit();
                } else {
                    $errors[] = "Incorrect password.";
                }
            } else {
                $errors[] = "Email not found.";
            }
            $stmt->close();
        } else {
            $errors[] = "Database query failed.";
        }
    }
}
?>

<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-md-4 card p-4">
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" novalidate>
                <div class="mb-3">
                    <?php require_once('errors.php'); ?>
                </div>
                <div class="mb-3 text-center">
                    <h2>BLOG ADMIN</h2>
                </div>
                <div class="mb-3">
                    <input 
                        type="email" 
                        class="form-control" 
                        placeholder="Email Address" 
                        name="email" 
                        required
                        value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                    >
                </div>
                <div class="mb-3">
                    <input 
                        type="password" 
                        class="form-control" 
                        placeholder="Password" 
                        name="password" 
                        required
                    >
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>