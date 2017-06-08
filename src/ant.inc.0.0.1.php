<?php

/*/ // // // // // // // // // //
Ant template v0.0.1
Extensible template builder with custom syntax.
/*/ // // // // // // // // // //

class ant {
	
	public static 
		$ver		= '0.0.1',
		$wildcards	= array(),
		$base	= './';
	
	# establece la ruta de las plantillas
	function __construct($base='./'){
		self::path($base);
	}
	public static function path($base='./'){
		self::$base = $base;
		return self::$base;
	}
	
	
	# permite añadir un filtro
	public static function add_wildcard($wildcard_ini, $wildcard_end, callable $filter, $priority=null){
		self::default_wildcards();
		if(func_num_args()>3)	self::$wildcards[$priority]	= array(array($wildcard_ini, $wildcard_end), $filter);
		else					self::$wildcards[] 			= array(array($wildcard_ini, $wildcard_end), $filter);
		
		ksort(self::$wildcards);
	}
	
	# permite borrar un filtro
	public static function remove_wildcard($wildcard_ini, $wildcard_end){
		self::default_wildcards();
		foreach(array_column(self::$wildcards, 0) as $wc_key=>$wc){
			if($wc[0]==$wildcard_ini && $wc[1]==$wildcard_end)
				unset( self::$wildcards[$wildcard_key] );
		}
		ksort(self::$wildcards);
	}
	
	
	# renderiza el template
	public static function render($string, $value=array()){
		extract($value, EXTR_OVERWRITE);
		ob_start();
		eval('?>'.self::compile($string));
		return ob_get_clean();
	}
	
	# renderiza el template desde un archivo
	public static function render_file($file, $value=array()){
		return self::render(file_get_contents(self::$base.$file), $value);
	}
	
	// // //  HELPERs // // //
	private static function default_wildcards(){
		if(count(self::$wildcards)==0)
		self::$wildcards = array(
			 0 => array( array('{@' , '@}'), array(__CLASS__, 'wc_include'	)),	// include
			10 => array( array('{!!','!!}'), array(__CLASS__, 'wc_raw'		)),	// raw
			20 => array( array('{{{','}}}'), array(__CLASS__, 'wc_content'	)),	// content 
			30 => array( array('{{',  '}}'), array(__CLASS__, 'wc_escaped'	)),	// escaped 
		);
		ksort(self::$wildcards);
	}
	
	# renderiza un string
	public static function compile($string){
		self::default_wildcards();
		foreach(self::$wildcards as $datacard){
			$regexp = sprintf('[@]?%s\s*(.+?)\s*%s[\r?\n]?', preg_quote($datacard[0][0]), preg_quote($datacard[0][1]));
			while( preg_match('/'.$regexp.'/is', $string) ) {
				
				preg_match_all('/'.$regexp.'/is', $string, $match);
				foreach($match[1] as $k=>$card){
					ob_start();
					print_r( call_user_func($datacard[1], $card, $match[0][$k] ) );
					$return = ob_get_clean();
					$string = str_replace($match[0][$k], $return, $string);
				}
				
			}
		}
		return $string;
	}
	public static function compile_file($file){
		return self::compile(file_get_contents(self::$base.$file));
	}
	
	# functiones de reemplazo
	private static function wc_raw(		$content, $full=null){	$content = trim($content);		return "<?php $content ?>";								}
	private static function wc_include(	$content, $full=null){	$content = trim($content);		return file_get_contents(self::$base.$content);	}
	private static function wc_content(	$content, $full=null){	self::parse_filter($content);	return "<?php print_r( $content ); ?>";					}
	private static function wc_escaped(	$content, $full=null){	self::parse_filter($content);	return "<?php print_r( htmlentities($content) ); ?>";	}
	public static function parse_filter(&$content){
		$functions	= explode('|',$content);
		$content	= '$'.array_shift($functions);
		
		//fix array
		if(strpos($content, '.')!==false){ // fix array
			$content	= explode('.', $content);
			$_content	= array_shift($content);
			
			foreach($content as $v)
				$_content .= ($v[0]=='$') ? "[$v]" : "['$v']";
			$content = $_content;
		}
		
		//fix functions
		foreach($functions as $function)	$content = "$function($content)";
	}

}


?>