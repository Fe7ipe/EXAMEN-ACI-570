<h1>Usuarios</h1>

<table class="table">
	<tr>
		<th>Id</th>
		<th>Email</th>
		<th>Nombre</th>
		<th>Segundo Nombre</th>
		<th>Active</th>
		<th>Admin</th>
		<th>Creado</th>
		<th>Modificado</th>
		<th>Accion</th>
		<th>Accion</th>
	</tr>
	<?php foreach($users as $user): ?>
	<tr>
		<td><?php echo $this->Html->link(
			h($user['User']['id']),
			array(
				'controller' => 'users', 'action' => 'view',
				$user['User']['id']
			)
		); ?></td>
		<td><?php echo $this->Html->link(
			h($user['User']['email']),
			array(
				'controller' => 'users', 'action' => 'view',
				$user['User']['id']
			)
		); ?></td>
		<td><?php echo $this->Html->link(
			h($user['User']['first_name']),
			array(
				'controller' => 'users', 'action' => 'view',
				$user['User']['id']
			)
		); ?></td>
		<td><?php echo $this->Html->link(
			h($user['User']['last_name']),
			array(
				'controller' => 'users', 'action' => 'view',
				$user['User']['id']
			)
		); ?></td>
		<td><?php echo ($user['User']['is_active']) ? 'Si' : 'No'; ?></td>
		<td><?php echo ($user['User']['is_admin']) ? 'Si' : 'No'; ?></td>
		<td><?php echo $user['User']['created']; ?></td>
		<td><?php echo $user['User']['modified']; ?></td>
		<td><?php echo $this->Html->link(
			'Editar',
			array(
				'controller' => 'users', 'action' => 'edit',
				$user['User']['id']
			)
		); ?></td>
		<td><?php echo $this->Form->postLink(
			'Eliminar',
			array('Action' => 'delete', $user['User']['id']),
			array('confirm' => 'Delete user '.$user['User']['first_name'].' '.$user['User']['last_name'].'?')
		); ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($user); ?>
</table>

<p><?php echo $this->Html->link('Añadir Usuario', array('admin' => true, 'controller' => 'users', 'action' => 'add')); ?></p>




