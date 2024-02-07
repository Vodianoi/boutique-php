<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="signup-form" action="?action=customerCreate" method="POST">
                <div class="form-group mb-2">
                    <label for="firstname">Firstname:</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                </div>

                <div class="form-group mb-2">
                    <label for="lastname">Lastname:</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                </div>

                <div class="form-group mb-2">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group mb-2">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <button type="submit" class="btn btn-primary mb-2">Sign Up</button>
            </form>
        </div>
    </div>
</div>
