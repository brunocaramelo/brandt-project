<?php 
if( !defined( 'ABSPATH' ) ) exit;
if(isset($_POST['update_option'])){
	
	$hook="";
	if(isset($_POST['hook'])){
		$hook=sanitize_text_field($_POST['hook']);
	}
	$edit_form = "";
	if(isset($_POST['edit_form'])){
		$edit_form=sanitize_text_field($_POST['edit_form']);
	}
	$content= "";
	if(isset($_POST['content'])){
		$content=htmlentities($_POST['content']);
	}
	$nonce=$_POST['single_page_wpnonce'];
	$post_hook[$hook]=$content;
	if(wp_verify_nonce( $nonce, 'wsppc_single_page_wpnonce' ))
	{
		$wsppc_hook=wsppc_get_hook();
		
		if($wsppc_hook)
		{	
		 if (array_key_exists($hook,$wsppc_hook) && $edit_form!=1)
			{
				$errormsg	=wsppc_error_message("This Position '$hook' already saved please update it.");
			}
			else
			{
				
				if($edit_form==1)
				{
					$wsppc_hook[$hook]=$content;
					update_option('wsppc_hook',$wsppc_hook);
					$errormsg	=wsppc_success_message("Settings Saved!");
				}
				else
				{
					$final_hook=array_merge($post_hook,$wsppc_hook);
					update_option('wsppc_hook',$final_hook);
					$errormsg	=wsppc_success_message("Settings Saved!");
					
				}
			}
			
		}
		else
		{
			
			update_option('wsppc_hook',$post_hook);
		}
		
		
	}	
}
$wsppc_hooks=wsppc_get_hook();
?>
<div class="wrap wsppc-main-box">
	<h2>Woocommerce Single Product Page Customizer &raquo; <?php _e( 'Settings', 'Insert Script In Headers And Footers' ); ?></h2>	
	<div class='inner wsppc_inner'>
		<?php
		if ( isset( $errormsg ) ) {
			?>
			<div class="error fade"><p><?php echo $errormsg; ?></p></div>
			<?php
		}
		?>
		<ul class="wsppc_toggle wsppc_tab"><?php if(!empty($wsppc_hooks)){ ?>
		<?php foreach($wsppc_hooks as $key=>$wsppc_hook) {?>
			<li><span class="wsppc_hook_name"><?php echo str_replace("_"," ",$key);?></span>
				<span class="wsppc_hook_action">
				<span class="wsppc_ajax_loader edit_ajax_loader"></span>
				<a class="wsppc_edit_hook" data-hook='<?php echo $key; ?>' href="javascript:void(0)">Edit</a>
				<a class="wsppc_remove_hook" data-hook='<?php echo $key; ?>' href="javascript:void(0)">Remove</a>
				</span>
				<div class="wsppchook_details" style="display:none">					
				</div>
			</li>
		<?php } }?></ul>
		<a class="wsppc_add_form_link" href="javascript:void(0);">Add New Position</a>
		<span class="wsppc_ajax_loader"></span>
		<div class="wsppc_add_hook_form"></div>
	</div>
	<div class="single-page-position-box">
		<h1 class="woocommerce-single-page-position-map">Woocommerce Single Product Page Position <span class="position-map-accordion">Guide Map</span></h1>
		<img  class="woocommerce-single-page-position-map-image" src="<?php echo plugins_url('../assets/image/Woocommerce-Gray.png', __FILE__); ?>" alt="Woocommerce Single page position map Image">	
		<section></section>	
	</div>
