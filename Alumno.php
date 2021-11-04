<?php include('header.php'); ?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Alumno</h1>
			</div>

			<div class="articulo">
				<article>
					<h2><p>-El alumno no necesitara examen para poder entrar a esta escuela.</p></h2>
					<br/>
					<h2><p>-Contamos con distintos clubes para que el alumno se una al que mas le guste.   </p></h2>
					<br/>
					<h2><p>-Contamos con una sana convivencia para que el alumno se sienta comodo.</p></h2>
					<br/>
					<h2><p>-Contamos con becas mensuales para los alumnos con las mejores calificaciones.</p></h2>
					<br/>
					<h2><p>-Contamos con una pequeña cafeteria para que el alumno tenga en donde comer en la hora del receso.</p></h2>
					<br/>
					<br><a href="#"><img src="img/info02.jpg" height="500px" width="600px"></br>
				</article>
			</div>

			<?php include('sidebar.php'); ?>

			<p><form action="/action_page.php" method="get">
				<label for="fname">Nombre del alumno:</label>
				<input type="text" id="fname" name="fname"><br><br>
				<label for="lname">Apellidos del alumno:</label>
				<input type="text" id="lname" name="lname"><br><br>
				<label for="email">E-mail:</label><br>
				<input type="text" name="email"><br><br>
				<input type="submit" value="Enviar"></form></p>

		</div>
	</section>
    
	
	
    <?php include('footer.php'); ?>

</body>
</html>