<?php if (isset($_SESSION['usernames']) && isset($_SESSION['userlevel'])) { ?>

<div>
  <a class="btn btn-primary" href="http://localhost/trieu.com/index.php?action=insert" role="button">Insert</a>
  <a class="btn btn-primary" href="http://localhost/trieu.com/index.php?action=update" role="button">Update</a>
  <a class="btn btn-primary" href="http://localhost/trieu.com/index.php?action=delete" role="button">Delete</a>
</div>

<?php } ?>
