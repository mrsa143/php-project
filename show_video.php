<!-- Container (Services Section) -->
<div id="video" class="container-fluid video">
  <div class="row">
  
	<div class="container">
		<div class="row">
		<div class="gallary">
		<h1>Video Galary</h1>
		
		</div>
		</div>
		
			<?php
			  
				include('db_connect.php');
				  
				$sql = "SELECT * FROM tbl_video ORDER BY video_id DESC;";
				$print = $conn->query($sql);

				if ($print->num_rows > 0) {
				  // output data of each row
				$print_row=1;
				  while($row = $print->fetch_assoc()) {
				$sum_row=1;
			?>

			<?php if($sum_row==$print_row){?>
			
			<center>
			<div class="row">
			<?php $print_row=$print_row+2; }?>
			<div class="col-sm-4" style="margin-bottom:10px;">
				

				<video width="320" height="240" controls>
				  <source src="<?php echo $row['video_file_path'];?>" type="video/mp4">
				</video>
				
			
				
				
				<div class="row">
				
					<div class="video" style="background:#337AB7;max-width: 100%;height:auto;border-radius:5px;margin:0px">
						<span style= "background:blue;border-radius:5px;"><h2><?php echo $row['video_name'];?></h2></span>
						<a href="<?php echo $row['video_file_path']?>" download class="btn btn-info btn-md" role="button">Download</a>
						
					</div>
				
				</div>
			</div>
				<?php if($sum_row==$print_row){?>
			</div>
			</center>
			<?php }?>
				  <?php
				$sum_row++;
				  }
				} else {
				  echo "0 prints";
				}
				$conn->close();
			?>
	</div>
  
 
</div>
</div>
