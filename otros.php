<!DOCTYPE html>
<html>
  	<head>
		<?php include("includes/head.php"); ?>
        <link rel="stylesheet" type="text/css" href="css/tabs.css">
	</head>
 	<body id="luz">
        <?php include("includes/cabecera.php"); ?>
        <main>
            <div class="contenedor texto-imprimible">
                <?php include("includes/disclaimer.php"); ?>
                <hr>
                <div>
                    <div>
             			<h2>Podcast</h2>
                        <p>Estos videojuegos datan de mi época del secundario, los conocí en mis clases de computación y los jugabamos cuando el profesor demoraba en llegar xD. <u>Funcionarán a la perfección si los corres en un windows 98.</u></p>
                        <button id="boton">Datos</button>
                        <table id="res"></table>
                        <ul>
                            <li><a href="#leyendas">Leyendas Urbanas</a></li>
                            <li><a href="#enigmas">Enigmas del Mundo</a></li>
                            <li><a href="#ufo">Historia de la Ufolog&iacute;a</a></li>
                        </ul>
                        <h3 id="leyendas">Leyendas Urbanas</h3>
                        <table width="100%" class="tabla-striped">
                            <thead>
                                <tr>
                                    <th width="5%"><strong>N°</strong></th>
                                    <th width="60%"><strong>Nombre</strong></th>
                                    <th width="25%"><strong>Fecha de emisi&oacute;n</strong></th>
                                    <th width="10%"><strong>Enlace</strong></th>
                                </tr>
                            </thead>
                            <tbody id="leyendas-tabla">
                            </tbody>
                        </table>
                        <h3 id="enigmas">Enigmas del Mundo</h3>
                        <table width="100%" class="tabla-striped">
                                            <thead>
                                                <tr>
                                                    <th width="5%"><strong>N°</strong></th>
                                                    <th width="60%"><strong>Nombre</strong></th>
                                                    <th width="25%"><strong>Fecha de emisi&oacute;n</strong></th>
                                                    <th width="10%"><strong>Enlace</strong></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Leyendas sobre la Coca-cola</td>
                                                    <td>16-Abril-2006</td>
                                                    <td><a href="#"><img src="img/download-arrow.gif" /></a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>El carné por puntos.</td>
                                                    <td>16-Julio-2006</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>La captura De Bin Laden.</td>
                                                    <td>17-Septiembre-2006</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Sistemas Operativos: Windows Vista</td>
                                                    <td>18-Marzo-2007</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Un estudio científico demuestra que Busch tiene el cociente intelectual más bajo de todos los presidentes de EEUU.</td>
                                                    <td>25-Marzo-2007</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                        <h3 id="enigmas">Historia de la Ufolog&iacute;a</h3>
                        <table width="100%" class="tabla-striped">
                                            <thead>
                                                <tr>
                                                    <th width="5%"><strong>N°</strong></th>
                                                    <th width="60%"><strong>Nombre</strong></th>
                                                    <th width="25%"><strong>Fecha de emisi&oacute;n</strong></th>
                                                    <th width="10%"><strong>Enlace</strong></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Leyendas sobre la Coca-cola</td>
                                                    <td>16-Abril-2006</td>
                                                    <td><a href="#"><img src="img/download-arrow.gif" /></a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>El carné por puntos.</td>
                                                    <td>16-Julio-2006</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>La captura De Bin Laden.</td>
                                                    <td>17-Septiembre-2006</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Sistemas Operativos: Windows Vista</td>
                                                    <td>18-Marzo-2007</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Un estudio científico demuestra que Busch tiene el cociente intelectual más bajo de todos los presidentes de EEUU.</td>
                                                    <td>25-Marzo-2007</td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                        <div class="container--tabs">
                            <section class="row">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab-1">Leyendas Urbanas</a></li>
                                    <li class=""><a href="#tab-2">Enigmas del Mundo</a></li>
                                    <li class=""><a href="#tab-3">Historia de la ufolog&iacute;a</a></li>
                                    <li class=""><a href="#tab-4">Otros</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane active"> 
                                        
                                    </div>
                                    <div id="tab-2" class="tab-pane">
                                        <h3>Feature 2</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                    <div id="tab-3" class="tab-pane">
                                        <h3>Feature 3</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                    <div id="tab-4" class="tab-pane">
                                        <h3>Feature 4</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <hr >
                <script src="js/podcast.json"></script>
                <script src="js/ajax.js"></script>
                <script src="js/tabs.js"></script>
     		</div>
            <?php include("includes/warning.php"); ?>
        </main>
        <?php include("includes/footer.php"); ?>
	</body>
</html>


                                <!-- <tr>
                                    <td>1a</td>
                                    <td>Leyendas sobre la Coca-cola</td>
                                    <td>16-Abril-2006</td>
                                    <td><a href="#"><img src="img/download-arrow.gif" /></a></td>
                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>El carné por puntos.</td>
                                                    <td>16-Julio-2006</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>La captura De Bin Laden.</td>
                                                    <td>17-Septiembre-2006</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Sistemas Operativos: Windows Vista</td>
                                                    <td>18-Marzo-2007</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Un estudio científico demuestra que Busch tiene el cociente intelectual más bajo de todos los presidentes de EEUU.</td>
                                                    <td>25-Marzo-2007</td>
                                                    <td></td>
                                                </tr> -->