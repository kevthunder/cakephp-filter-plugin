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
			<?php echo $form->submit(__('Filtrer', true)); ?>
			<?php echo '<a href="'.$this->Html->url(array('action'=>'clearSession', Inflector::camelize(Inflector::pluralize($this->params['controller'])), $this->params['action'])).'">'.__('Annuler le filtre', true).'</a>'; ?>
		</fieldset>
	<?php echo $form->end(); ?>
</div>
