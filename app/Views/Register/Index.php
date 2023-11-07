<?php include APPPATH . 'views/Header.php'; ?>

<style>
    .password-container {
        position: relative;
    }

    .password-toggle-icon {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
    }
</style>

<div class="container text-center">
    <div class="row">
        <div class="col">
            <img src="https://i.ibb.co/rwCFS2K/205fc734-39cc-4f99-984d-2c856fad43bf.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="mt-5">
                                <strong style="font-size: 59px;">DAFTAR </strong><strong style="font-size: 59px; color: #DB00B8;"> AKUN</strong>
                            </div>
                            <div>
                                <div>
                                    <form id="registrationForm" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="email" name="email" placeholder="email" required />
                                            <label for="inputEmail">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="username" placeholder="Username" required />
                                            <label for="inputUsername">Username</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0 password-container">
                                                    <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Create a password" required />
                                                    <label for="inputPassword">Password</label>
                                                    <div class="password-toggle-icon" onclick="togglePasswordVisibility('inputPassword')">
                                                        <i class="fa-solid fa-eye-slash"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0 password-container">
                                                    <input class="form-control" name="pass_confirm" id="inputPasswordConfirm" type="password" placeholder="Repeat password" required />
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                    <div class="password-toggle-icon" onclick="togglePasswordVisibility('inputPasswordConfirm')">
                                                        <i class="fa-solid fa-eye-slash"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div>
                                    <div>Sudah Punya Akun?<a href="/" tabindex="-1" role="button" style="margin-left:12px" aria-disabled="true">Kembali Ke Login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<?php include APPPATH . 'views/Footer.php'; ?>

<script>
    function togglePasswordVisibility(inputId) {
        var passwordInput = $("#" + inputId);
        var passwordToggleIcon = passwordInput.closest(".password-container").find(".password-toggle-icon");

        // Toggle the password visibility
        if (passwordInput.attr("type") === "password") {
            passwordInput.attr("type", "text");
            passwordToggleIcon.html('<i class="fa-solid fa-eye"></i>');
        } else {
            passwordInput.attr("type", "password");
            passwordToggleIcon.html('<i class="fa-solid fa-eye-slash"></i>');
        }
    }

    function checkPasswordMatch() {
            var password = $("#inputPassword").val();
            var confirmPassword = $("#inputPasswordConfirm").val();

            if (password != confirmPassword) {
                $("#inputPasswordConfirm").get(0).setCustomValidity("Passwords do not match");
            } else {
                $("#inputPasswordConfirm").get(0).setCustomValidity("");
            }
    }

    $(document).ready(function () {
        $("#inputPassword, #inputPasswordConfirm").on("input", checkPasswordMatch);
        $("#registrationForm").submit(function (e) {
            e.preventDefault();

            // Check if the form is valid
            if (this.checkValidity()) {
                var formData = $(this).serialize();

                // Perform an AJAX request
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('member/post') ?>",
                    data: formData,
                    success: function (response) {
                        // Handle the success response
                        if (response.success) {
                            // Show a small notification in the bottom right corner
                            Toastify({
                                text: "Registration successful!",
                                duration: 3000, // Duration in milliseconds
                                close: true,
                                gravity: "top", // bottom right corner
                                position: "right",
                                backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)", // Customize the background color
                                stopOnFocus: true,
                                callback: function () {
                                    // Redirect to the index page after the notification is shown
                                    window.location.href = "/";
                                }
                            }).showToast();
                        } else {
                            // Handle other logic for unsuccessful registration
                            console.error("Registration failed:", response.error);
                        }
                        // You can add additional logic here based on the server response
                    },
                    error: function (error) {
                        // Handle the error response
                        console.log(error);
                        // You can add additional error handling logic here
                    }
                });
            } else {
                // If the form is not valid, you can add your own logic or display an error message
                console.log("Form is not valid");
            }
        });
    });
</script>
