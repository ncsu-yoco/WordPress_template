<div class="comments">
	<div class="container">
		<div class="row">
			<?php if (have_comments()): ?>
	        	<div class="col-md-9">
	            	<h3 class="comments-title">
						<?php printf( _nx( 'One response on &ldquo;%2$s&rdquo;', '%1$s responses on &ldquo;%2$s&rdquo;', 							get_comments_number(), 'comments title', 'twentythirteen' ),
								number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' ); ?>
					</h3>
				
			        <ol class="comment-list">
						<?php
							wp_list_comments(array(
								'style'       => 'ol',
								'short_ping'  => true,
								'avatar_size' => 0,
							));
						?>
			        </ol><!-- .comment-list -->
				</div>
			<?php endif; ?>
			
			
	        <div class="col-md-9">
				<?php comment_form(array(
					'comment_notes_after' => '',
					'title_reply' => 'Leave a Response',
					'label_submit' => 'Submit Response',
					'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Your response', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
					'fields' => apply_filters( 'comment_form_default_fields', array(
						'author' =>
				      '<p class="comment-form-author">' .
				      '<label for="author">' . __( 'Name', 'domainreference' ) . ( $req ? '<span class="required">*</span>' : '' ) .'</label> ' .
  
				      '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
				      '" size="30"' . $aria_req . ' /></p>',
			      'email' =>
				      '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label> ' .
  
				      '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				      '" size="30"' . $aria_req . ' /></p>',
				     'url' => ''
					)
				))); ?>
	        </div>
		</div>
	</div>
</div> 