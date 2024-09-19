<!-- Login Section -->
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-lg-5 col-md-8">
        <div class="card shadow-lg p-4">
            <h3 class="text-center mb-4 text-white">Login</h3>
            <form action="login_process.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label text-white">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-white">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="mt-3 text-center">
                    <a href="#" class="text-white">Forgot password?</a>
                </div>
            </form>
        </div>
    </div>
</div>