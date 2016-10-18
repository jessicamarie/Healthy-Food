<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Food Sharing Economy</title>
    
    <style type="text/css">
   html, body, div, #foods { margin:0; padding:0; height:100%; }
   iframe { position:fixed; display:block; width:100%; border:none; }
</style>

  </head>

  <body>
	<center>

		     <form action="fse.php">
Enter an ingredient: <input type = "text" name = "search">
		     <input type = "submit" value = "submit">
	</center>

<?php
  if(isset($_REQUEST['search'])) 
  {
  	$search = $_REQUEST['search'];
  	echo "<div class = 'stuff'><iframe src= \"http://www.whatscooking.fns.usda.gov/search/solr-results/im_field_term_program/supplemental-nutrition-assistance-program-snap-162?mefibs-form-solr-search-block-keyword=$search&mefibs-form-solr-search-block-sort_by=score&mefibs-form-solr-search-block-items_per_page=20&mefibs-form-solr-search-block-mefibs_block_id=solr_search_block\" id = \"foods\"></iframe></div>";
  	
  }
?>
  </body>
</html> 

