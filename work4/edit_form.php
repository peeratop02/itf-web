<!DOCTYPE html>
<html>
<?php 
    $name = $_GET['name'];
    $comment = $_GET['comment'];
    $link = $_GET['link'];
    $id = $_GET['id'];

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Editing <?php echo $name;?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="contact-clean">
        <form action = "edit.php" method="post" id="CommentForm">
            <h2 class="text-center">Edit <?php echo $name; ?></h2>
            <div class="form-group"><input class="form-control" type="text" name="NewName" id="idNewName" value="<?php echo $name; ?>"></div>
            <div class="form-group"><textarea class="form-control" name="NewComment" id="idNewComment" rows="14"><?php echo $comment; ?></textarea></div><input class="form-control" type="text" name="NewLink" id="idNewLink" value="<?php echo $link; ?>">
            <div class="form-group"><button class="btn btn-primary" type="submit" id="commentBtn">SAVE</a></div>

        </form>
        <div class="text-center" style="margin-top: 10px;">
            <a type="button" class="btn btn-primary" href="show.php">BACK</a>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>