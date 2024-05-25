<?php 
$pg = $_REQUEST['pg'];
if($pg == ""){$pg = "impressoras";}

switch($pg){	
	case"impressoras":	  	    		 
		include ('modelo/principal_impressoras.php');						
    	break;	     	

    case"xerox-C9000":	  	    		 
		include ('modelo/xerox-C9000.php');						
    	break;	

    case"xerox-C9070":	  	    		 
		include ('modelo/xerox-C9070.php');						
    	break;

    case"xerox-C8030":	  	    		 
		include ('modelo/xerox-C8030.php');						
    	break;    	

    case"xerox-C8130":	  	    		 
		include ('modelo/xerox-C8130.php');						
    	break;  

    case"xerox-C7030":	  	    		 
		include ('modelo/xerox-C7030.php');						
    	break;     
    	
    case"xerox-X570":	  	    		 
		include ('modelo/xerox-X570.php');						
    	break;      

    case"xerox-7500":	  	    		 
		include ('modelo/xerox-7500.php');						
    	break;     

    case"xerox-7800":	  	    		 
		include ('modelo/xerox-7800.php');						
    	break;    

    case"xerox-7835":	  	    		 
		include ('modelo/xerox-7835.php');						
    	break;   

    case"xerox-B600":	  	    		 
		include ('modelo/xerox-B600.php');						
    	break;    

    case"xerox-B400":	  	    		 
		include ('modelo/xerox-B400.php');						
    	break; 

    case"xerox-B605":	  	    		 
		include ('modelo/xerox-B605.php');						
    	break; 

    case"xerox-B405":	  	    		 
		include ('modelo/xerox-B405.php');						
    	break;  

    case"xerox-B610":	  	    		 
		include ('modelo/xerox-B610.php');						
    	break;    

    case"xerox-B615":	  	    		 
		include ('modelo/xerox-B615.php');						
    	break;       	   	  


    case"xerox-3345":	  	    		 
		include ('modelo/xerox-3345.php');						
    	break;     	 	 	  		  	 	

    case"xerox-3655":	  	    		 
		include ('modelo/xerox-3655.php');						
    	break;  

    case"xerox-5845":	  	    		 
		include ('modelo/xerox-5845.php');						
    	break;  

    case"xerox-B7030":	  	    		 
		include ('modelo/xerox-B7030.php');						
    	break;      	
}
?>