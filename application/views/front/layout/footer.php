    <div id="k-footer">
    
        <div class="container">
        
            <div class="row no-gutter">
            
                <div class="col-lg-4 col-md-4">
            
                    <div class="col-padded col-naked">
                    
                        <ul class="list-unstyled clear-margins">
                        
                            <li class="widget-container widget_nav_menu">
                    
                                <h1 class="title-widget white-text title-widget-white">Navigation</h1>                                
                                <ul>
                                  
                                    <li><a href="<?php echo base_url('profil/klien');?>" title="menu item"><div class="white-text">Client</div></a></li>
                                    <li><a href="<?php echo base_url('produk');?>" title="menu item"><div class="white-text">Product</div></a></li>
                                    <li><a href="<?php echo base_url('galeri');?>" title="menu item"><div class="white-text">Album Foto</div></a></li>
                                    <li><a href="<?php echo base_url('blog');?>" title="menu item"><div class="white-text">Blog</div></a></li>
                                    <li><a href="<?php echo base_url('download');?>" title="menu item"><div class="white-text">Download File</div></a></li>
                                    <li><a href="<?php echo base_url('kontak');?>" title="menu item"><div class="white-text">Contact</div></a></li>
                                </ul>
                    
                            </li>
                            
                        </ul>
                         
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-4">
                
                    <div class="col-padded col-naked">
                    
                        <ul class="list-unstyled clear-margins">
                        
                            <li class="widget-container widget_recent_news">
                    
                                <h1 class="title-widget white-text title-widget-white"><?php echo $site['nameweb'];?> Contact</h1>
                                
                                <div itemscope itemtype=""> 
                                
                                    <h2 class="title-median m-contact-subject white-text" itemprop="name"> <?php echo $site['nameweb'];?></h2>
                                
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
                    
                </div>
                
                <div class="col-lg-4 col-md-4">
                
                    <div class="col-padded col-naked">
                    
                        <ul class="list-unstyled clear-margins">
                        
                            <li class="widget-container widget_sofa_flickr">
                    
                                <h1 class="title-widget white-text title-widget-white">Album Foto</h1>
                                
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
                
                </div>
            
            </div>
        
        </div>
    
    </div>
    
    <div id="k-subfooter">
    
        <div class="container">
        
            <div class="row">
            
                <div class="col-lg-12">
                    <center>
                    <p class="copy-text text-inverse white-text">
                   Copyright &copy; 2017 <?php echo $site['nameweb'];?>
                    </p>
                    </center>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

    
    <script src="<?php echo base_url();?>assets/front/jQuery/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/front/jQuery/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/front/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/dropdown-menu/dropdown-menu.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/fancybox/jquery.fancybox.pack.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/fancybox/jquery.fancybox-media.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/jquery.fitvids.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/audioplayer/audioplayer.min.js"></script>
    <script src="<?php echo base_url();?>assets/front/js/jquery.easy-pie-chart.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
    <script src="<?php echo base_url();?>assets/front/js/theme.js"></script>
    <script type="text/javascript">
        function myFuckcomment() { 
            document.getElementById("delta").classList.remove('hidden');
            document.getElementById("delta_before").classList.add('hidden');
            var name = $('#nama').val();
            var email = $("#mail").val();
            var pesan = $("#comment").val();
            var pid = $("#blog_id").val();
            var web = $("#web").val();
            var dt = $("#date_c").val();
            var dataString = {'nama': name, 'email': email, 'message': pesan, 'blog_id': pid, 'website': web, 'date_comment': dt };
            console.log(dataString)
                $.ajax({
                type: "POST",
                url: "<?php echo base_url('blog/replyBlog');?>",
                data: dataString,
                dataType: 'json',
                success: function(data) {
                    console.log(data)                    
                    if(data.status == 200){
                        $('#sector_refresh').load(document.URL +  ' #sector_refresh');
                        document.getElementById("submit").classList.add('hidden');
                        document.getElementById("sukses").classList.remove('hidden');
                    }else{
                        document.getElementById("beta").classList.remove('hidden'); 
                        document.getElementById("delta").classList.add('hidden');
                    }
                }
            });
            
            return false;
        }
    </script>
 </body>
</html>