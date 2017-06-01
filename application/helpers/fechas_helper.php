<?php


  // --------------------------------------------------------------
    /**
     * Transforma una fecha del sistema , en una fecha amigable     
     * @param  $fecha(date o string) , fecha en formato del sistema
     * @return  $fecha_legible(string) , fecha amigable Ejm: Lun 21 Mayo 2017 13:12:50
     */   
function fecha_transformar_fecha($fecha) {

        if ($fecha == null)
            return 'Sin Asignar';

         $mi_fecha = new DateTime("$fecha");
         $dia_semana =  $mi_fecha->format('w');
         $dia_fecha =  $mi_fecha->format('d');
         $mes_numero =  $mi_fecha->format('n');
         $anyo = $mi_fecha->format('Y');
         $horas_minutos = $mi_fecha->format('H:i:s'); //y segundos

        // echo "hoy es Mie $dia del $mes del $año $horas_minutos";

        $dias = array("Dom","Lun","Mar","Mie","Jue","Vie","Sáb");
        $meses = array("Ener","Febr","Marz","Abri","Mayo","Juni","Juli","Ago","Sept","Octu","Novi","Dici");

        $fecha_legible = $dias[$dia_semana]." ".$dia_fecha." ".$meses[($mes_numero-1)]. " $anyo - $horas_minutos" ;
        return $fecha_legible;

    }

?>