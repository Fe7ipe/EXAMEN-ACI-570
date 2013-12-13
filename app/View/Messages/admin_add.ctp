<h1>Añadir Mensaje</h1>
<br><br>
<?php

echo $this->Form->create('Message');
echo $this->Form->input('project_id');
echo $this->Form->input('subject');
echo $this->Form->input('message');
echo $this->Form->end('Guardar');

?>
