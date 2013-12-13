<h1>Contribuciones</h1>

<table class="table">
	<tr>
		<th>Id</th>
		<th>Usuario</th>
		<th>Premio</th>
		<th>Monto</th>
		<th>Creado</th>
		<th>Modificado</th>
		<th>Accion</th>
		<th>Accion</th>
	</tr>
	<?php foreach($Contributions as $Contribution): ?>
	<tr>
		<td><?php echo $this->Html->link(
			h($Contribution['Contribution']['id']),
			array(
				'controller' => 'Contributions', 'action' => 'view',
				$Contribution['Contribution']['id']
			)
		); ?></td>
		<td><?php echo $this->Html->link(
			h($Contribution['User']['first_name'].' '.$Contribution['User']['last_name']),
			array(
				'controller' => 'users', 'action' => 'view',
				$Contribution['User']['id']
			)
		); ?></td>
		<td><?php echo $this->Html->link(
			h($Contribution['Reward']['description']),
			array(
				'controller' => 'rewards', 'action' => 'view',
				$Contribution['Reward']['id']
			)
		); ?></td>
		<td><?php echo $this->Html->link(
			h($Contribution['Contribution']['amount']),
			array(
				'controller' => 'Contributions', 'action' => 'view',
				$Contribution['Contribution']['id']
			)
		); ?></td>
		<td><?php echo $Contribution['Contribution']['created']; ?></td>
		<td><?php echo $Contribution['Contribution']['modified']; ?></td>
		<td><?php echo $this->Html->link(
			'Editar',
			array(
				'controller' => 'Contributions', 'action' => 'edit',
				$Contribution['Contribution']['id']
			)
		); ?></td>
		<td><?php echo $this->Form->postLink(
			'Eliminar',
			array('action' => 'delete', $Contribution['Contribution']['id']),
			array('confirm' => 'Eliminar contribucion del usuario '.$Contribution['User']['email'].'?')
		); ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($Contribution); ?>
</table>

<p><?php echo $this->Html->link('Añadir Contribucion', array('admin' => true, 'action' => 'add')); ?></p>
