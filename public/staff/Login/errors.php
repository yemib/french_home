<?php  if (count($errors) > 0) : ?>
  <div class="errors" style="text-align: center; font-family: cursive; color: red; line-height: 15px;">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>