</div>
<?php 
$ajax_add_nonce = wp_create_nonce( "wsppc_ajax_add_nonce" ); 
$ajax_edit_nonce = wp_create_nonce( "wsppc_ajax_edit_nonce" );
$ajax_remove_nonce = wp_create_nonce( "wsppc_ajax_remove_nonce" );
 ?>
	<script>

	if ( jQuery('.wsppc_tab').children().length == 0 ){
		jQuery(".wsppc_tab").addClass("empty");
	}

	jQuery(".position-map-accordion").on("click",function(){
		if(jQuery(this).hasClass('active-map-img')){
			jQuery(this).removeClass('active-map-img');
			jQuery(".woocommerce-single-page-position-map-image").fadeOut();
		}else{
			jQuery(this).addClass('active-map-img');
			jQuery(".woocommerce-single-page-position-map-image").fadeIn();

		}
	});

	jQuery('.wsppc_edit_hook').click(function(){	
		var main_li=jQuery(this).parent().parent();
		var hook_name=jQuery(this).attr('data-hook');
		// jQuery(this).prev().css("display","inline");
		var $curr = jQuery(this);
		$curr.prev().css("display","inline");
		
		jQuery.ajax({
				url : '<?php echo admin_url('admin-ajax.php')?>',
				type : 'post',
				data : {
					action : 'wsppc_get_edit_form',
					form_action:'edit_form',
					security : '<?php echo $ajax_edit_nonce; ?>',
					hook_name : hook_name
				},
				success : function( response ) {
					
					
					tinymce.remove(".wsppc_toggle .wsppc_content");
					main_li.find(".wsppchook_details").html(response);
					jQuery('.wsppchook_details').hide();
					main_li.find(".wsppchook_details").show();
					wp.editor.initialize("content_"+hook_name, {
						mediaButtons: true,
						tinymce: {
							
							theme: 'modern' ,
							skin: 'lightgray' ,
							language: 'en' ,
							formats: {
								alignleft: [
									{selector: 'p, h1, h2, h3, h4, h5, h6, td, th, div, ul, ol, li' , styles: {textAlign: 'left' }},
									{selector: 'img, table, dl.wp-caption' , classes: 'alignleft' }
								],
								aligncenter: [
									{selector: 'p, h1, h2, h3, h4, h5, h6, td, th, div, ul, ol, li' , styles: {textAlign: 'center' }},
									{selector: 'img, table, dl.wp-caption' , classes: 'aligncenter' }
								],
								alignright: [
									{selector: 'p, h1, h2, h3, h4, h5, h6, td, th, div, ul, ol, li' , styles: {textAlign: 'right' }},
									{selector: 'img, table, dl.wp-caption' , classes: 'alignright' }
								],
								strikethrough: {inline: 'del' }
							},
							relative_urls: false ,
							remove_script_host: false ,
							convert_urls: false ,
							
							entities: '38, amp, 60, lt, 62, gt ' ,
							entity_encoding: 'raw' ,
							keep_styles: false ,
							paste_webkit_styles: 'font-weight font-style color' ,
							preview_styles: 'font-family font-size font-weight font-style text-decoration text-transform' ,
							tabfocus_elements: ': prev ,: next' ,
							plugins: 'charmap, hr, media, paste, tabfocus, textcolor, fullscreen, wordpress, wpeditimage, wpgallery, wplink, wpdialogs, wpview' ,
							resize: 'vertical' ,
							menubar: false ,
							indent: false ,
							toolbar1: 'bold, italic, strikethrough, bullist, numlist, blockquote, hr, alignleft, aligncenter, alignright, link, unlink, wp_more, spellchecker, fullscreen, wp_adv' ,
							toolbar2: 'formatselect, underline, alignjustify, forecolor, pastetext, removeformat, charmap, outdent, indent, undo, redo, wp_help' ,
							toolbar3: '' ,
							toolbar4: '' ,
							body_class: 'id post-type-post-status-publish post-format-standard' ,
							wpeditimage_disable_captions: false ,
							wpeditimage_html5_captions: true
							
						},
						quicktags: true
					});
					$curr.prev().css("display","none");
					$curr.closest(".edit_ajax_loader").css("display","none");
					jQuery(".edit_ajax_loader").closest(".edit_ajax_loader").addClass("demo_class");
				}
			});  
		});
		jQuery('.wsppc_add_form_link').click(function(){
			var $curr = jQuery(this);
			$curr.next().css("display","inline");
			
			var main_li=jQuery(this).parent().parent();	
			jQuery.ajax({
				url : '<?php echo admin_url('admin-ajax.php')?>',
				type : 'post',
				data : {
					action : 'wsppc_get_edit_form',   
					form_action:'add_form',
					security : '<?php echo $ajax_add_nonce; ?>',				
				},
				success : function( response ) {
					 jQuery(".wsppc_add_hook_form").html(response);	
					 wp.editor.initialize("content_", {
						  mediaButtons: true,
						  tinymce: {
    
							theme: 'modern' ,
							skin: 'lightgray' ,
							language: 'en' ,
							formats: {
								alignleft: [
									{selector: 'p, h1, h2, h3, h4, h5, h6, td, th, div, ul, ol, li' , styles: {textAlign: 'left' }},
									{selector: 'img, table, dl.wp-caption' , classes: 'alignleft' }
								],
								aligncenter: [
									{selector: 'p, h1, h2, h3, h4, h5, h6, td, th, div, ul, ol, li' , styles: {textAlign: 'center' }},
									{selector: 'img, table, dl.wp-caption' , classes: 'aligncenter' }
								],
								alignright: [
									{selector: 'p, h1, h2, h3, h4, h5, h6, td, th, div, ul, ol, li' , styles: {textAlign: 'right' }},
									{selector: 'img, table, dl.wp-caption' , classes: 'alignright' }
								],
								strikethrough: {inline: 'del' }
							},
							relative_urls: false ,
							remove_script_host: false ,
							convert_urls: false ,
						   
							entities: '38, amp, 60, lt, 62, gt ' ,
							entity_encoding: 'raw' ,
							keep_styles: false ,
							paste_webkit_styles: 'font-weight font-style color' ,
							preview_styles: 'font-family font-size font-weight font-style text-decoration text-transform' ,
							tabfocus_elements: ': prev ,: next' ,
							plugins: 'charmap, hr, media, paste, tabfocus, textcolor, fullscreen, wordpress, wpeditimage, wpgallery, wplink, wpdialogs, wpview' ,
							resize: 'vertical' ,
							menubar: false ,
							indent: false ,
							toolbar1: 'bold, italic, strikethrough, bullist, numlist, blockquote, hr, alignleft, aligncenter, alignright, link, unlink, wp_more, spellchecker, fullscreen, wp_adv' ,
							toolbar2: 'formatselect, underline, alignjustify, forecolor, pastetext, removeformat, charmap, outdent, indent, undo, redo, wp_help' ,
							toolbar3: '' ,
							toolbar4: '' ,
							body_class: 'id post-type-post-status-publish post-format-standard' ,
							wpeditimage_disable_captions: false ,
							wpeditimage_html5_captions: true

						},
						  quicktags: true
						});
					 jQuery(".wsppc_add_form_link").hide();	
					 $curr.next().css("display","none");		 
				}
			});	  

			if ( jQuery('.wsppc_tab').children().length == 0 ){
		jQuery(".wsppc_tab").addClass("empty");
	}
	});
	jQuery('.wsppc_remove_hook').click(function(){
		if (!confirm('Are you sure remove this hook?')) {
			return false;
		}		
		var $curr = jQuery(this);
		$curr.prev().css("display","inline");
		var hook_name=jQuery(this).attr('data-hook');
		var main_li=jQuery(this).parent().parent();
		jQuery.ajax({
				url : '<?php echo admin_url('admin-ajax.php')?>',
				type : 'post',
				data : {
					action : 'wsppc_remove_hook',
					hook_name : hook_name,
					security:'<?php echo $ajax_remove_nonce; ?>'
				   
				},
				success : function( response ) {
						if(response==true)
						{
							main_li.remove();
						}
			$curr.prev().css("display","none");

					// jQuery(".wsppc_add_hook_form").html(response);				 
			}
		});	  
		
	});
</script>