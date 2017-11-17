    <div id="k-body">
    
    	<div class="container">
        
        	<div class="row">
            
            	<div class="k-breadcrumbs col-lg-12 clearfix">
                
                	<ol class="breadcrumb">
                        <li><a href="<?php echo base_url('blog');?>">Blog</a></li>
                        <li class="active"><?php echo $blog['title'];?></li>
                    </ol>
                    
                </div>         
                
            </div>
            <?php
           
            if($this->session->flashdata('sukses')) { 
                echo '<div class="alert alert-success">';
                echo $this->session->flashdata('sukses');
                echo '</div>';
            } 
          
            echo validation_errors('<div class="alert alert-success">','</div>'); 
            ?>
            <div class="row no-gutter">
                
                <div class="col-lg-8 col-md-8">
                	
                    <div class="col-padded">
                    
                    	<div class="row gutter">
                        
                        	<div class="col-lg-12 col-md-12">
                    
                                <figure class="news-featured-image">	
                                    <img src="<?php echo base_url('assets/upload/image/'.$blog['image']);?>" alt="Featured image 4" class="img-responsive" />
                                </figure>
                                
                                <div class="news-title-meta">
                                    <h1 class="page-title"><?php echo $blog['title'];?></h1>
                                    <div class="news-meta">
                                        <span class="news-meta-date"><?php echo date('l, d/m/Y', strtotime($blog['date_post'])); ?></span>
                                        <span class="news-meta-category"><a href="<?php echo $blog['category_name'];?>" title="<?php echo $blog['category_name'];?>"><?php echo $blog['category_name'];?></a></span>
                                        <span class="news-meta-comments"><a href="#" title="3 comments"><?php echo $count;?> comments</a></span>
                                    </div>
                                </div>
                                
                                <div class="news-body">
                                    <p><?php echo $blog['content'];?></p>                                    
                                </div>                            
                            
                            </div>
                        
                        </div> 
                        
                        <div class="row row-splitter">
                        
                        </div> 
                        
                        <div class="row gutter">
                        
                        	<div class="col-lg-12 col-md-12">
                            
                                <div id="comments">
                                  <div id="sector_refresh">
                                	<h6 class="remove-margin-top">Comments ( <?php echo $count;?> )</h6>
                                    
                                    <ol class="commentlist">
                                            
                                       <?php foreach ($comments as $comment){?> 
                                        <li class="comment" id="li-comment-3">
                                                
                                            <div id="comment-3">
                                                
                                                <div class="comment-avatar">
                                                    <img width="50" height="50" class="avatar avatar-50 photo" src="<?php echo base_url();?>assets/front/img/avatar.png" alt="User Avatar" />
                                                </div>
                                                    
                                                <div class="comment-content-wrap">
                                                
                                                    <div class="comment-author">
                                                        <cite class="fn"><?php echo $comment['name'];?> - <i><?php echo $comment['email'];?></i><span class="label"> Post author</span></cite>
                                                    </div>
                                    
                                                    <div class="comment-meta commentmetadata">
                                                        <a href="#"><?php echo $comment['date_comment'];?></time></a>
                                                    </div>
                                                    
                                                    <div class="comment-body">
                                                        <p>
                                                  <?php $str = $comment['message'];
                                                        $str = parse_smileys($str, 'http://localhost/kurniawanx/assets/front/img/smileys/');
                                                        echo $str;
                                                        ?>
                                                        
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                                    
                                            </div>
                                    
                                        </li>
                                        <?php } ?>
                                        
                                    </ol>
                                </div>
                                    <div class="comment-respond" id="respond">
                                    
                                        <h6 class="comment-reply-title" id="reply-title">Post Comment</h6>
                                        
                                        <form class="comment-form" id="commentform" method="post" action="">
                                            <input type="hidden" id="blog_id" value="<?php echo $blog['blog_id'];?>">
                                            <input type="hidden" id="date_c" value="<?php echo date('Y-m-d H:i:s'); ?>">
                                            <div class="row">                                           
                                                
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                
                                                    <div class="row">
                                                    
                                                        <div class="form-group col-lg-12">
                                                            <label for="author">Name <span class="required">*</span></label>
                                                            <input type="text" aria-required="true" size="30" value="" name="name" id="nama" class="form-control" required />
                                                        </div>
                                                        
                                                        <div class="form-group col-lg-12">
                                                            <label for="email">Email <span class="required">*</span></label>
                                                            <input type="email" aria-required="true" size="30" value="" name="email" id="mail" class="form-control" required />
                                                        </div>
                                                        
                                                        <div class="form-group col-lg-12">
                                                            <label for="url">Website</label>
                                                            <input type="url" size="30" value="" id="url" class="form-control">
                                                        </div>
                                                        
                                                    </div><!-- row end -->
                                                    
                                                </div><!-- name, email, website end -->
                                                
                                                <div class="col-lg-8 col-md-8 col-sm-12"><!-- textarea -->
                                                    <div class="row">
                                                        <div class="form-group clearfix col-lg-12">
                                                            <label for="comment">Comment</label>
                                                            <textarea aria-required="true" rows="8" cols="45" name="message" id="comment" class="form-control" required></textarea>
                                                            <?php echo $smile; ?>
                                                            <div class="g-recaptcha" data-sitekey="6LfVlzQUAAAAAH2gVmIAiWdbEf0CzCNSGno-r6vn"></div>
                                                    
                                                        </div>
                                                        
                                                    </div><!-- row end -->
                                                    
                                                </div><!-- textarea -->
                                                
                                            </div><!-- row end -->
                                            
                                            <div class="row"><!-- row -->
                                                
                                                <div class="form-group clearfix col-lg-12 text-right remove-margin-bottom">

                                                    <button type="button" onclick="myFuckcomment()" id="submit" name="submit" class="btn btn-default">
                                                    <div id="delta_before" class="">Post comment</div>
                                                        <div id="delta" class="hidden"><i class="fa fa-refresh fa-spin fa-fw"></i> Sending...</div>
                                                    </button>
                                                    <div class="alert alert-success hidden" id="sukses"><center><i class="fa fa-check fa-2x"></i> Comment was published</center></div>
                                                </div>
                                                
                                            </div><!-- row end -->
                                            
                                        </form><!-- post comment form end -->
                                        
                                    </div><!-- post comment form wrap end -->
                                
                                </div><!-- comments wrap end -->
                            
                            </div>
                        
                        </div><!-- row end -->                   
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
                
                <div id="k-sidebar" class="col-lg-4 col-md-4"><!-- sidebar wrapper -->
                	
                    <div class="col-padded col-shaded"><!-- inner custom column -->
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widget -->
                    
                                <h1 class="title-widget">Kategori Blog</h1>
                                <?php foreach ($categories as $category){?>
                                <ul>
                                	<li><a href="<?php echo base_url('blog/kategori/'.$category['slug_category']);?>" title="menu item"><?php echo $category['category_name'];?></a></li>
                                </ul>
                                <?php } ?>                
							</li>
                            
                        	<li class="widget-container widget_up_events"><!-- widget -->
                    
                                <h1 class="title-widget">Blog Terkait</h1>
                                
                                <ul class="list-unstyled">
                                
                                <?php
                                $category_id = $blog['category_id'];
                                $blogTerkait = $this->mBlogs->blogTerkait($category_id);
                                $i=0;
                                foreach ($blogTerkait as $blogTerkait){
                                    if ($i == 1 && $blogTerkait['blog_id']++ < 10) { 
                                ?>
                                    <li class="up-event-wrap">
                                
                                        <h1 class="title-median"><a href="<?php echo base_url('blog/detail/'.$blogTerkait['slug_blog']);?>" title="<?php echo $blogTerkait['title'];?>"><?php echo $blogTerkait['title'];?></a></h1>
                                        
                                        <div class="up-event-meta clearfix">
                                        <span class="news-meta-date"><?php echo date('l, d/m/Y', strtotime($blogTerkait['date_post'])); ?></span>
                                        </div>
                                        
                                        <div class="news-body">
                                            <p>
                                                <?php
                                                    $out = strlen($blogTerkait['content']) > 150 ? substr($blogTerkait['content'],0,150).'... <a href="'. base_url('blog/detail/'.$blogTerkait['slug_blog']).'" class="moretag">detail Selengkapnya</a> ' : $blogTerkait['content'];
                                                    echo $out;
                                                ?>  
                                            </p>                                    
                                        </div>
                                    
                                    </li>                            
                                <?php }else{ $i++; }} ?>
                                
                                </ul>
                            
                            </li>                            
                            
                        </ul><!-- widgets end -->
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- sidebar wrapper end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->    
    <script src='https://www.google.com/recaptcha/api.js'></script>
       <?php echo smiley_js(); ?>