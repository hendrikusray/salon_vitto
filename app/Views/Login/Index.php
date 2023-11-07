<?php
// Include the header file
 include APPPATH .'views/Header.php';
?>
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
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
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
                    <button type="button" class="btn btn-primary" style="--bs-btn-padding-y: 0.49rem; --bs-btn-padding-x: 18.5rem;">MASUK</button>
                    <div> 
                        <div>Belum Punya Akun?<a href="/register" tabindex="-1" role="button" style="margin-left:12px" aria-disabled="true">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
