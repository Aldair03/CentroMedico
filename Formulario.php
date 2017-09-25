<form id="form1" name="form1" action="Validar.php" method="post">
  <table width="42%" border="0" align="center">
  <tr bgcolor="#cc0000" class="texto">
    <td colspan="2" align="center">INSERTAR PACIENTE</td>
  </tr>
    <tr>
      <td width="28%" align="right" bgcolor="#fbec88">Identidicacion</td>
      <td width="72%"><label for="identificacion"></label>
      <input type="text" name="pacIdentificacion" id="Identificacion" size="40" required/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#fbec88">Nombres</td>
      <td><input type="text" name="pacNombre" id="Nombre" size="40" required/></td>
    </tr>
    <tr>
      <td height="25" align="right" bgcolor="#fbec88">Apellidos</td>
      <td><input type="text" name="paApellido" size="40" required/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="fbec88">Fecha Nacimiento</td>
      <td><input type="date" name="pacFechaNacimiento" id="FechaNacimiento" style="width:270px" required/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#fbec88">Sexo</td>
      <td><label for="Sexo"></label>
            <select name="PacSexo" id="sexo" style="width:270px">
              <option value="No">Seleccione</option>
              <option value="Femenino">Femenino</option>
              <option value="Masculino">Masculino</option>
            </select>
      </td>
    </tr>
    <tr bgcolor="#cc0000" class="texto">
      <td colspan="2" align="center" bgcolor="#cc0000"> <input type="submit" name="button" id="button" value="Enviar"></td>


    </tr>
  </table>
</form>
