<?php
/**
 * Created by PhpStorm.
 * User: HieuUit
 * Date: 6/27/2019
 * Time: 1:34 PM
 */
include('headeradmin.php');
include ('serverInsert_question.php');
?>
<style>
  .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}</style>
<br/><br/>
	<div class="container">
		<h1>Thêm bình chọn</h1>
		<h2 color="red"> <?php include('errors.php'); ?></h2>
        <form action="serverInsert_question.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" required />
            </div>

            <div class="form-group">
                <label for="option">Option</label>
                <textarea rows="5" class="form-control" name="option_question" required ></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="insert_question">
                    Thêm
                </button>
                <button class="btn btn-default">
                    Cancel
                </button>
            </div>

        </form>
    </div>
<br/><br/><br/><br/>



