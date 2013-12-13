<h1>Projecto : <?php echo h($project['Project']['name']) ?></h1>
<br><br>
<p>Namombre : <?php echo h($project['Project']['name']) ?></p>
<p>Usuario : <?php echo h($project['User']['first_name'].' '.$project['User']['last_name']) ?></p>
<p>Categoria : <?php echo h($project['Category']['name']) ?></p>
<p>Inicio Fecha : <?php echo h($project['Project']['start_date']) ?></p>
<p>Fin Fecha : <?php echo h($project['Project']['end_date']) ?></p>
<p>Descripcion Corta : <?php echo h($project['Project']['short_description']) ?></p>
<p>Descripcion Larga :</p><p><?php echo h($project['Project']['long_description']) ?></p>
<br />
<h1>Premios</h1>
<br />
<div id="rewards-box">
	<div class="reward">
		<hr />
		<?php foreach($rewards as $reward): ?>
			<p class="rewar-description">Description: <?php echo $reward['Reward']['description']; ?></p>
			<p>Max allowed: <?php echo $reward['Reward']['max_allowed']; ?></p>
			<p>Amount: <?php echo $reward['Reward']['amount']; ?></p>
			<p>Order: <?php echo $reward['Reward']['order']; ?></p>
			<hr />
		<?php endforeach; ?>
	</div>
</div>
<br />
<h1>Mensajes</h1>
<br />

<div id="messages-box">
	<div class="message"><hr />
		<?php foreach($messages as $message): ?>
			<p class="message-subject">Subject: <?php echo $message['Message']['subject']; ?></p>
			<div>Message: <p class="message-body"><?php echo $message['Message']['message']; ?></p></div>
			<hr />
		<?php endforeach; ?>		
	</div>
</div>
