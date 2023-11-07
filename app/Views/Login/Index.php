<?php
// Include the header file
include APPPATH . 'views/Header.php';
?>

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
<!-- CONTENT -->
<div class="container text-center mt-5">
    <div class="row">
        <div class="col">
            <img src="https://i.ibb.co/rwCFS2K/205fc734-39cc-4f99-984d-2c856fad43bf.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col mt-5">
            <div class="mt-5 mb-3">
                <strong style="font-size: 59px;">SELAMAT </strong><strong style="font-size: 59px; color: #DB00B8;"> DATANG</strong>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input class="form-control" id="floatingInput" placeholder="Masukan username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3 password-container">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                <div class="password-toggle-icon" onclick="togglePasswordVisibility('floatingPassword')">
                    <i class="fa-solid fa-eye-slash"></i>
                </div>
            </div>
            <div>
                <div style="margin-bottom:12px">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked" style="margin-right:180px; font-size:15px">
                                        INGAT SAYA
                                    </label>
                                </div>
                            </div>
                            <div class="col" style="text-align: right">
                                <a href="/ganti" tabindex="-1" role="button" style="margin-left:12px" aria-disabled="true">Ganti Password</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-primary" id="loginBtn" style="--bs-btn-padding-y: 0.49rem; --bs-btn-padding-x: 18.5rem;">MASUK</button>
                    <div>
                        <div>Belum Punya Akun?<a href="/register" tabindex="-1" role="button" style="margin-left:12px" aria-disabled="true">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include APPPATH . 'views/Footer.php';
?>
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
    $(document).ready(function() {
        $("#loginBtn").click(function() {
            var email = $("#floatingInput").val();
            var password = $("#floatingPassword").val();

            $.ajax({
                type: "POST",
                url: "<?= base_url('member/login') ?>",
                data: {
                    email: email,
                    password: password
                },
                success: function(response) {
                    if (response.success) {
                        window.location.href = "/crm/layanan"; // Redirect to dashboard upon successful login
                    } else {
                        console.error("Login failed:", response.error);
                        Toastify({
                            text: response.error,
                            duration: 3000, // Duration in milliseconds
                            close: true,
                            gravity: "top", // bottom right corner
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #e74c3c, #c0392b)", // Customize the background color
                            stopOnFocus: true,
                        }).showToast();
                    }
                },
                error: function(error) {
                    console.error("Error during login", error);
                }
            });
        });
    });
</script>
</body>

</html>