 <?php
         $miconn=new mysqli("10.20.25.214", "root", "avaras08", "datosPersonales");
                    if ($miconn->connect_errno) {
                    echo "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
         }
           
         $nom=$_POST['nombre'];
            $ape=$_POST['apellido'];
            $infoconexion=$miconn->client_info;
            
            $sql="INSERT INTO persona(nombre,apellido,host)values('$nom','$ape','$infoconexion');";
            
            $sqlip="select host from information_schema.processlist WHERE ID=connection_id();";
            $resultado = $miconn->query($sqlip);
            
            /* Consultas de selección que devuelven un conjunto de resultados */
            if ($resultado = $miconn->query($sql))
                
                $miconn->close();
            
        ?>