<?php 
session_start();
include("config/dbconfig.php");  
include("includes/header.php");

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
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
        $stmt = $connection->prepare("SELECT email, password FROM admin WHERE email = ?");
        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows === 1) {
                $user = $result->fetch_assoc();

                if (password_verify($password, $user['password'])) {
                    session_regenerate_id(true);
                    $_SESSION['email'] = $user['email'];
                    header("Location: dashboard.php");
                    exit();
                } else {
                    $errors[] = "Incorrect password.";
                }
            } else {
                $errors[] = "No account found with that email.";
            }
            $stmt->close();
        } else {
            $errors[] = "Something went wrong. Please try again.";
        }
    }
}
?>

<!-- Main Login Container -->
<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100 bg-light">
  <div class="col-md-5 col-lg-4">
    <div class="card shadow-sm border-0">
      <div class="card-body">
        <div class="text-center mb-4">
          <h3 class="text-primary fw-bold">Admin Login</h3>
          <p class="text-muted small">Welcome back! Please sign in to continue.</p>
        </div>

        <!-- Error Display -->
        <?php if (!empty($errors)): ?>
          <div class="alert alert-danger">
            <ul class="mb-0">
              <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>

        <!-- Login Form -->
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" novalidate>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input 
              type="email" 
              id="email"
              name="email"
              class="form-control" 
              placeholder="Enter your email" 
              value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
              required
            >
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input 
              type="password" 
              id="password"
              name="password"
              class="form-control" 
              placeholder="Enter your password" 
              required
            >
          </div>

          <div class="d-grid mb-3">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
          </div>

          <div class="text-center">
            <small class="text-muted">Forgot your password? Contact your system admin.</small>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>