    $lat1 = 55.825263;
		$lng1 = 49.087843;
		$lat2 = 55.824901;
		$lng2 = 49.086800;
        
    $lat1=deg2rad($lat1); 
    $lng1=deg2rad($lng1); 
    $lat2=deg2rad($lat2); 
    $lng2=deg2rad($lng2); 
    
    $delta_lat=($lat2 - $lat1); 
    $delta_lng=($lng2 - $lng1); 
     
    return round( 6378137 * acos( cos( $lat1 ) * cos( $lat2 ) * cos( $lng1 - $lng2 ) + sin( $lat1 ) * sin( $lat2 ) ) );
