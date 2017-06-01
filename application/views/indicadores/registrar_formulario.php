<!-- 1 ==========     CABECERA Y NAVEGACIÓN    ============= -->
<?php
    //ruta por defecto es public/
 $data = array (
            'titulo' => 'Registrar Indicador',
            'css'    => array ('assets/css/jquery-ui.custom.min.css',
                                'assets/css/chosen.min.css'                                                             
                               )
        );
    $this->load->view('comun/header', $data);
    $this->load->view('comun/nav_top');
    $this->load->view('comun/nav_left');
?>

<!-- lista de Navegación y título   -->
<?php  $data = array (  
                        'navegacion'    => array ('Gestion de Indicadores'  => '', 'Registrar'  => ''),
                        'titulo'        => 'Registrar Indicador' ,
                        'descripcion'   => 'Ingrese Nuevo indicador ' 
                        
                    ) ;
$this->load->view('comun/nav_cuerpo',  $data) ; ?>


<!-- 2 =============     CUERPO     ======================= -->
<div class="row">
    <div class="col-xs-12">
        
            <!-- PAGE CONTENT BEGINS -->          
<form class="form-horizontal" role="form">
        <div class="form-group">
            <label class="col-md-4 col-sm-4 col-xs-8 control-label no-padding-right" for="nombre"> Nombre </label>

            <div class="col-md-3 col-sm-3 col-xs-8">
                <input type="text" id="nombre" name="nombre" placeholder=" Nombre de Indicador" class="col-md-12 col-sm-12 col-xs-12"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 col-sm-4 col-xs-8 control-label no-padding-right" for="nombre"> Unidad Asignada </label>

            <div class="col-md-3 col-sm-3 col-xs-8">
                <select class="chosen-select form-control" data-placeholder="Elegir Unidad" > 
                    <option value=""></option>
                    <option value="1">Planeamiento Operativo</option>                             
                    <option value="2">Seguridad</option>
                    <option value="3">Servicios Informaticos</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
                <div class="col-sm-5 center-margin">
                    <div class="widget-box">
                        <div class="widget-header">
                            <h4 class="smaller">
                                Unidad de Medida                                                                
                            </h4>                            
                        </div>
                        <div class="widget-body">                          
                            <div class="widget-main">
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 col-xs-8 control-label no-padding-right" for="nombre">Medida Nº1 </label>
                        
                                    <div class="col-md-7 col-sm-7 col-xs-10">
                                        <input type="text" id="unidad_1" name="unidad_1" placeholder="Unidad N º 1" class="col-md-12 col-sm-12 col-xs-12"/>
                                    </div>                                    
                                </div>
                                
                                 <div class="form-group">
                                    <label class="col-md-4 col-sm-4 col-xs-8 control-label no-padding-right" for="nombre">Medida Nº2 </label>
                        
                                    <div class="col-md-7 col-sm-7 col-xs-8">
                                        <input type="text" id="unidad_1" name="unidad_1" placeholder="Unidad N º 1" class="col-md-12 col-sm-12 col-xs-12"/>
                                    </div>
                                    <div class="">
                                        <button class="btn  btn-danger btn-xs">
                                            <i class="ace-icon fa glyphicon-minus "></i>                                            
                                         </button>
                                     </div>
                                </div>

                                <hr />
                               
                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->
                <div class="col-sm-2"><button class="btn btn-success">Agregar</button></div>
        </div><!-- /.row -->
        
        <div class="clearfix form-actions">
            <div class="col-md-offset-4 col-md-9"
            <div class="col-md-offset-4 col-md-9">
                <button class="btn btn-primary" type="button">
                    <i class="ace-icon fa fa-check bigger-110"></i>
                    Guardar
                </button>

                &nbsp; &nbsp; &nbsp;
                <button class="btn" type="reset">
                    <i class="ace-icon fa fa-undo bigger-110"></i>
                    Resetear
                </button>
            </div>
        </div>
        
       
    </form>
           

    </div><!-- /.col -->    
</div><!-- /.row -->                 


<!-- 3 =============       FOOTER          ========================= -->
<?php
//ruta por defecto es public/
 $data = array (
                'javascripts' => array ('assets/js/chosen.jquery.min.js',
                                         'recursos/indicadores/js/registrar_select.js'                                        
                                       )
            );
    $this->load->view('comun/footer', $data);
?>
                          