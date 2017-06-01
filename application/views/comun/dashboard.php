<!-- 1 ==========     CABECERA Y NAVEGACIÓN    ============= -->

<?php
    $this->load->view('comun/header');
    $this->load->view('comun/nav_top');
    $this->load->view('comun/nav_left');
?>

<!-- lista de Navegación y título   -->
<?php  $data = array (  
                        'navegacion'    => array ('dashboard'  => 'http://google.com'),
                        'titulo'        => 'DashBoard' ,
                        'descripcion'   => 'Soy Una descripción' 
                        
                    ) ;
$this->load->view('comun/nav_cuerpo',  $data) ; ?>


<!-- 2 ===========      CUERPO     ======================= -->
<div class="row">
    <div class="col-xs-12">
        
            <!-- PAGE CONTENT BEGINS -->          

            <div class="row">
                <h1>Cuadro  de Resumen 1</h1>
            </div><!-- /.row -->

            <div class="hr hr32 hr-dotted"></div>
            
            <div class="row">
                <h1>Cuadro  de Resumen 2 </h1>
            </div><!-- /.row -->          

            <div class="hr hr32 hr-dotted"></div>

    </div><!-- /.col -->    
</div><!-- /.row -->                 


<!-- 3 =======       FOOTER          ========================= -->
<?php
    $this->load->view('comun/footer');
?>
                          