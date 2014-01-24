<?php echo $header; ?>
<?php echo $column_left; ?>
<?php echo $column_right; ?>
<?php
$google_fonts             = Designer_getGoogleFonts();
?>

<script>
  WebFontConfig = {
    google: { 
      families: [
      <?php
      foreach ($google_fonts as $key => $value) {
        echo "'".$value['family']."',";
      }
      ?>
      ] 
    }
  };
  if(WebFontConfig.google.families.length !== 0)
  {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  }
</script>
<link href="<?php echo HTTP_SERVER; ?>designer/designer-font.php?v=" rel="stylesheet">
<div id="content"><?php echo $content_top; ?>
	<div class="breadcrumb">
		<?php foreach ($breadcrumbs as $breadcrumb) { ?>
		<?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
		<?php } ?>
	</div>
	<h1><?php echo $heading_title; ?></h1>

	

	<div class="product-filter">
		<div class="limit"><b><?php echo $text_limit; ?></b>
			<select id="limit_filter" onchange="st_dt_do_page(1,this.value,category_id)">
				<?php foreach ($limits as $limits) { ?>
				<?php if ($limits['value'] == $limit) { ?>
				<option value="<?php echo $limits['href']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
				<?php } else { ?>
				<option value="<?php echo $limits['href']; ?>"><?php echo $limits['text']; ?></option>
				<?php } ?>
				<?php } ?>
			</select>
		</div>
		<div class="sort"><b><?php echo $text_filter; ?></b>
			<select id="sort_filter" onchange="st_dt_do_page(1,limit,this.value)">
				<?php foreach ($clip_cat as $clip_cat) { ?>
				<?php if ($clip_cat['value'] == $category_id) { ?>
				<option value="<?php echo $clip_cat['value']; ?>" selected="selected"><?php echo $clip_cat['text']; ?></option>
				<?php } else { ?>
				<option value="<?php echo $clip_cat['value']; ?>"><?php echo $clip_cat['text']; ?></option>
				<?php } ?>
				<?php } ?>
			</select>
		</div>
	</div>

	<div id="ajax_container">
	<?php if ($cliparts) { ?>
	<div class="product-grid">
		<?php foreach ($cliparts as $clipart) { ?>
		<?php if ($clipart['image']) { ?>
			<div class="design_templates">
				<div class="image"><img src="<?php echo $clipart['image'] ?>"></div>
				<div class="cart"><a class="button" href="<?php echo $clipart['href']?>"><?php echo $text_use_template; ?></a></div>
			</div>
		<?php } ?>
		<?php } ?>
	</div>
	<div class="pagination"><?php echo $pagination; ?></div>
	<?php } else {?>
		<div class="content"><br><p><?php echo $text_empty; ?></p></div>
	<?php } ?>
	</div>
	
	<?php echo $content_bottom; ?>

	<script type="text/javascript">

		var limit = <?php echo $limit?>;
		var category_id = <?php echo $category_id?>;

		function st_dt_do_page(page,perpage,catid)
		{
			if(catid != null)
			{
				category_id = catid
			}
			if(perpage != null)
			{
				limit = perpage
			}

			$.ajax({
				url: 'index.php?route=design/templates/ajax&page='+page+'&limit='+limit+'&category_id='+category_id,
				beforeSend: function() {
					$('#ajax_container').fadeTo('fast', 0.2);
				},
				complete: function() {
					$('#ajax_container').fadeTo('fast', 1);
				},
				success: function(data) {
					$('#ajax_container').html(data);
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);				
				}
			});
		}
	</script>
</div>
<?php echo $footer; ?>