<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
<div class="Contact" id="Contact">
    <div class="txtt">

        <form method="$_POST"> <br><h1><center> Centre de Contact </h1>
			<table>
						<tr>
							<td> <label>Nom et Prénom</label></td>
							<td><input type="text" name="nom" required placeholder="Veuillez entrer votre Nom et votre Prénom "></td>
						</tr>
					<br>
						<tr>
							<td><label>Votre adresse Mail:</label></td>
							<td><input type="email" name="email" required  placeholder= "Veuillez entrer votre adresse Mail"> </td>
						</tr>
					<br>
						<tr>
							<td><label>Votre message :</label></td>
						</tr>
						<tr>
							<td colspan=2><textarea name="message" required rows="10" cols="50"> </textarea></td>
						</tr>
					<br>
			</table>
		<input type="submit">
    </form>
    <?php
    if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé </h1>
        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('mickael.barthemy@hotmail.fr', 'Envoi depuis Contact', $message, $entete);
        if($retour) {
            echo '<p>Votre message à bien été envoyé.</p>';
        }
    }
    ?>
  </div>
  <div class="ph1">
  </div>
  <div class="ph2">
  </div>
</div>
  </body>
</html>
