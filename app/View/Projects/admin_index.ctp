<h1>Proyectos</h1>
<table class="table">
	<tr>
		<th>Id</th>
		<th>Categoria</th>
		<th>Usuario</th>
		<th>Nombre</th>
		<th>Descripcion Corta</th>
		<th>Description Larga</th>
		<th>Inicio Fecha</th>
		<th>Fin Fecha</th>
		<th>Meta</th>
		<th>Activoe</th>
		<th>Creado</th>
		<th>Modificado</th>
		<th>Accion</th>
		<th>Accion</th>
	</tr>
	<?php foreach($projects as $project): ?>
	<tr>
		<td><?php echo $this->Html->link(
			h($project['Project']['id']),
			array(
				'controller' => 'projects', 'action' => 'view',
				$project['Project']['id']
			)
		); ?></td>
		<td><?php echo $this->Html->link(
			h($project['Category']['name']),
			array(
				'controller' => 'categories', 'action' => 'view',
				$project['Category']['id']
			)
		); ?></td>
		<td><?php echo $this->Html->link(
			h($project['User']['first_name'].' '.$project['User']['last_name']),
			array(
				'controller' => 'users', 'action' => 'view',
				$project['User']['id']
			)
		); ?></td>
		<td><?php echo $this->Html->link(
			h($project['Project']['name']),
			array(
				'controller' => 'projects', 'action' => 'view',
				$project['Project']['id']
			)
		); ?></td>
		<td><?php echo $this->Html->link(
			h($project['Project']['short_description']),
			array(
				'controller' => 'projects', 'action' => 'view',
				$project['Project']['id']
			)
		); ?></td>
		<td><?php echo $this->Html->link(
			h($this->Text->truncate(
			$project['Project']['long_description'],
			60, 
			array('ellipsis' => '...', 'exact' => true)
			)),
			array(
				'controller' => 'projects', 'action' => 'view',
				$project['Project']['id']
			)
		);?></td>
		<td><?php echo $project['Project']['start_date']; ?></td>
		<td><?php echo $project['Project']['end_date']; ?></td>
		<td><?php echo $project['Project']['goal']; ?></td>
		<td><?php echo ($project['Project']['is_active']) ? 'Si' : 'No'; ?></td>
		<td><?php echo $project['Project']['created']; ?></td>
		<td><?php echo $project['Project']['modified']; ?></td>
		<td><?php echo $this->Html->link(
			'Editar',
			array(
				'controller' => 'projects', 'action' => 'edit',
				$project['Project']['id']
			)
		); ?></td>
		<td><?php echo $this->Form->postLink(
			'Eliminar',
			array('action' => 'delete', $project['Project']['id']),
			array('confirm' => 'Eliminar Proyecto '.$project['Project']['name'].'?')
		); ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($project); ?>
</table>

<p><?php echo $this->Html->link('Add proyect', array('admin' => true, 'action' => 'add')); ?></p>
