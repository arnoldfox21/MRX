    <div id="k-footer"><!-- footer -->
    
        <div class="container"><!-- container -->
        
            <div class="row no-gutter"><!-- row -->
            
                <div class="col-lg-4 col-md-4"><!-- widgets column left -->
            
                    <div class="col-padded col-naked">
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                            <li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget white-text">Navigasi</h1>                                
                                <ul>
                                    <li><a  href="<?php echo base_url('profil/harga');?>" title="menu item"><div class="white-text">Daftar Harga</div></a></li>
                                    <li><a href="<?php echo base_url('profil/klien');?>" title="menu item"><div class="white-text">Daftar Klien</div></a></li>
                                    <li><a href="<?php echo base_url('produk');?>" title="menu item"><div class="white-text">Produk Kami</div></a></li>
                                    <li><a href="<?php echo base_url('galeri');?>" title="menu item"><div class="white-text">Album Foto</div></a></li>
                                    <li><a href="<?php echo base_url('blog');?>" title="menu item"><div class="white-text">Blog</div></a></li>
                                    <li><a href="<?php echo base_url('download');?>" title="menu item"><div class="white-text">Download File</div></a></li>
                                    <li><a href="<?php echo base_url('kontak');?>" title="menu item"><div class="white-text">Kontak</div></a></li>
                                </ul>
                    
                            </li>
                            
                        </ul>
                         
                    </div>
                    
                </div><!-- widgets column left end -->
                
                <div class="col-lg-4 col-md-4"><!-- widgets column center -->
                
                    <div class="col-padded col-naked">
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                            <li class="widget-container widget_recent_news"><!-- widgets list -->
                    
                                <h1 class="title-widget white-text"><?php echo $site['nameweb'];?> Kontak</h1>
                                
                                <div itemscope itemtype=""> 
                                
                                    <h2 class="title-median m-contact-subject white-text" itemprop="name">Kantor <?php echo $site['nameweb'];?></h2>
                                
                                    <div class="m-contact-address" itemprop="address" itemscope itemtype="">
                                        <span class="m-contact-street" itemprop="street-address"><?php echo $site['address'];?></span>
                                        <span class="m-contact-city-region"><span class="m-contact-city" itemprop="locality"><?php echo $site['city'];?></span></span>
                                        <span class="m-contact-zip-country"><span class="m-contact-zip" itemprop="postal-code"><?php echo $site['zip_code'];?></span></span>
                                    </div>
                                     
                                    <div class="m-contact-tel-fax">
                                        <span class="m-contact-tel">Tel: <span itemprop="tel"><?php echo $site['phone_number'];?></span></span>
                                        <span class="m-contact-fax">Fax: <span itemprop="fax"><?php echo $site['fax'];?></span></span>
                                    </div>
                                    
                                </div>
                                
                                <div class="social-icons">
                                
                                    <ul class="list-unstyled list-inline">
                                    
                                        <li><a href="<?php echo $site['twitter'];?>" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="<?php echo $site['facebook'];?>" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    
                                    </ul>
                                
                                </div>
                    
                            </li>
                            
                        </ul>
                        
                    </div>
                    
                </div><!-- widgets column center end -->
                
                <div class="col-lg-4 col-md-4"><!-- widgets column right -->
                
                    <div class="col-padded col-naked">
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                            <li class="widget-container widget_sofa_flickr"><!-- widgets list -->
                    
                                <h1 class="title-widget white-text">Album Foto</h1>
                                
                                <ul class="k-flickr-photos list-unstyled">
                                <?php
                                    $galleries = $this->mGalleries->listGalleryPubFooter();
                                    foreach ($galleries as $gallery){                       
                                ?>
                                    <li><a href="<?php echo base_url('galeri');?>" title="<?php echo $gallery['gallery_name'];?>"><img src="<?php echo base_url('assets/upload/image/'.$gallery['image']);?>" alt="Photo <?php echo $gallery['gallery_id']; ?>" /></a></li>
                                <?php } ?>
                                 </ul>
                    
                            </li>
                            
                        </ul> 
                        
                    </div>
                
                </div><!-- widgets column right end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- footer end -->
    
    <div id="k-subfooter"><!-- subfooter -->
    
        <div class="container"><!-- container -->
        
            <div class="row"><!-- row -->
            
                <div class="col-lg-12">
                    <center>
                    <p class="copy-text text-inverse white-text">
                    &copy; 2017 <?php echo $site['nameweb'];?>
                    </p>
                    </center>
                
                </div>
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- subfooter end -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/front/jQuery/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/front/jQuery/jquery-migrate-1.2.1.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets/front/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Drop-down -->
    <script src="<?php echo base_url();?>assets/front/js/dropdown-menu/dropdown-menu.js"></script>
    
    <!-- Fancybox -->
    <script src="<?php echo base_url();?>assets/front/js/fancybox/jquery.fancybox.pack.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/fancybox/jquery.fancybox-media.js"></script><!-- Fancybox media -->
    
    <!-- Responsive videos -->
    <script src="<?php echo base_url();?>assets/front/js/jquery.fitvids.js"></script>
    
    <!-- Audio player -->
    <script src="<?php echo base_url();?>assets/front/js/audioplayer/audioplayer.min.js"></script>
    
    <!-- Pie charts -->
    <script src="<?php echo base_url();?>assets/front/js/jquery.easy-pie-chart.js"></script>
    
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
    
    <!-- Theme -->
    <script src="<?php echo base_url();?>assets/front/js/theme.js"></script>
    
 </body>
</html>