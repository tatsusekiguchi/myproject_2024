<?php get_header(); ?>
<main id="recordListMain">
    <div class="recordListBox">
		<?php if(have_posts()):
			while(have_posts()): the_post();?>
			<?php the_content(); ?>
		<?php endwhile;endif;?>
	</div>
    </main>
<?php get_footer(); ?>
<script>
    $(document).ready(function() {
    
        $('.meta0').each(function(index, element){
            let val = $(element).val();
            $(this).parents('tr').attr("data-id", val);
        });
        $('.meta1').each(function(index, element){
            let val = $(element).val();
            $(this).parents('tr').attr("data-type", val);
        });
    });
</script>