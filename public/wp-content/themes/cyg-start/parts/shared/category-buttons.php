									<?php

										if ( has_category() ){
				                            $categories = get_the_category();
				                                if ( count($categories) ) {
				                                echo '<strong>Topics:</strong> ';	                                            	
				                                foreach( get_the_category() as $category){
				                                    echo '<a class="btn btn-small category_button" href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a>';
				                                }
				                        	}
				                    	}
									?>
