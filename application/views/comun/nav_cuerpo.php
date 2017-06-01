<!-- ========== LISTA DE NAVEGACION ================== -->
<div class="main-content-inner">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="<?= base_url('comun/dashboard')?>">Home</a>
            </li>
            
        <?php    // Add any javascripts
        if( isset($navegacion ) )
        {
            foreach($navegacion as $nombre => $url)
            {                
                echo "<li><a href=". $url .">" . $nombre."</a> </li>";
            }
        }?>
        </ul><!-- /.breadcrumb --> 
                           
        <div class="nav-search" id="nav-search">        
                <span class="input-icon">                
                  
                   <!-- Ayuda-->
                </span>       
        </div><!-- /.nav-search -->
    </div>

 <div class="page-content">
     
<!-- ========== TITULO DEL CONTENIDO ================== -->
    <div class="page-header">
        <h1>
            <?= $titulo ?>
                <?php if ($descripcion  != ' ') { ?>
                <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                    <?= $descripcion ?>
                </small>
                <?php }?>
        </h1>
       
    </div><!-- /.page-header -->