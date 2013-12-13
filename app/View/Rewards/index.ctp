<h1>Premios</h1>
<table class="table">
	<tr>
		<th>Proyecto</th>
		<th>Descripcion</th>
		<th>Max Cantidad</th>
		<th>Monto</th>
		<th>Orden</th>
	</tr>
	<?php foreach($rewards as $reward): ?>
	<tr>
		<td><?php echo $this->Html->link(
			h($reward['Project']['name']),
			array(
				'controller' => 'projects', 'action' => 'view',
				$reward['Project']['id']
			)
		); ?></td>
		<td><?php echo $this->Html->link(
			h($reward['Reward']['description']),
			array(
				'controller' => 'rewards', 'action' => 'view',
				$reward['Reward']['id']
			)
		); ?></td>
		<td><?php echo $this->Html->link(
			h($reward['Reward']['max_allowed']),
			array(
				'controller' => 'rewards', 'action' => 'view',
				$reward['Reward']['id']
			)
		); ?></td>
		<td><?php echo $this->Html->link(
			h($reward['Reward']['amount']),
			array(
				'controller' => 'rewards', 'action' => 'view',
				$reward['Reward']['id']
			)
		); ?></td>
		<td><?php echo $this->Html->link(
			h($reward['Reward']['order']),
			array(
				'controller' => 'rewards', 'action' => 'view',
				$reward['Reward']['id']
			)
		); ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($project); ?>
</table>
