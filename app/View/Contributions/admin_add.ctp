<h1>Add contribution</h1>
<br><br>
<?php

echo $this->Form->create('Contribution');
echo $this->Form->input('user_id');
echo $this->Form->input('reward_id');
echo $this->Form->input('amount');
echo $this->Form->end('Guardar');

?>
