<!-- 1 ==========     CABECERA Y NAVEGACIÓN    ============= -->
<?php
//ruta por defecto es public/
 $data = array (
            'css' => array ('librerias/datatable/datatables.min.css'  ,'librerias/datatable/datatables.min.css'                                
                            )
        );
    $this->load->view('comun/header', $data);
    $this->load->view('comun/nav_top');
    $this->load->view('comun/nav_left');
?>
<!-- lista de Navegación y título   -->
<?php  $data = array (  
                        'navegacion'    => array ('dashboard'  => 'http://google.com'),
                        'titulo'        => 'Usuarios' ,
                        'descripcion'   => 'Listado'                         
                    ) ;
$this->load->view('comun/nav_cuerpo',  $data) ; ?>
<!-- 2 =============     CUERPO     ======================= -->
<div class="row">
    <div class="col-xs-12">
        
                      
            <!-- inicio de contenedor de tabla-->
            <div class="row">
                    <div class="col-xs-12">
                        

                        <div class="clearfix">
                            <div class="pull-right tableTools-container"></div>
                        </div>
                        <div class="table-header">
                           Listado de Usuarios del Sistema
                        </div>

                        <!-- div.table-responsive -->

                        <!-- div.dataTables_borderWrap -->
                        <div>
                        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>                                                        
                                                        <th>Usuario</th>                                                        
                                                        <th class="hidden-480">Correo</th>
                                                        <th class='hidden-480'>
                                                            <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                                            Ultimo inicio
                                                        </th> 
                                                        <th></th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php  foreach ($lst_usuarios as $usuario ) {
                                                      ?>   <tr>
                                                                <td>
                                                                  <?= $usuario->username ?>
                                                                </td>
                                                                <td class='hidden-480'>
                                                                  <a onClick="javascript:window.open('mailto:<?=  $usuario->email ?>', 'mail');event.preventDefault()" href="mailto:<?=  $usuario->email ?>" > <?=  $usuario->email ?> </a>
                                                                </td>
                                                                 <td class='hidden-480'>
                                                                  <?php echo fecha_transformar_fecha($usuario->last_login) ?>
                                                                </td>                                                               
                                                                  <!-- PARA COLUMNA DE OPCIONES -->
                                                                 <td>
                                                                    <div class="hidden-sm hidden-xs action-buttons">
                                                                        <a class="blue" href="#">
                                                                            <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                        </a>
        
                                                                        <a class="green" href="#">
                                                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                        </a>
        
                                                                        <a class="red" href="#">
                                                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                        </a>
                                                                    </div>
        
                                                                    <div class="hidden-md hidden-lg">
                                                                        <div class="inline pos-rel">
                                                                            <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                            </button>
        
                                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                <li>
                                                                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                        <span class="blue">
                                                                                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
        
                                                                                <li>
                                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                        <span class="green">
                                                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
        
                                                                                <li>
                                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                        <span class="red">
                                                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                      </tr>  <!-- fin de fila -->
                                                  <?php             
                                                      }//FIN FOREACH                                                    
                                                    ?>
                                                    
                                                       
                                                    
                                                </tbody>
                                            </table>
                                </div>
                            </div>
                        </div>
            
            
            

    </div><!-- /.col -->    
</div><!-- /.row -->                


<!-- 3 =============       FOOTER          ========================= -->
<?php
    //ruta por defecto es public/
    $data = array (
                'javascripts' => array ('librerias/datatable/datatables.min.js',
                                        'tools/datatable.js',
                                        'recursos/sistema/js/usuarios_tabla.js'
                                       )
            );
    $this->load->view('comun/footer', $data);
?>
                          