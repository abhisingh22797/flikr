<div class="container">
<?php $this->load->helper("form"); ?>
<?php
$attributes = array('id' => 'f_form1', 'method' => 'post', 'class' => 'form_horizontal');
echo form_open_multipart('home/api', $attributes);
?>
	<input type="text" class="live-search-box" name = "tag" placeholder="search here"  onChange="subcategory(this.value)"/><br>
	 
 <input type="submit" class="btn-default" value="Submit" id="f_submit1" name="submit" />
        
          
	<div class="gallery" id="hodm_results">

		

	</div>

</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	
<script>
  $(document).ready(function() {
    $("#f_submit1").click(function() {

      $("#f_form1").submit(function(e) {

       
        var postData = $(this).serializeArray();
        var formURL = $(this).attr("action");
        $.ajax({
          url: formURL,
          type: "POST",
           data: postData,
          success: function(data) {
			  
             $('#hodm_results').html(data);
          },
         
        })
		e.preventDefault(); //STOP default action
        e.unbind();
       
      });

    });
  });
</script>