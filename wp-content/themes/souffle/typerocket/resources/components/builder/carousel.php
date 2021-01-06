<h1>Carousel Block</h1>
<?php
/** @var $form \TypeRocket\Elements\Form */
echo $form->checkbox('hide')->setLabel('Hide this block');

echo $form->text('Headline');
echo $form->editor('content');

echo $form->repeater("carousel")->setFields([
    $form->image("image"),
])->setLabel('Carousel');
