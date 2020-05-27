<?php include('includes/header.php');
//dit kan je uit commentaar zetten maar dan moet je telkens opnieuw inloggen
/*if(!$session->is_signed_in()){
    redirect("login.php");
}*/


//$users = User::find_all();
/*if(empty($_GET['id'])){
    redirect('users.php');
}else{
    $user = User::find_by_id($_GET['id']);*/
$user = new User();
if (isset($_POST['submit'])) {
    if ($user) {
        $user->username = $_POST['username'];
        $user->first_name = $_POST['first_name'];
        $user->last_name = $_POST['last_name'];
        $user->password = $_POST['password'];
        $user->set_file($_FILES['file']);
        $user->save_user_and_image();
    }


}


?>

<?php include('includes/sidebar.php'); ?>
<?php include('includes/content-top.php'); ?>


<!--//html van alle users-->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2 class="page-header">
                WELKOM OP DE ADD USER PAGINA
            </h2>

            <form action="add_user.php?id=<?php echo $user->id; ?>" method="post">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>">
                    </div>
                    <!--  <div class="form-group">
                        <a href="#" class="thumbnail"><img src="<?php /*echo $photo->picture_path(); */ ?>" alt=""></a>
                    </div>-->
                    <div class="form-group">
                        <label for="first_name">First name</label>
                        <input type="text" name="first_name" class="form-control"
                               value="<?php echo $user->first_name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last name</label>
                        <input type="text" name="last_name" class="form-control"
                               value="<?php echo $user->last_name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="file">User Image</label>
                        <input type="file" name="file" class="form-control" value="">
                    </div>
                    <input type="submit" name="submit" value="Add User" class="btn btn-primary">
                </div>


        </div>


        </form>

    </div>
</div>
</div>

<?php
include('includes/footer.php');
?>

