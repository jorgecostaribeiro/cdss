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
        <title>DDSS PA2 - Part 1.1</title>
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
            <h2>Practical Assignment #2 - Part 1.1</h2>
            <div align="center"></div>
            <br>
            <br>


            <form action="part1_vulnerable.php" method="GET">
                <table  border="1" cellpadding="1" style="width: 300px; background-color:#f1f1f1">
                    <thead>
                        <tr>
                            <th colspan="2"><b>Part 1.0 - Vulnerable Form <?php echo $errov; ?></b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label>Username</label></td>
                            <td><input type="text" placeholder="Enter Username" name="v_username" required value="<?php echo $usernamev; ?>"></td>
                        </tr>
                        <tr>
                            <td><label>Password</label> </td>
                            <td><input type="password" placeholder="Enter Password" name="v_password" required> </td>
                        </tr>
                        <tr>
                            <td><label>Remember me</label></td>
                            <td><input  type="checkbox" checked="checked" name="v_remember"></td>
                        </tr>
                        <tr>
                            <td align="right" colspan="2"><button type="submit">Login</button></td>
                        </tr>
                    </tbody>
                </table>
            </form> 

            <br>
            <br>

            <form action="part1_correct.php" method="POST">
                <table  style="width: 300px ; background-color:#f19191" border="1" cellpadding="1">
                    <thead>
                        <tr>
                            <th colspan="2"><b>Part 1.1 - Correct Form <?php echo $erro; ?></b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label>Username</label></td>
                            <td><input type="text" placeholder="Enter Username" name="c_username" required value="<?php echo $username; ?>"></td>
                        </tr>
                        <tr>
                            <td><label>Password</label> </td>
                            <td><input type="password" placeholder="Enter Password" name="c_password" required> </td>
                        </tr>
                        <tr>
                            <td><label>Remember me</label></td>
                            <td><input  type="checkbox" checked="checked" name="c_remember"></td>
                        </tr>
                        <tr>
                            <td align="right" colspan="2"><button type="submit">Login</button></td>
                        </tr>

                    </tbody>
                </table>
            </form> 
        </div>
    </body>
</html>
