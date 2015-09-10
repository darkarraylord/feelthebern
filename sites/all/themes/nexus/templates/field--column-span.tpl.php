<?php
	//Give a list of fields where you don't want wrapper divs
	$wrapper = 1;
	$currentfield = $element['#field_name'];
	$donotwrap = array(
		'field_column_span',
		'field_some_name'
	);
	if (in_array($currentfield, $donotwrap)){
		$wrapper = 0;
	}
?>
<?php if ($wrapper == 1): ?>
	<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
		<?php if (!$label_hidden): ?>
			<div class="field-label"<?php print $title_attributes; ?>><?php print $label ?>:&nbsp;</div>
		<?php endif; ?>
		<div class="field-items"<?php print $content_attributes; ?>>
			<?php foreach ($items as $delta => $item): ?>
				<div class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></div>
			<?php endforeach; ?>
		</div>
	</div>
<?php endif ?>
<?php 
if ($wrapper == 0){
	foreach ($items as $delta => $item) {
		print render($item);
	}
}
?>