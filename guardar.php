 <?php
         $miconn=new mysqli("localhost", "root", "avaras08", "datospersonales");
         
         if ($miconn->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
            }
            $nom=$_POST['nombre'];
            $ape=$_POST['apellido'];
            $sql="INSERT INTO persona(nombre,apellido)";
            $sql=$sql."values('$nom','$ape)";
            
            /* Consultas de selección que devuelven un conjunto de resultados */
            if ($resultado = $miconn->query("SELECT * FROM persona"))
                
                $resultado->close();
        ?>