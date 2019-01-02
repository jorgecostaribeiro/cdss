<?php session_start(); 

$dfuserid = $_SESSION['dfuserid'];
$dfusernome = 	$_SESSION['dfusernome'];
$dfusermail = $_SESSION['dfusermail'];
$dfusernivel = $_SESSION['dfusernivel'];

$dfclinicaid = $_SESSION['clinicaid'];
$clinicanick = $_SESSION['clinicanick'];
$clinicalocal = $_SESSION['clinicalocal'];

if($dfclinicaid == 1){
	
	$clinicaid = $_SESSION['clinicaid'];
	
	}

if($dfclinicaid != 1){
	
$_SESSION['clinicaid'] = '1';
$_SESSION['clinicanick'] = 'FLG';
$_SESSION['clinicalocal'] = 'RANDE'; $clinicaid = 1;
	
	}

$anoactual = date("Y");
			$mesactual = date("m");
			
			 switch($mesactual){
				
				case '01':  
			  	$mespt = "Janeiro";
				break;
				
				case '02':  
			  	$mespt = "Fevereiro";
				break;
				
				case '03':  
			  	$mespt = "Março";
				break;
				
				case '04':  
			  	$mespt = "Abril";
				break;
				
				case '05':  
			  	$mespt = "Maio";
				break;
				
				case '06':  
			  	$mespt = "Junho";
				break;
				
				case '07':  
			  	$mespt = "Julho";
				break;
				
				case '08':  
			  	$mespt = "Agosto";
				break;
				
				case '09':  
			  	$mespt = "Setembro";
				break;
				
				case '10':  
			  	$mespt = "Outubro";
				break;
				
				case '11':  
			  	$mespt = "Novembro";
				break;
				
				case '12':  
			  	$mespt = "Dezembro";
				break;
				
			  }

$valcd = 35;

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Dental Flux V2.0</title>
<!-- Phone -->
<link href="mobile.css" rel="stylesheet" type="text/css" media="only screen and (max-width:320px)">
<!-- Tablet -->
<link href="tablet.css" rel="stylesheet" type="text/css" media="only screen and (min-width:321px) and (max-width:768px)">
<!-- Desktop -->
<link href="desktop.css" rel="stylesheet" type="text/css" media="only screen and (min-width:769px)">



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
   <script>
     $(document).ready(function(){
			$('#pedlk').text('Ver os meus pedidos');
		
			$('#numcd').keyup(function(){
				   
				   
				    var v = $('#numcd').val()*<?php echo $valcd; ?>;
					
					if(v != 0){
						
						$('#valped').show();
						
					}
						
					else{
						
						$('#valped').hide();
						
						}
					
					$('#valped').text("O valor do pedido é de "+v+"€");
			 });

			
			
			$('#pedlk').toggle(
			  function(){
				$(this).text('Fechar');
				$('#peddiv').slideDown();
			  },
			  function(){
				 $(this).text('Ver os meus pedidos');
				$('#peddiv').slideUp();
			  }
			);
						
			
			
			


			$("form").bind("keypress", function(e) {
					 if (e.keyCode == 13) {
						 
						 alert("Pressionaste Enter\nFormulário não enviado");
						 
						 return false;
					}
				 });


     });
   </script>
</head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<body>
<div id="header">

</div>

