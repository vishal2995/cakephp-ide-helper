<?php
/**
 * @var \App\Model\Entity\Car[] $cars
 * @var \App\Model\Entity\Wheel $wheel
 */
use Something;
?>
<div>
	<?php foreach ($cars as $car); ?>
	<?php echo h($wheel->id); ?>
</div>
