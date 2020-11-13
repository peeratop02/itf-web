<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<?php 
    $name = $_GET['name'];
    $comment = $_GET['comment'];
    $link = $_GET['link'];

?>
<body>
    <div class="contact-clean">
        <form action = "insert.php" method="post" id="CommentForm">
            <h2 class="text-center">Edit <?php echo $name; ?></h2>
            <div class="form-group"><input class="form-control" type="text" name="name" id="idName" placeholder="<?php echo $name; ?>"></div>
            <div class="form-group"><textarea class="form-control" name="comment" id="idComment" placeholder="<?php echo $comment; ?>" rows="14"></textarea><input class="form-control" type="text" name="link" id="idLink" placeholder="<?php echo $link; ?>"></div>
            <div class="form-group"><button class="btn btn-primary" type="submit" id="commentBtn">submit</button><a class="btn btn-primary" role="button" href="show.php" style="margin-left: 145px;padding-left: 16px;padding-right: 16px;background: rgb(210,49,155);">view database</a></div>
            
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>