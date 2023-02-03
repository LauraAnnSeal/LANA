<?php 
					$primaryNav = wp_get_nav_menu_items('2');
                        
					foreach ( $primaryNav as $navItem ) {

						if($navItem->title != get_the_title()){
							if(!$navItem->menu_item_parent){
								echo '<a class="parent '.$navItem->ID.'" id="'.$navItem->title.'" href="'.$navItem->url.'" >'.$navItem->title.'</a> <br>';
							}
							else {
								echo '<a class="child '.$navItem->menu_item_parent.'" id="'.$navItem->title.'" href="'.$navItem->url.'" >'.$navItem->title.'</a> <br>';
							}
						} else {
							if(!$navItem->menu_item_parent){
								echo '<a class="parent" id="'.$navItem->title.'" href="'.$navItem->url.'" >'.$navItem->title.'</a> <br>';
							}
							else {
								echo '<a class="child"  id="'.$navItem->title.'" href="'.$navItem->url.'" >'.$navItem->title.'</a> <br>';
							}
						}
					
					}	
				?>