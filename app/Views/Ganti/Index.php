<?php
 include APPPATH .'views/Header.php';
?>

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
                        <strong style="font-size: 59px;">GANTI </strong><strong style="font-size: 59px; color: #DB00B8;"> PASSWORD</strong>
                    </div>
                    <div>
                        <div>
                            <form action="/login/save" method="post">
                                <div class="form-floating mb-3">
                                        <input class="form-control type="Email" name="email" placeholder="email"/>
                                        <label for="inputEmail">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                        <input class="form-control type="text" name="username" placeholder="Username" />
                                        <label for="inputUsername">Username</label>
                                </div>
                                <div class="form-floating mb-3">
                                        <input class="form-control type="text" name="username" placeholder="Username" />
                                        <label for="inputUsername">Old Password</label>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control name="password" autocomplete="off" id="inputPassword" type="password" placeholder="Create a password" />
                                            <label for="inputPassword">New Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="pass_confirm" autocomplete="off" id="inputPasswordConfirm" type="password" placeholder="Repeat password" />
                                            <label for="inputPasswordConfirm">Confirm New Password</label>
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
                        <div><a href="/" tabindex="-1" role="button" style="margin-left:12px" aria-disabled="true">Kembali Ke Login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>
  </div>
</div>