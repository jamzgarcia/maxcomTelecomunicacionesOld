<?php
/* Para incluir librerías de base de datos y utilidades */
include_once('db/utilidades_sql.php');
include_once ('php/utilidades.php');
print_r($_SESSION);
?>

<?php 
if(isset($_SESSION['email']))
{
  if ($_SESSION['rol']=='admin') 
  {
     include_once 'php/vistaAdmin.php';
    ?>
 
    <?php
  }
    elseif ($_SESSION['rol']=='cliente') 
    { 
        include_once 'php/vistaCliente.php';
      ?>
</div> 
       <?php 
    } 
      elseif ($_SESSION['rol']=='guarda')  
      {
        include_once 'php/vistaMaster.php';
        ?>
          <?php
      } 
}else
    {
      ?> 
<p>por fuera cliente</p>                      
<?php  } 
?>