  <body role="document">
  
    <!-- device test, don't remove. javascript needed! -->
    <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
    <!-- device test end -->
    
    <div id="k-head" class="container"><!-- container + head wrapper -->
    
        <div class="row"><!-- row -->
        
            <div class="col-lg-12">
        
                <div id="k-site-logo" class="pull-left"><!-- site logo -->
                
                    <h1 class="k-logo">
                        <a href="<?php echo base_url();?>" title="Home Page">
                            <img src="<?php echo base_url('assets/upload/image/thumbs/'.$site['logo']);?>" alt="Site Logo" class="img-responsive" />
                        </a>
                    </h1>
                    
                    <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"></span></a><!-- alternative menu button -->
            
                </div><!-- site logo end -->

                <nav id="k-menu" class="k-main-navig"><!-- main navig -->
        
                    <ul id="drop-down-left" class="k-dropdown-menu">
                        <li>
                            <a href="<?php echo base_url();?>" title="Beranda">Home</a>
                        </li>
                         <li>
                            <a href="<?php echo base_url('profil');?>" title="Tentang Kami">Profil</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url('profil/harga');?>">Daftar Harga</a></li>
                                <li><a href="<?php echo base_url('profil/klien');?>">Daftar Klien</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('produk');?>" title="Produk Kami">Produk</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('galeri');?>" title="Galeri Kami">Album Foto</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('blog');?>" title="Berita Kami">Blog</a>
                        </li>                                                                                               
                        <li>
                            <a href="<?php echo base_url('download');?>" title="Download File">Download</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('kontak');?>" title="Kontak Kami">Kontak</a>
                        </li>                        
                    </ul>
        
                </nav><!-- main navig end -->
            
            </div>
            
        </div><!-- row end -->
    
    </div><!-- container + head wrapper end -->