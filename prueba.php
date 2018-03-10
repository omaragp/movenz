<?php
	
	require_once("lib_php/Textos_HTML.php");
	require_once("lib_php/template.php");
	
	
	if (!isset($_SESSION[adminId]))
		header("location: index.php");
	
	
	$textos = $Textos_HTML;
	$lang = template_getLenguaje();
	
	
	CabeceraHTML("agenteClientes_ver2.css,agenteClientes.js");
	CuerpoHTML(0);
?>
<div class="agenteClientes_cuerpo">
	<h1><?php echo $textos["agenteClientes"][$lang][0]; ?></h1>
    <div class="contenedorBusqueda">
    	<!--a class="descarga" href="lib_php/xlsEmbarques.php" title="<?php echo $textos["embarques"][$lang][8]; ?>" target="_blank"></a--><input type="text" id="busqueda" class="templateCampos" placeholder="<?php echo $textos["agenteClientes"][$lang][2]; ?>" /><div class="template_btnGeneral" onclick="embarques_consultar();"><?php echo $textos["template"][$lang][10]; ?></div>
    </div>
    <table>
    	<tbody>
        	<tr class="titulos">
            	<td><?php echo $textos["agenteClientes"][$lang][1]; ?></td>
            </tr>
        </tbody>
    </table>
</div>
<?php
	FinCuerpo();
	FinHTML();
?>