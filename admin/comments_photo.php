<?php include('includes/header.php');
include('includes/header.php');
//dit kan je uit commentaar zetten maar dan moet je telkens opnieuw inloggen
/*if(!$session->is_signed_in()){
    redirect("login.php");
}*/
if(empty($_GET['id'])){
    redirect("photos.php");
}


$comments = Comment::find_the_comment($_GET['id']);
?>
<?php  include ('includes/sidebar.php'); ?>
<?php  include ('includes/content-top.php'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2 class="page-header">
                COMMENTS FOR THIS PHOTO
            </h2>
            <td><a href="add_comment.php" class="btn btn-primary rounded-0"><i class="fas fa-comments">Add Comment</i></a></td>
            <table class="table table-header">
                <thead>
                <tr>


                    <th>Id</th>
                    <th>Author</th>

                    <th>Body</th>
                    <th>Delete?</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($comments as $comment):
                    ?>
                    <tr>
                        <td><?php echo $comment->id; ?></td>
                        <td><?php echo $comment->author; ?></td>
                        <td><?php echo $comment->body; ?></td>
                        <td><a  href="delete_comment_photo.php?id=<?php echo $comment->id; ?>"
                                class="btn btn-danger rounded-0"><i class="far fa-trash-alt"></i></a></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include ('includes/footer.php'); ?>
