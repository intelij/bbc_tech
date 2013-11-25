<?     
  
Class database {  

	function grabSearchString($post_string) {
		return mysql_real_escape_string(preg_replace("/[^A-Za-z]/", " ", $post_string)); //regex only alpha chars 
	}
						                                                                                      
}  

?>