<?
   $article = file_get_contents("php://stdin");
   $pos = 0;
   while(($pos = strpos($article, "*tweet:",$pos)) !== FALSE)
   {
	   $pos2 = strpos($article,"*",$pos+2);
	   if ($pos2 === FALSE){
		   die("Incomplete Tweet. Need terminating star");
	   }
	   $text = substr($article,$pos+7,$pos2-$pos-7);
	   $parts = explode("#",$text);
	   if (count($parts)==2)
	   {
		    $tweet = $parts[0];
		    $url = $parts[1];   
	   }else{
		   $tweet = $text;
		   $url="http://trajectorycomputing.com/";
		   
	   }
	   
	   
	   $urltext = urlencode($tweet);
	   $urlurl = urlencode($url);
	   $url = ">$tweet [Tweet It](https://twitter.com/intent/tweet?text=$urltext&url=$urlurl&hashtags=BigData,DataScience&via=trajcomp)";
	   $article= str_replace("*tweet:$text*",$url,$article);
	   $pos++;
   }
   echo $article;
?>
