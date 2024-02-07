<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="login-container" action="?action=customerLogin" method="POST">
                <div class="form-group mb-2">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group mb-2">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>

                <button type="submit" class="btn btn-primary mb-2">Login</button>
            </form>
        </div>
    </div>
</div>
