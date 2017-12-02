<?php include'header.php'?>


<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<?php include'navigation.php'?>


<div class="container">
                    <h5>ADMIN LOGIN</h5>
                    <div class="formLogin" id="formLogin">
                        <div class="row">
                            <div class="container-fluid">
                                <form>
                                    <div class="form-group">
                                        <label class="">Username</label>
                                        <input class="form-control" name="username" id="username" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="">Password</label>
                                        <input class="form-control" name="password" id="password" type="password">
                                        <br class="">
                                    </div>
                                   <a href="admin.php" type="submit" id="btnLogin" class="btn btn-success btn-sm">Login</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
</div>

<?php include'footer.php'?>

