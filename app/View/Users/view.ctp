<h1>Perfil : <?php echo h($usuario['User']['first_name']), " ", h($usuario['User']['last_name']) ?></h1>
<br><br>
<p>Email : <?php echo h($usuario['User']['email']) ?></p>
<p>Primer nombre : <?php echo h($usuario['User']['first_name']) ?></p>
<p>Segundo nombre : <?php echo h($usuario['User']['last_name']) ?></p>
<br />
<h1>Proyectos de Usuarios</h1>
<br />
<table class="table">
	<tr>
		<th>Categoria</th>
		<th>Nombre</th>
		<th>Descripcion Corta</th>
		<th>Descripcion Larga</th>
		<th>Inicio Fecha</th>
		<th>Fin Fecha</th>
		<th>Meta</th>
		<?php 
		echo ($loggedIn) ? "<th>Accion</th><th>Mensaje</th>" : '';
		?>
	</tr>
	<?php foreach($projects as $project): ?>
	<tr>
		<td><?php echo h($project['Category']['name']); ?></td>
		<td><?php echo $this->Html->link(
			h($project['Project']['name']),
			array(
				'controller' => 'projects',
				'action' => 'view',
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
		<td><?php echo (isset($user) && $user['id'] === $project['User']['id'] || $user['is_admin']) ? $this->Html->link("Editar", array('controller' => 'projects', 'action' => 'edit', $project['Project']['id'])) : ''; ?></td>
		<td><?php echo (isset($user) && $user['id'] === $project['User']['id'] || $user['is_admin']) ? $this->Html->link("Crear Mensaje", array('controller' => 'messages', 'action' => 'add', $project['Project']['id'])) : ''; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
