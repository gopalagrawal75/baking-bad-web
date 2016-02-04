<?php
	session_start();
	if(!isset($_SESSION['final_order']))
		echo "Session not set";
	else
	{
		for ($i=0;$i<count($_SESSION['final_order']);$i++){
			//comparing objects
			if($_POST['order']['item']==$_SESSION['final_order'][$i]['item'])
			{
				if($_POST['order']['size']==$_SESSION['final_order'][$i]['size'])
				{
					if($_POST['order']['category']==$_SESSION['final_order'][$i]['category'])
						{	
							if(count($_SESSION['final_order'][$i]['custom'])==count($_POST['order']['custom']))
							{
								/*$c=count(array_intersect($_POST['order']['custom'], $_SESSION['final_order'][$i]['custom']));
								if($c==count($_POST['order']['custom']))
								{
									echo "Found";
									$temp=(int)$_SESSION['final_order'][$i]['quantity']+1;
									$_SESSION['final_order'][$i]['quantity']=(string)$temp;
								}*/
								$c=array_keys($_POST['order']['custom']);
								$max=0;$hit="false";
								for ($j=0;$j<count($c);$j++){
									if((int)$c[$j]>$max)
										$max=(int)$c[$j];
								}
								for ($j=0;$j<=$max;$j++){
									$key=$j;
									if(array_key_exists($key,$_SESSION['final_order'][$i]['custom']))
									{
										if($_SESSION['final_order'][$i]['custom'][$j]!=$_POST['order']['custom'][$j])
										{
											$hit="true";
										}
									}
								}
								if($hit!="true"){
									echo "Found";

									$temp=(int)$_SESSION['final_order'][$i]['quantity']+(int)$_POST['order']['quantity'];
									$_SESSION['final_order'][$i]['quantity']=(string)$temp;
								}
							}
						}
					
				}
			}
		}
		//echo json_encode($_POST['order']);
		
	}
	?>