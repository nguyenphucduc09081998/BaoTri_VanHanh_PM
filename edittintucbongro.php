
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
<?php
include('headeradmin.php');
include('connect.php');
include ('serveredit_tintucbongro.php');
$a = $_GET['edittintucbongro'];

$sql = "select * from tintucbongro where MaTinTucBongRo = '$a'";
$aaaa = mysqli_query($db,$sql);
$result = mysqli_fetch_array($aaaa);
?>
	<div class="container">
		<h1>Cập Nhật tin tuc bong ro</h1>
		<h2 color="red"> <?php include('errors.php'); ?></h2>
        <form action="" method="POST" enctype="multipart/form-data">
    		    
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="titlebongda" placeholder="<?php echo $result['TieuDeBongRo'];;?>"  />
            </div>
            <div class="form-group">
                <label for="title">Sub Title</label>
                <input type="text" class="form-control" name="subtitlebongda" placeholder="<?php echo $result['PhuDeBongRo'];;?>"  />
            </div>
            <div class="form-group">
                    <label for="title">DayPicker</label>
                <div class='input-group date' id='datetimepicker1' >
                        
                    <input type='text' class="form-control" name="ngaydangbongda" placeholder="<?php echo $result['NgayDangBongRo'];;?>"  />
					<!---
				   <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
					-->
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea rows="5" class="form-control" name="descriptionbongda" placeholder="<?php echo $result['ChiTietBongRo'];;?>"  ></textarea>
            </div>
            <div class="form-group">
                <label>Upload Image</label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-default btn-file">
                            Browse… <input type="file" id="imgInp" name="imagebongda"  />
                        </span>
                    </span>
                    <input type="text" class="form-control" readonly>
                </div>
                <img id='img-upload' src="<?php echo $result['ImageBongRo'];?>"/>
            </div>
	  
            <div class="form-group">
                <label>Upload Video</label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-default btn-file">
                            Browse… <input type="file" id="imgInp" name="videobongda"  />
                        </span>
                    </span>
                    <input type="text" class="form-control" readonly>
                </div>
                <img id='img-upload' src="<?php echo $result['VideoBongRo'];?>" />
            </div>
			
            <div class="form-group">
                <label>KhuVuc</label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-default btn-file">
                            <select  name="linh_vuc">
                               <option value="1">NBA</option>
                              <option value="2">VBN</option>
                              <option value="3">ABL</option>
                              <option value="4">Khác</option>
							 
                          </select>
                        </span>
                    </span>
                </div>
                <img id='img-upload'/>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="insertbongda">
                    Cập Nhật
                </button>
                <button class="btn btn-default">
                    Cancel
                </button>
            </div>
            
        </form>
    </div>
<br/><br/><br/><br/>
<script>
$(document).ready( function() {
    $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
    
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    }); 	
});</script>

            
           
   