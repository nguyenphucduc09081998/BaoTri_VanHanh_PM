<?php
/**
 * Created by PhpStorm.
 * User: HieuUit
 * Date: 6/27/2019
 * Time: 5:46 PM
 */
include ('connect.php');
include ('headeradmin.php');
$queryQuestion = "SELECT * FROM question";
$allQuestion = mysqli_query($db,$queryQuestion);

if(mysqli_num_rows($allQuestion) > 0){
?>
    <div class="container">
        <form  class="border border-success" method="POST" action="update_question.php" enctype="multipart/form-data">
            <div class="form-group">
                <header class="bg-success text-center" > <h2>Chọn câu hỏi muốn bình chọn</h2></header>

            </div>
            <?php
            while($rsQuesstion = mysqli_fetch_array($allQuestion)){
                ?>
                <div class ="form-group">
                    <?php if( $rsQuesstion["is_flag"] == "1"):?>
                        <input type="hidden" name="reset_flag" value="<?php echo $rsQuesstion["qid"];?>">
                    <?php endif; ?>
                </div>
                <div class="form-check">
                   <?php if( $rsQuesstion["is_flag"] == "1"):?>
                        <input type="radio" name="radio1" checked ="true" value="<?php echo $rsQuesstion["qid"];?>">
                    <?php else: ?>
                        <input type="radio" name="radio1" value="<?php echo $rsQuesstion["qid"];?>">
                   <?php endif; ?>
                    <label class="form-check-label" for="Radios1">
                        <?php echo $rsQuesstion["qtitle"];?>
                    </label>
                </div>

                <?php
            }
            ?>

            <button id = "submit" onclick="messageSuccess()" type="submit" class="btn btn-success" name="selected" >Bình chọn</button>
<!--            <a href="/result_vote.php?idresult_vote=--><?php //echo $qid;?><!--"><button type="button" class="btn btn-link">Xem kết quả</button></a>-->
        </form>



    </div>

    <?php
}

?>
<br/>
<script type='text/javascript'>
    $(document).ready(function(){
        $("#submit").click(function(){
            alert("Cập nhật thành công.");
        });
    });
</script>