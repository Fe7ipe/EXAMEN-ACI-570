<h1>Editar Usuario</h1>
<br><br>
<?php

echo $this -> Form -> create('User');
echo $this -> form -> input('id', array('type' => 'hidden'));
echo $this -> Form -> input('email');
echo '<div class="input"><label for="UserPassEdit">Password</label>', $this -> Form -> password('passEdit'), '</div>';
echo $this -> Form -> input('primer_nombre');
echo $this -> Form -> input('segundo_nombre');
?>
<div style="display: inline-block"><?=$this->Form->input('is_active');?></div>
<?php
?>
<br />
<div style="display: inline-block"><?=$this->Form->input('is_admin');?></div>
<?php
echo $this -> Form -> end('Guardar');
?>
