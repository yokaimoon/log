

<form action = "login.php">
<table>
<tbody>
<tr>
	<td> <input type = "email" name = "email" value = "Correo" onclick = "if(this.value=='Correo') this.value=''" onblur="if(this.value=='') this.value='Correo'" /> </td>
	<td> <input type = "password" value = "contraseña" onclick = "if(this.value == 'contraseña') this.value =''" onblur = "if(this.value=='') this.value = 'contraseña'" />	</td>
	<td><input type = "submit" value = "Entrar"></td>
</tr>
	<td> <div id = "ltext"><input type = "checkbox" value = "No"> No cerrar sesi&oacute;n </div></td> <td> <div id = "ltext"><a href = ""> ¿Has olvidado tu contrase&ntilde;a?</a> </div></td>
	
	</tbody>
</table>
</form>

