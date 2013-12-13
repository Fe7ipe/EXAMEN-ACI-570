<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title> <?php echo $title_for_layout; ?> </title>
		<?php

		echo $this->Html->css('reset.css');
		echo $this->Html->css('bootstrap.css');

		echo $this->Html->css('base.css');
		echo $this->Html->script('jquery-1.10.2.js');
		echo $this->Html->script('jscript.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
	<body>
		<div id="body">
			<div class="menu-wrap user">
				<div id="banner">
					<?php echo $this->Html->link('Examen', array('admin' => false, 'controller' => 'pages', 'action' => 'index')); ?>
				</div>
				<div class="menu" id="user">
					<ul>
					<?php if($loggedIn && $user['is_active']): ?>
						<?php echo ($user['new_messages']) ? '<li>'.$this->Html->link('Nuevos Mensajes', array('admin' => false, 'controller' => 'notifications', 'action' => 'view')).'</li>' : '' ?>
						<li><a><?php echo $user['email']; ?></a>
							<ul>
								<li><?php echo $this->Html->link('Perfil', array('admin' => false, 'controller' => 'users', 'action' => 'view', $user['id'])); ?></li>
							</ul>
						</li>
						<li><a>Añadir</a>
							<ul>
								<li><?php echo $this->Html->link('Proyecto', array('admin' => false, 'controller' => 'projects', 'action' => 'add')); ?></li>
								<li><?php echo $this->Html->link('Contribucion', array('admin' => false, 'controller' => 'contributions', 'action' => 'add')); ?></li>
								
							</ul>
						</li>
						<li><?php echo $this->Html->link('Logout', array('admin' => false, 'controller' => 'users', 'action' => 'logout')); ?></li>
						<?php if($loggedIn && $user['is_active'] && $user['is_admin']): ?>
							<li><?php echo $this->Html->link('ACP', array('admin' => true, 'controller' => 'pages', 'action' => 'index')); ?></li>
						<?php endif; ?>
					<?php else: ?>
						<li><?php echo $this->Html->link('Login', array('admin' => false, 'controller' => 'users', 'action' => 'login')); ?></li>
						<li><?php echo $this->Html->link('Registro', array('admin' => false, 'controller' => 'users', 'action' => 'register')); ?></li>
					<?php endif; ?>
					</ul>
				</div>
			</div>
			<div id="left-menu" class="menu-wrap">
				<div class="menu" id="main">
					<ul>
						<li><?php echo $this->Html->link('Categorias', array('admin' => true, 'controller' => 'categories', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Contribuciones', array('admin' => true, 'controller' => 'contributions', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Mensajes', array('admin' => true, 'controller' => 'messages', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Notificaciones', array('admin' => true, 'controller' => 'notifications', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Proyectos', array('admin' => true, 'controller' => 'projects', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Premios', array('admin' => true, 'controller' => 'rewards', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Usuarios', array('admin' => true, 'controller' => 'users', 'action' => 'index')); ?></li>
					</ul>
				</div>
			</div>
			<div id="wrapper">
				<div id="center"">
					<div>
						<?php echo $this->Session->flash(); ?>

						<?php echo $this->fetch('content'); ?>
					</div>
				</div>
				<div id="side">
					<div>
						<h2>Estadisticas</h2>
						<ul>
							<?php foreach($statistics as $key => $value): ?>
							<li><?php echo $key, ' : ', $value ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div>
						<h2>Proyectos,Top 10</h2>
						<ul>
							<li>Proyectos: </li>
						</ul>
					</div>
				</div>
			</div>
			<div id="footer" class="menu-wrap">
				<?php echo $this->Html->link('Examen ACI-570', array('admin' => false, 'controller' => 'pages', 'action' => 'index')); ?> 
			</div>
		</div>
	</body>
</html>
