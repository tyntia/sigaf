<!DOCTYPE html >
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ayuda</title>
    <link rel="stylesheet" href="../css/demotab.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../css/estilotab_manual.css" type="text/css" media="screen" />
    <script type="application/javascript" src="../js/jquery.min.js"></script>
</head>
<body>
	<div id="modal">
		<div class="modal-content">
        	<div id="salir"><a href="<?=URL::to('cargaacademica/registro')?>"><img src="../imagenes/salir.png"></a></div>
           	  <h1><span>Manual de usuario</span> <br>
       	      CARGA ACADÉMICA</h1>
   		  		<div id="back"><a href="javascript:window.history.go(-1);"><img src="../imagenes/back.png"></a></div>   
             	 <div class="container">
				 
                 <section class="tabs">
                <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
		        <label for="tab-1" class="tab-label-1" style="background-image:url(../imagenes/catalogo3.png); background-repeat:no-repeat; background-position:top;">Catálogos</label>
		
	            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
		        <label for="tab-2" class="tab-label-2" style="background-image: url(../imagenes/registro1.png); background-repeat:no-repeat; background-position:top;">Registro</label>
		
	            <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
		        <label for="tab-3" class="tab-label-3" style="background-image:url(../imagenes/Consul.png); background-repeat:no-repeat; background-position:top;">Consulta</label>
			
	            <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
		        <label for="tab-4" class="tab-label-4" style="background-image:url(../imagenes/actualizar.png); background-repeat:no-repeat; background-position:top;">Modificación</label>
    
     <input id="tab-5" type="radio" name="radio-set" class="tab-selector-5" />
		        <label for="tab-5" class="tab-label-5" style="background-image:url(../imagenes/eliminar.png); background-repeat:no-repeat; background-position:top;">Eliminación</label>
    
     <input id="tab-6" type="radio" name="radio-set" class="tab-selector-6" />
	          <label for="tab-6" class="tab-label-6" style="background-image:url(../imagenes/FAQ.png); background-repeat:no-repeat; background-position:top;">FAQ</label>
    
     <input id="tab-7" type="radio" name="radio-set" class="tab-selector-7" />
	          <label for="tab-7" class="tab-label-7" style="background-image: url(../imagenes/glosario.png); background-repeat:no-repeat; background-position:top;">Glosario</label>
   
			 <div class="clear-shadow"></div>
		     	<div class="content">
		     	  <a name="arriba"></a>   
                	<div class="content-1">
						<h2>Catálogos</h2>        
                        <p>Antes de iniciar el registro de la carga académica, es importante que introduzca los catálogos correspondientes los cuales alimentarán el proceso de registro.</p>
          				<h2>Catálogo de Periodo</h2>
          				 <center><img src="../imagenes/catalogos/agregarPeriodo.png"></center>
          				 <ul class="lista-num">
          					<li> 1.	Nombre. Ingrese el nombre del periodo en curso, el primer recuadro hace alusión al año correspondiente y el segundo a un identificador del periodo.</li>
							<li>2.	Tipo programa. Seleccione el tipo de programa.</li>
							<li>3.	Fecha inicio. Fecha en la que da inicio el periodo.</li>
							<li>4.	Fecha fin. Fecha en la que finaliza el periodo.</li>
							<li>5.	Descripción. Ingrese una breve descripción del periodo.</li>
							<li>6.	Pulse el botón de guardar.</li>
							<li>7.	Para salir de la ventana, pulse el botón de salir.</li>
						</ul>
 						<h2>Catálogo de grupos</h2> 
						<center><img src="../imagenes/catalogos/agregarGrupos.png"></center>
						<ul class="lista-num">
							<li>1.	Nombre. El primer digito representa la carrera, el segundo digito el semestre y el último un identificador del grupo, este último digito es necesario que el usuario lo ingrese, los anteriores el sistema se los muestra.</li>
							<li>2.	Turno. Selección el turno en el cual se dará de alta el grupo.</li>
							<li>3.	Plan. Muestra el plan sobre el cual se está dando de alta el grupo.</li>
							<li>4.	Periodo. Muestra el periodo en cual se están dando de alta el grupo.</li>
							<li>5.	Programa educativo. Muestra la carrera a la cual se registra el grupo.</li>
							<li>6.	Pulse el botón de guardar.</li>
							<li>7.	Pulse el botón salir.</li>
						</ul>	  
						<a href="#arriba"><img src="../imagenes/arriba.png">Ir arriba</a>
     				</div>



			        <div class="content-2">
                   	<a name="arribaReg"></a>
						<h2>Registro de CA</h2>
						<h3>Existen dos formas de registro: registro inicial y registro subsecuente</h3>
                        <h2>Registro Inicial</h2>
                        <p>Después de llenar los catálogos correspondientes, se dará inicio al registro inicial de la carga académica.</p>
                        <center><img src="../imagenes/registro/CA/regIniCA.png"></center>
                        <ul class="lista-num">
							<li>1. Seleccionar la carrera.</li>
							<li>2. Seleccionar el periodo actual para la carga académica (en caso de que no esté dado de alta deberá abrir el catalogo y llenar los datos correspondientes).
							En la pantalla se le presentaran dos planes, el anterior y el actual.
							<li>3. Filtrar las materias, ya sea por obligatoria y optativa.</li>
							<li>4. Seleccione las materias que desea dar de alta en la carga activando la casilla de verificación que está al lado izquierdo del nombre de la materia.</li>
							<li>5. Seleccionar el semestre.</li>
							<li>6. Seleccionar el grupo (s) a los cuales desea asignar la carga, en caso de que el grupo no exista, deberá darlo de alta, es muy importante para dar de alta un grupo que previamente haya seleccionado la carrera y el semestre al cual pertenecerán.</li>
							<li>7. Pulse el botón generar carga.</li>
							Una vez que la carga académica se haya dado de alta, esta se mostrará en forma de tablas en la parte inferior de la pantalla como se muestra en la siguiente figura:
							<center><img src="../imagenes/registro/CA/tablaCA.png"></center>
							<p>Se presenta el último semestre dado de alta, si desea ver todos los semestres deberá pulsar el botón  “Todos” o si desea consultar uno por uno seleccione el semestre deseado y le mostrará los datos correspondientes a dicho semestre.</p>
						</ul>
						<center><img src="../imagenes/registro/CA/notaDelCA.png"></center><br>
						<h2>Registro Subsecuente</h2>
						<p>El registro subsecuente consiste en hacer una copia del registro de la carga académica anterior en la cual se podrán realizar las actualizaciones pertinentes para la nueva carga; es necesario que a esta copia se le asigne un nuevo periodo.</p>
						<center><img src="../imagenes/registro/CA/regSubCA.png"></center>
						<ul class="lista-num">
							<li>1.	Seleccione la carrera. </li>
							<li>2.	Seleccione el periodo del cual quiere copiar la carga.</li>
							<li>3.	Para realizar la copia de la carga anterior pulse el botón "Copiar carga anterior".</li>
						</ul>
						<p>Automáticamente se abrirá la ventana siguiente:</p>
						<center><img src="../imagenes/registro/CA/perioCopiaCA.png"></center>
						<ul class="lista-vineta">
							<li>• Introduzca los datos correspondientes como se especifica en el catálogo de periodos.</li>
							<li>• Pulse el botón copiar, cuando la carga se haya realizado exitosamente le aparecerá un mensaje especificándoselo.</li>
						</ul>
						<p>Si desea agregar más unidades de aprendizaje a un semestre:</p>
						<ul class="lista-num">
							<li>4.	Seleccione el plan.</li>
							<li>5.	Filtre las materias por obligatoria u optativas según sea la necesidad.</li>
							<li>6.	Seleccione la unidad de aprendizaje activando la casilla de verificación asociada al nombre.</li>
							<li>7.	Seleccione el semestre al que añadirá la unidad de aprendizaje.</li>
							<li>8.	Selecciona los grupos a los que desea añadir la unidad de aprendizaje (si el grupo no existe deberá darlo de alta).</li>
							<li>9.	Pulse el botón de actualizar carga.</li>
						</ul>
 						<a href="#arriba"><img src="../imagenes/arriba.png">Ir arriba</a>
				    </div>




			        <div class="content-3">
						<h2>Consulta</h2>
                        <p>Para realizar la consulta de la carga académica es  necesario seleccionar la carrera y el periodo, el resto de los campos es opcional, después presione el botón buscar y le aparecerán en pantalla los resultados correspondientes.</p>
					    <p>La casilla de verificación tronco común aparecerá activa por default, esta añade los registros de carga académica correspondientes a tronco común (considere que tronco común se toma como un programa educativo diferente).</p>
					    <center><img src="../imagenes/consulta/CA/consultaCA.png"></center>
				    </div>



				    <div class="content-4">
						<h2>Modificación de CA</h2>
                		<p>Para usar la copia de la carga, en la pantalla se mostrará la carga que acaba de hacer para que realice los cambios, la siguiente figura muestra la carga copiada, en este caso solo había carga para el séptimo semestre:</p>
						<center><img src="../imagenes/actualizar/CA/copiaCA.png"></center>
						<p>Si desea editar la carga copiada, cada registro tiene asociado un botón de modificar, este botón sirve para actualizar los grupos asociados a esa unidad de aprendizaje:</p>
						<center><img src="../imagenes/actualizar/CA/modGrupos.png"></center>
 						<a href="#arriba"><img src="../imagenes/arriba.png">Ir arriba</a>
                    </div>



                 
                    <div class="content-5">
						<h2>Eliminación</h2>
                        <p>Hay otro botón asociado al registro, el de eliminar,  este botón elimina la unidad de aprendizaje de la carga con todos los grupos asociados.</p>
						<center><img src="../imagenes/eliminacion/CA/DelUAdeCA.png"></center>
				    </div>



                    
                    <div class="content-6">
						<h2>Preguntas frecuentes de CA</h2>
                        <p>
                        <ul class="lista-vineta">
							<li><strong>¿Qué es una carga académica?</strong></li><br>
							<li>R. Conjunto de unidades de aprendizaje dentro del plan(es) de estudio que se le ofrecen al alumno para cursar en un periodo escolar (semestral).</li><br>
							<li><strong>¿Qué es una carga académica inicial? </strong></li><br>
							<li>R. Así se le llama al registro de la carga académica por primera vez.</li><br>
							<li><strong>¿Qué es una carga académica subsecuente? </strong></li><br>
							<li>R. Es el registro de la carga académica a partir de una carga ya existente solo se guarda con otro periodo.</li><br>
							<li><strong>¿Cómo doy de alta el semestre?</strong></li><br>
							<li>R. Los semestres están definidos de acuerdo a los lineamientos de la FCA, actualmente se manejan un tope de 9 semestres. </li><br>
							<li><strong>¿Cómo doy de alta un grupo?</strong></li><br>
							<li>R. Puede realizarlo desde la carga inicial si así lo requiere o desde la carga subsecuente, es necesario introducir la carrera, el periodo, seleccionar el semestre y abrir el catálogo de grupos el cual toma como nomenclatura para definir el grupo la carrera como primer digito, el semestre como segundo digito y un identificador del grupo como tercer digito.</li><br>
							<li><strong>¿Cómo doy de alta un turno?</strong></li><br>
							<li>R. Actualmente dentro de la FCA están definidos los turnos matutino, vespertino e interturno y son los que arroja el sistema como opción a elegir.</li><br>
							<li><strong>¿Porque la pantalla inicial de carga académica muestra dos veces la misma información?</strong></li><br>
							<li>R. Porque del lado izquierdo permite desplegar información del plan anterior y del lado derecho información del plan actual.</li><br>
							<li><strong>¿Qué hace el botón de copiar carga anterior?</strong></li><br>
							<li>R. Realiza una copia de la carga registrada anteriormente y permite asignarle un periodo para guardarla como la carga actual.</li><br>
							<li><strong>¿En la consulta de carga académica porque aparece tronco común en una casilla de verificación?</strong></li><br>
							<li>R. Tronco común es considerado como una carrera más, por default esta seleccionado, si en la consulta desea que aparezcan los grupos con las materias de licenciatura y tronco común, introduzca los otros criterios de búsqueda y presione el botón de buscar de lo contrario deseleccione la casilla de verificación para que solo aparezca la carga de los grupos de licenciatura. </li><br>
						</ul>

                        </p>
				    </div>



                    
                    <div class="content-7">
						<h2>Glosario de CA</h2>
                        <p></p>
                             <ul class="lista-vineta">
					            <li><strong> Carga académica.</strong> Conjunto de unidades de aprendizaje dentro del plan(es) de estudio que se le ofrecen al alumno para cursar en un periodo escolar (semestral).</li>
					            <li><strong>Carga inicial. </strong>Hace referencia a la primera vez que se ingresa una carga académica en el sistema.</li><br>
								<li><strong>Carga subsecuente.</strong> Hace referencia a las cargas que se generan a partir de la primera carga académica registrada en el sistema, se toma una copia de la anterior y se modifican los datos correspondientes, se guarda al final con el periodo correspondiente.</li><br>
								<li><strong>Carreras. </strong>Conjunto de licenciaturas que se ofertan a los alumnos en una determinada facultad.</li>  <br>
					  			<li><strong>Grupo. </strong>Está formado por un conjunto de alumnos que comparten materias en común, para dar de alta un grupo este debe estar asociado a una carrera y a un semestre. </li><br>
								<li><strong>Materias. </strong>Hace referencia a las unidades de aprendizaje.</li><br>
								<li><strong>Periodo. </strong>Tiempo definido en el cual los alumnos cursan las unidades de aprendizaje.</li><br>
								<li><strong>Plan anterior. </strong>Muestra el plan de estudios anterior registrado, hay alumnos que cursan las unidades de aprendizaje correspondientes al periodo anterior al actual y el sistema da opción para darle seguimiento a estos grupos.</li><br>
								<li><strong>Plan vigente. </strong>Muestra el último plan de estudios registrado. </li><br>
								<li><strong>Semestre. </strong>Periodo de 6 meses en los cuales se imparten determinadas materias por grupo.</li><br>
								<li><strong>Turnos. </strong>Organización del horario en el cual los alumnos cursan las materias que tienen dadas de alta, actualmente existe el turno matutino, vespertino e interturno.</li> <br> 

            					 <a  href="#arribaglosario"><img src="../imagenes/arriba.png">Ir arriba</a>
      						</ul>
				    </div>
		        </div>
			</section>
        </div>
             
       	
		</div>
		<div class="overlay"></div>
	</div>
</body>
</html>