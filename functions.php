function bbloomer_translate_woocommerce_strings( $translated, $untranslated, $domain ) {
 
   
 
      switch ( $translated ) {
 
         case 'Shipping':
 
            $translated = 'Frakt';
            break;
 
         case 'ADD':
 
            $translated = 'Legg til';
            break;
 
			  case 'Have a Promo Code?':
 
            $translated = 'Rabattkode';
            break;
 
			  
			    case 'Add':
 
            $translated = 'Legg til';
            break;
 
			  
			    case 'Enter promo code':
 
            $translated = 'Skriv inn rabattkode';
            break;
			   
			  case 'Submit':
 
            $translated = 'Aktiver';
            break;
			   
              case 'Apply coupon':
 
            $translated = 'Tilbake';
            break;
			  
			    case 'Shipping to':
 
            $translated = 'Sendes til';
            break;
			  
			    case 'Calculate shipping':
 
            $translated = 'Tilbake';
            break;
			   
			    case 'Tax':
 
            $translated = 'Mva';
            break;
			  
			   case 'Empty Cart':
 
            $translated = 'Tøm handlekurv';
            break;
			   


       
      
 
   }   
  
   return $translated;
 
}
