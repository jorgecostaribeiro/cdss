<?php session_start();

$author = $_SESSION['autor'];

?>

<!DOCTYPE html>
<!--

    =========================================
    Design and Development of Secure Software
    ============= MSI 2018/2019 =============
    ======== Practical Assignment #2 ========
    ================ Part #1 ================
    =========================================

      Department of Informatics Engineering
              University of Coimbra          
   
    Prof. Marco Vieira <mvieira@dei.uc.pt>
    Prof. Nuno Antunes <nmsa@dei.uc.pt>
   
-->
<html>
    <head>
    
 <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>    
$(document).ready(function(){
		
		
		
		var minLength = 20;
		$("#formtext").on('keydown keyup change', function(){
			
			

        var char = $(this).val();
        var charLength = $(this).val().length;
        if(charLength < minLength){
            $("#enviar").attr('disabled', true);
        }
		else if (charLength > minLength){
            $("#enviar").attr('disabled', false);
        }
		
		});
    
    
		
	  $("#enviar").click(function(){
    
			alert(<?php echo json_encode($author); ?>  " o seu formulário Correcto foi enviado e a sua mensagem guardada na base de dados. Obrigado.");
	  });
    
    
        $("#enviar").click(function(){

                alert(<?php echo json_encode($author); ?>  " o seu formulário Vulnerável foi enviado e a sua mensagem guardada na base de dados. Obrigado.");
          });

});
		
    </script>
    
        <title>DDSS PA2 - Part 1.2 - <?php echo $author; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--
            V2 info:
            - corrected a few naming bugs in the inputs
            - fixed a few syntax issues in the HTML
            - added some explanations
        -->
    </head>
    <body>
        <div align="center">

            <h1>Design and Development of Secure Software</h1>
            <h2>Practical Assignment #2 - Part 1.2 - - Bem vindo <?php echo $author; ?></h2>
            <div align="center">
               
            </div>
            <br>
            <br>
            
            <br> <a href="part3.php">Part 3</a> <br>


            <form action="part2_vulnerable.php" method='GET'>
                <table  style="width: 500px ; background-color:#f1f1f1" border="1" cellpadding="1" >
                    <thead>
                        <tr>
                            <th>
                                <b>Part 2.0 - Vulnerable Form</b>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><textarea style="width: 100%; height: 100px" placeholder="Enter Text" name="v_text" required>
                                
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="right"><button id="enviarv" type="submit">Submit</button></td>
                        </tr>
                    </tbody>
                </table>

            </form> 

            <br>
            <br>

            <form action="part2_correct.php" method='POST'>
                <table  style="width: 500px ; background-color:#f19191" border="1" cellpadding="1" >
                    <thead>
                        <tr>
                            <th><b>Part 2.1 - Correct Form</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><textarea id="formtext" style="width: 100%; height: 100px" placeholder="Enter Text" name="c_text" required> </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="right"><button type="submit" disabled id="enviar">Submit</button></td>
                        </tr>
                    </tbody>
                </table>
            </form> 

            <br>
            <br>

            <table  style="width: 500px" border="1" cellpadding="1" >
                <thead>
                    <tr>
                        <th><b>Output Box</b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <em><?php  echo $messagsent; ?>
							
							</em>
                        </td>
                    </tr>
                   
                    <tr>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
