<?php include('header.php'); ?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Materias</h1>
			</div>

			<div class="articulo">
				<article>
					<h2><p>Contamos con distintas especialidades para el Alumno.</p></h2>
					<br/>
					<h2><p>Las especialidades son las siguientes:</p></h2>
					<br/>
					<h1><p>-Administracion de Recursos Humanos</p></h1>
					<br/>
					<h1><p>-Gericultura   </p></h1>
					<br/>
					<h1><p>-Programacion</p></h1>
					<br/>
					<h1><p>-Laboratorista Quimico</p></h1>
					<br/>
					<h1><p>-Electronica</p></h1>
					<br/>
					<h1><p>-Refrigeracion y Climatizacion</p></h1>
					<br/>
					<h1><p>-Soporte y mantenimiento de equipo de computo</p></h1>
					<br/>
					<h2><p>Todas las especialidades cuentan con las mismas materias</p></h2>
					<br/>
					<br><a href="#"><img src="img/papita.jpg" height="500px" width="600px"></br>
				</article>
			</div>

			<?php include('sidebar.php'); ?>

			<p><form action="/action_page.php" method="get">
				<label for="fname">Nombre:</label><br>
				<input type="text" id="fname" name="fname"><br><br>
				<label for="lname">Apellidos:</label><br>
				<input type="text" id="lname" name="lname"><br><br>
				<label for="email">E-mail:</label><br>
				<input type="text" name="email"><br><br>
				<label for="especialidad">Especialidad que desa estudiar:</label><br>
				<input type="text" name="especialidad"><br><br>
				<input type="submit" value="Enviar"></form></p>

		</div>
	</section>
	
    <?php include('footer.php'); ?>

</body>
</html>