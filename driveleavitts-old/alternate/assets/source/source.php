<?php
require 'config.php';

class source extends config {
	
	public static function phoneFromSheet() {
		$storedFile = file('https://docs.google.com/spreadsheets/d/1T_LyfrkqcJVfdR7EPGNmUMFUJ_zIVaJVS0nwkfEQi58/export?format=csv&gid=1419838408');
		foreach ($storedFile as $line) {
	    	$data[] = str_getcsv($line);
    	}
		for ($i = 0, $num = count($data); $i < $num; $i++) {
	    	$source[] = $data[$i][1];
			$number[] = $data[$i][0];
		}
		return $$phones = array_combine($source, $number);
	}
     
    public static function getName() {
	   return parent::$name;
    }
     
    public static function getTitle() {
	   return parent::$title;
    }
     
    public static function getApplication() {
	   return parent::$application;
    }

    public static function getCompany() {
	   return parent::$company;
    }

    public static function getUrl() {
	   return parent::$url;
    }

    public static function getParam() {
	   return parent::$param;
    }
	
	public static function setPage($page) {
	     self::$page = $page;
	}

    public static function validate($param) {
	   // Validates link source versus cookie and determines if cookie will be overwritten
	   if($param != $_COOKIE[parent::$name] && $_COOKIE[parent::$name] != parent::$company) { return true; }
	   else { return false; }	
    }

    public static function getSource($source = '') {
	   // Determines if a cookie has been set and load it if it exists -- Ignores default source in favor of campaign
	   if(isset($_COOKIE[parent::$name]) && $source == parent::$company) { $source = $_COOKIE[parent::$name]; } 
	   else { $source = parent::$company; }
	   return $source;
    }

    public static function expiration() {
	   // Set cookie expiration here in seconds -- example: 86400 seconds = 1 day
	   $seconds = 86400; // DO NOT CHANGE THIS! Unless you know what you are doing.       
	   $expire  = time() + $seconds * parent::$duration; // time() + 86400 * 7 would be 1 week
	   return $expire;
    }

    public static function phone($sender) {
	   if($sender != parent::$company){
		   $phones = source::phoneFromSheet();
	    	foreach($phones as $origin => $phone) 
				if(preg_match('/' . "$origin" . '/', $sender))
				return $phone;
	   }
	   $phone = parent::$phone;
	   return $phone;
    }
        
    public static function getConversion($sender) {
	     $file  = file_get_contents('codes.txt', true);
	     $codes = preg_split('/@/', $file, -1);
	     $count = count($codes);
	     for($i=1; $i<$count; $i++) {
	         if(preg_match('/' . "$codes[$i]" . '/', $sender))
		     return $codes[$i+1];
	         $i++;
	     }
	     return '';
    }

}

//source::setPage($currentPage);
if(isset($_GET[source::getParam()])) { 
      $source = strtolower($_GET[source::getParam()]); 
} else { $source = source::getSource(); }


if(!isset($_COOKIE[source::getName()])) { 
      $origin     = $source;
      $phone      = source::phone($source);
      $conversion = source::getConversion($source);
} else { 
      $origin     = $_COOKIE[source::getName()];
      $phone      = source::phone($_COOKIE[source::getName()]);
      $conversion = source::getConversion($_COOKIE[source::getName()]);
}

if(!isset($_COOKIE[source::getName()]) || source::validate($source)) {
      $cookie = source::getName();
      $expire = source::expiration();
      if($source != source::getCompany()) {
	      setcookie($cookie, $source, $expire);
	      $origin     = $source;
	      $phone      = source::phone($source);
	      $conversion = source::getConversion($source);
      }
if(!isset($origin)) { $origin = source::getCompany(); }
}                         