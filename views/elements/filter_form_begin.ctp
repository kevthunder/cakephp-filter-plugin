<?php
/**
	CakePHP Filter Plugin

	Copyright (C) 2009-3827 dr. Hannibal Lecter / lecterror
	<http://lecterror.com/>

	Multi-licensed under:
		MPL <http://www.mozilla.org/MPL/MPL-1.1.html>
		LGPL <http://www.gnu.org/licenses/lgpl.html>
		GPL <http://www.gnu.org/licenses/gpl.html>
*/
?>

<script type="text/javascript">
	$(function(){
		$('div.filterForm span.filter_btn').click(function(){
			$(this).next('fieldset').toggle();
			$(this).toggleClass('minus');
		});
	});
</script>
<div class="filterForm">
	<?php echo $form->create(false, array('url' => '/'.$this->params['url']['url'], 'id' => $modelName.'Filter')); ?>
		<span class="filter_btn"><?php __('Filtre'); ?></span>
		<fieldset>
			<?php
			if (isset($options['legend']))
			{
				?><h3><?php echo $options['legend']; ?></h3><?php
			}
			?>
			<?php echo $form->input('Filter.filterFormId', array('type' => 'hidden', 'value' => $modelName)); ?>
