<h1>Agregar Usuario</h1>
<br><br>
<?php

echo $this->Form->create('User');
echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Form->input('primer_nombre');
echo $this->Form->input('segundo_nombre');
?>
<div style="display: inline-block"><?=$this->Form->input('is_active');?></div>
<?php
?>
<br />
<div style="display: inline-block"><?=$this->Form->input('is_admin');?></div>
<?php
echo $this->Form->end('Guardar');

?>
