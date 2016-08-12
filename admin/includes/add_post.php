<?php

if(isset($_POST['create_post'])){
  $post_title = $_POST['title'];
  $post_author = $_POST['author'];
  $post_category_id = $_POST['post_category_id'];
  $post_status = $_POST['post_status'];

  $post_image = $_FILES['image']['name'];
  $post_image_temp = $_FILES['image']['tmp_name'];

  $post_tags = $_POST['post_tags'];
  $post_content = $_POST['post_content'];
  $post_date = date('d-m-y');
  $post_comment_count = 4;

  move_uploaded_file($post_image_temp, "../images/$post_image");

  $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image,
  post_content, post_tags, post_comment_count, post_status) ";

  $query .= "VALUES('{$post_category_id}', '{$post_title}', '{$post_author}', now(), '{$post_image}',
  '{$post_content}', '{$post_tags}', '{$post_comment_count}', '{$post_status}' )";

  $create_post_query = mysqli_query($connection, $query);

  $confirm($create_post_query);
}

 ?>

<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Post Title</label>
    <input type="text" name="title" class="form-control">
  </div>

  <div class="form-group">
    <label for="title">Post Category</label>
    <input type="text" name="post_category_id" class="form-control">
  </div>

  <div class="form-group">
    <label for="title">Author</label>
    <input type="text" name="author" class="form-control">
  </div>

  <div class="form-group">
    <label for="title">Post Status</label>
    <input type="text" name="post_status" class="form-control">
  </div>

  <div class="form-group">
    <label for="title">Post Image</label>
    <input type="file" name="image">
  </div>

  <div class="form-group">
    <label for="title">Post Tags</label>
    <input type="text" name="post_tags" class="form-control">
  </div>

  <div class="form-group">
    <label for="title">Post Content</label>
    <textarea name="post_content" id="" cols="30" rows="10" class="form-control">
    </textarea>
  </div>

  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
  </div>
</form>
