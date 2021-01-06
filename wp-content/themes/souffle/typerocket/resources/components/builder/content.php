<h1>Content Block</h1>
<?php
/** @var $form \TypeRocket\Elements\Form */
echo $form->checkbox('hide')->setLabel('Hide this block');

echo $form->text('Headline');
echo $form->editor('Content');