<div class="conteudo">

	<div class="menu">
        	<div class="conta"><?php echo $dfusernome; ?><br><?php echo $clinicalocal.' - '.$clinicanick; ?></div>
            <a href="../cl/"><div class="button"><img id="clincon" class="menuicon" src="../../icons/clicon.png"> Clínica</div></a>
            <a href="../fn/"><div class="button"><img id="fnincon" class="menuicon" src="../../icons/fnicon.png"> Finanças</div></a>
            <a href="../ag/"><div class="button"><img id="agincon" class="menuicon" src="../../icons/agicon.png"> Agenda</div></a>
            <a href="../lb/"><div class="button"><img id="lbincon" class="menuicon" src="../../icons/lbicon.png"> Laboratório</div></a>
            <a href="../fm/"><div class="button"><img id="tlincon" class="menuicon" src="../../icons/tlicon.png"> Ferramentas</div></a>
           	<a href="../cd/"><div class="button"><img id="cdincon" class="menuicon" src="../../icons/cdicon.png"> PNPSO</div></a>
            <a href="../ad/"><div class="button"><img id="asincon" class="menuicon" src="../../icons/asicon.png"> Administração</div></a>
            <a href="../ef/"><div class="button"><img id="efincon" class="menuicon" src="../../icons/eficon.png"> EuroFlux</div></a>
            <a href="../of/"><div class="button"><img id="ofincon" class="menuicon" src="../../icons/oficon.png"> OrtoFlux</div></a>
            <a href="../om/"><div class="button"><img id="omincon" class="menuicon" src="../../icons/omicon.png"> Ortodontia MR</div></a>
            <a href="../ct/"><div class="button"><img id="omincon" class="menuicon" src="../../icons/cticon.png"> Minha Conta</div></a>
            <a href="../../logout.php"><div class="button"><img id="omincon" class="menuicon" src="../../icons/sairicon.png"> Encerrar</div></a>
      
           
     </div><!-- menu -->
	
     <div class="form">
     	 <div class="formsubmenu">  	
         <a href="pedidos.php" id="radiosbtn"><div class="submenubtn" ><img class="submenuicon" src="smicon.png"> Solicitar Pagamento</div></a>
       <?php  
	   if($dfusernivel < 3){
	  
	  echo '  <a href="recibos.php" id="radiosbtn"><div class="submenubtn" ><img class="submenuicon" src="smicon.png"> Emitir FR ARS</div></a>';
	   }
		 
		 if($dfusernivel == 1){
	  
	  		echo '  <a href="pagamentos.php" id="radiosbtn"><div class="submenubtn" ><img class="submenuicon" src="smicon.png"> Autorizar Pagamento</div></a>
         			<a href="resumos.php" id="radiosbtn"><div class="submenubtn" ><img class="submenuicon" src="smicon.png"> Resumos</div></a>';
		 }
        ?>
       </div><!-- titulo div -->
     	  <div class="formcontent">
        
        <div class="pedidosdiv">
        	<form action="savepedido.php" method="post">
            	<fieldset>
                <legend>Solicitar Pagamento</legend>
                 <div class="erro" style="display:<?php if($warningano == ""){echo "none";}else{echo "block";} ?>"><?php echo $warningano; ?></div>
                <label>Data do Pedido: </label>
                 <div class="formline"></div>
             <select name="diadataenviada" id="diadataenviada" class="dropmenu">
        			<option id="d1" value="01" <?php if($diaped == ''){$dia = date("d");} else{$dia = $diaped;}if($dia == '01'){echo "selected";}?>>01</option>
                    <option id="d2" value="02" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '02'){echo "selected";}?>>02</option>
                    <option id="d3" value="03" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '03'){echo "selected";}?>>03</option>
                    <option id="d4" value="04" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '04'){echo "selected";}?>>04</option>
                    <option id="d5" value="05" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '05'){echo "selected";}?>>05</option>
                    <option id="d6" value="06" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '06'){echo "selected";}?>>06</option>
                    <option id="d7" value="07" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '07'){echo "selected";}?>>07</option>
                    <option id="d8" value="08" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '08'){echo "selected";}?>>08</option>
                    <option id="d9" value="09" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '09'){echo "selected";}?>>09</option>
                    <option id="d10" value="10" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '10'){echo "selected";}?>>10</option>
                    <option id="d11" value="11" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '11'){echo "selected";}?>>11</option>
                    <option id="d12" value="12" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '12'){echo "selected";}?>>12</option>
                    <option id="d13" value="13" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '13'){echo "selected";}?>>13</option>
                    <option id="d14" value="14" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '14'){echo "selected";}?>>14</option>
                    <option id="d15" value="15" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '15'){echo "selected";}?>>15</option>
                    <option id="d16" value="16" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '16'){echo "selected";}?>>16</option>
                    <option id="d17" value="17" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '17'){echo "selected";}?>>17</option>
                    <option id="d18" value="18" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '18'){echo "selected";}?>>18</option>
                    <option id="d19" value="19" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '19'){echo "selected";}?>>19</option>
                    <option id="d20" value="20" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '20'){echo "selected";}?>>20</option>
                    <option id="d21" value="21" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '21'){echo "selected";}?>>21</option>
                    <option id="d22" value="22" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '22'){echo "selected";}?>>22</option>
                    <option id="d23" value="23" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '23'){echo "selected";}?>>23</option>
                    <option id="d24" value="24" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '24'){echo "selected";}?>>24</option>
                    <option id="d25" value="25" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '25'){echo "selected";}?>>25</option>
                    <option id="d26" value="26" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '26'){echo "selected";}?>>26</option>
                    <option id="d27" value="27" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '27'){echo "selected";}?>>27</option>
                    <option id="d28" value="28" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '28'){echo "selected";}?>>28</option>
                    <option id="d29" value="29" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '29'){echo "selected";}?>>29</option>
                    <option id="d30" value="30" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '30'){echo "selected";}?>>30</option>
                    <option id="d31" value="31" <?php  if($diaped == ''){$dia = date("d");} else{$dia = $diaped;} if($dia == '31'){echo "selected";}?>>31</option>
       		  </select>
        
         - <select name="mesdataenviada" id="mesdataenviada" class="dropmenu">
        			<option id="m1" value="01" <?php  if($mesped == ''){$mes = date("m");} else{$mes = $mesped;} if($mes == '01'){echo "selected";}?>>Janeiro</option>
                    <option id="m2" value="02" <?php  if($mesped == ''){$mes = date("m");} else{$mes =$mesped;} if($mes == '02'){echo "selected";}?>>Fevereiro</option>
                    <option id="m3" value="03" <?php  if($mesped == ''){$mes = date("m");} else{$mes = $mesped;} if($mes == '03'){echo "selected";}?>>Março</option>
                    <option id="m4" value="04" <?php  if($mesped == ''){$mes = date("m");} else{$mes = $mesped;} if($mes == '04'){echo "selected";}?>>Abril</option>
                    <option id="m5" value="05" <?php  if($mesped == ''){$mes = date("m");} else{$mes = $mesped;} if($mes == '05'){echo "selected";}?>>Maio</option>
                    <option id="m6" value="06" <?php  if($mesped == ''){$mes = date("m");} else{$mes = $mesped;} if($mes == '06'){echo "selected";}?>>Junho</option>
                    <option id="m7" value="07" <?php  if($mesped == ''){$mes = date("m");} else{$mes = $mesped;} if($mes == '07'){echo "selected";}?>>Julho</option>
                    <option id="m8" value="08" <?php  if($mesped == ''){$mes = date("m");} else{$mes = $mesped;} if($mes == '08'){echo "selected";}?>>Agosto</option>
                    <option id="m9" value="09" <?php  if($mesped == ''){$mes = date("m");} else{$mes = $mesped;} if($mes == '09'){echo "selected";}?>>Setembro</option>
                    <option id="m10" value="10" <?php  if($mesped == ''){$mes = date("m");} else{$mes = $mesped;} if($mes == '10'){echo "selected";}?>>Outubro</option>
                    <option id="m11" value="11" <?php  if($mesped == ''){$mes = date("m");} else{$mes = $mesped;} if($mes == '11'){echo "selected";}?>>Novembro</option>
                    <option id="m12" value="12" <?php  if($mesped == ''){$mes = date("m");} else{$mes = $mesped;} if($mes == '12'){echo "selected";}?>>Dezembro</option>
        		  </select> 
                - <input class="inputsmall" type="text" value="<?php if($anoped == ''){echo date("Y");} else{echo $anoped;} ?>" name="anodataenviada" id="anodataenviada" maxlength="4"/>
                <div class="formline"></div>
                <div class="erro" style="display:<?php if($warningped == ""){echo "none";}else{echo "block";} ?>"><?php echo $warningped; ?></div>
                <label>Pedido Pagamento nº:</label>
                <div class="formline"></div>
                
                <input type="text" class="inputsmalleuros" id="numped" name="numped" value="<?php echo $pedido; ?>"/>
                <div class="formline"></div>
                <div class="erro" style="display:<?php if($warningnumcd == ""){echo "none";}else{echo "block";} ?>"><?php echo $warningnumcd; ?></div>
            	<label>Nº de CD:</label>	
                <div class="formline"></div>
                <input type="text" class="inputsmallcents" id="numcd" name="numcd" value="<?php echo $numcd; ?>"/>
                <div class="formline"></div>
            	<div id="valped" style="display:none" class="valped"></div>
                <div class="formline"></div>
                <label>Clínica:</label>	
                <div class="formline"></div>
                 <select id="clinica" name="clinica" class="dropmenu">
                 <?php
                 
				 if($dfusernivel == 1){
				 	$cliquery = mysql_query("SELECT * FROM clinicas ORDER BY nickname ASC
	" ) or die(mysql_error()); 
				 
				 
				 while ($row = mysql_fetch_array($cliquery)){
				
			
					$cldepid = $row['id'];
					$cldepnick = $row['nickname'];
					
					//***** ARS
					$arsquery = mysql_query("SELECT * FROM arscl WHERE idclinica='$cldepid' 
	" ) or die(mysql_error());
					
					while ($row = mysql_fetch_array($arsquery)){
				
			
					$arsid = $row['idars'];
					
					
						$arsquerysigla = mysql_query("SELECT * FROM ars WHERE id='$arsid' 
		" ) or die(mysql_error());
						
						while ($row = mysql_fetch_array($arsquerysigla)){
					
				
						$arssigla = $row['sigla'];
					
					
						}//ars id
					}//ars sigla
					
					
					//*** ARS
					
					
					if($clidepsent == ""){
					
						if($cldepid == $clinicaid){
							
							$selected = "selected";
							}
						else{
							$selected = "";
							
							}
					}
					
					
					else{
						
						
						if($cldepid == $clidepsent){
							
							$selectedcli = "selected";
							}
						else{
							$selectedcli = "";
							
							}
						
						
						}
					
					echo "<option value='$cldepid' $selected $selectedcli>$cldepnick ($arssigla)</option>";
					
				}
				 
				 
				 
				 
				 
				 }
				 
				 else {
					$cliqueryu = mysql_query("SELECT * FROM usersclinicas WHERE dfuserid='$dfuserid'
	" ) or die(mysql_error()); 
				
				while ($row = mysql_fetch_array($cliqueryu)){
				
			
					$cliuid = $row['clinicaid'];
				
				
				 
				$cliquery = mysql_query("SELECT * FROM clinicas WHERE id='$cliuid' ORDER BY nickname ASC
	" ) or die(mysql_error());
	
				
				while ($row = mysql_fetch_array($cliquery)){
				
			
					$cldepid = $row['id'];
					$cldepnick = $row['nickname'];
					
					//***** ARS
					$arsquery = mysql_query("SELECT * FROM arscl WHERE idclinica='$cldepid' 
	" ) or die(mysql_error());
					
					while ($row = mysql_fetch_array($arsquery)){
				
			
					$arsid = $row['idars'];
					
					
						$arsquerysigla = mysql_query("SELECT * FROM ars WHERE id='$arsid' 
		" ) or die(mysql_error());
						
						while ($row = mysql_fetch_array($arsquerysigla)){
					
				
						$arssigla = $row['sigla'];
					
					
						}//ars id
					}//ars sigla
					
					
					//*** ARS
					
					
					
					if($clidepsent == ""){
					
						if($cldespid == $clinicaid){
							
							$selected = "selected";
							}
						else{
							$selected = "";
							
							}
					}
					
					
					else{
						
						
					if($cldepid == $clidepsent){
							
							$selectedcli = "selected";
							}
						else{
							$selectedcli = "";
							
							}
						
						
						}
					
					echo "<option value='$cldepid' $selectedcli>$cldepnick ($arssigla)</option>";
					
						}
					 }//while de usersclinicas	
					 
					 
				 }
			?>
            </select>
                <div class="formline"></div>
                	<input type="submit" value="Solicitar Pagamento" class="submitbtn"/>
                    
                </fieldset>
            </form>
        </div><!-- form div -->
        
        <div class="showped" id="pedlk"></div>
        <div class="pedidosdiv" style="display:none" id="peddiv">
        
        
       
        <?php
		
		
		$mypedq = mysql_query("SELECT * FROM cd WHERE dfuserid='$dfuserid' AND (anoped = '$anoactual' OR anorec = '$anoactual' OR anopag = '$anoactual') 
	" ) or die(mysql_error());
					
					while ($row = mysql_fetch_array($mypedq)){
				
						
						$pedid = $row['id'];
						$anoped = $row['anoped'];
						$mesped = $row['mesped'];
						$diaped = $row['diaped'];
						$dataped = $anoped.'-'.$mesped.'-'.$diaped;
						
						$estado = $row['estado'];
						
						$anorec = $row['anorec'];
						$mesrec = $row['mesrec'];
						$diarec = $row['diarec'];
						$datarec = $anorec.'-'.$mesrec.'-'.$diarec;
						
						$anopag = $row['anopag'];
						$mespag = $row['mespag'];
						$diapag = $row['diapag'];
						$datapag = $anoped.'-'.$mespag.'-'.$diapag;
						
						$arsped = $row['ars'];
						
						
						
						$nped = $row['numped'];
						$ncdped = $row['numcd'];
						$recped = $row['recibo'];
						
						$totalped = $ncdped * $valcd;
						
						$arspedqsigla = mysql_query("SELECT * FROM ars WHERE id='$arsped' 
		" ) or die(mysql_error());
						
						while ($row = mysql_fetch_array($arspedqsigla)){
					
				
						$arspedsigla = $row['sigla'];
						
						}
						
						if($estado == 0){
							
							$info = "
							<div>Solicitado</div>
							<div>$dataped | Nº $nped [$arspedsigla] | $ncdped CD ($totalped €)</div>
							<input type='submit' value='Editar' class='editpedbtn'/> ";
							}
							
						else if($estado == 9){
							
							$info = "
							<div>Facturado</div>
							<div>$dataped | Nº $nped [$arspedsigla] | $ncdped CD ($totalped €)</div>
							<div>FR nº $recped ($datarec)</div>
							
							
							";
							
							}
							
						else if($estado == 1){
							
							$info = "
							<div>Pago</div>
							<div>$dataped | Nº $nped [$arspedsigla] | $ncdped CD ($totalped €)</div>
							<div>$datarec | FR nº $recped</div>
							<div>Pago em: $datapag</div>
							
							";
							
							}
						
						echo "
						<div class='pedline'>
						<form action='editped.php' method='post'>
						<input type='hidden' readonly name='pedid' id='pedid' value='".$pedid."'/>
						
						$info
						
						
						</form>
						</div>
						";
		
					}
		
		?>
        
        
        </div><!-- pedidos div -->
         </div><!-- formcontent div-->   
        
  	</div><!-- form -->
        
        
               
</div><!-- conteudo -->
    


<div id="footer">
developed by JFR
</div>



</body>
</html>
