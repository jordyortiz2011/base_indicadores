      <!-- PAGE CONTENT ENDS -->
                          
                    </div><!-- /.page-content -->
                </div>
</div><!-- /.main-content -->

    <div class="footer">
        <div class="footer-inner">
            <div class="footer-content">
                <span class="bigger-120">
                    <span class="red bolder">PetroPerú &copy; </span> -
                    Indicadores v1.0  2017
                </span>
                &nbsp; &nbsp;            
            </div>
        </div>
    </div><!-- /.End Footer -->

    <!-- Boton para ir arriba -->
    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>        
    </a>
    
</div><!-- /.main-container -->
    
 <!-- ========== basic scripts ================ -->
    
    <!--[if !IE]> -->
    <script src="<?= base_url('public')?>/assets/js/jquery-2.1.4.min.js"></script>
    
    <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="<?= base_url('public')?>/assets/js/bootstrap.min.js"></script>
        <!-- ace scripts -->
        <script src="<?= base_url('public')?>/assets/js/ace-elements.min.js"></script>
        <script src="<?= base_url('public')?>/assets/js/ace.min.js"></script>
        <script src="<?= base_url('public')?>/assets/mi_sidebar.js"></script>

        <!-- inline scripts related to this page -->
       
        <?php
             // Agregar javascript dinamicamente
            if( isset( $javascripts ) )
            {
                foreach( $javascripts as $js )
                {
                    echo '<script src="'. base_url('public/').$js . '"></script>' . "\n";
                }
            }
        ?>
       
       
    </body>
</html>
