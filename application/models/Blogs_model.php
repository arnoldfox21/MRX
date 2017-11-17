<?php
	
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Blogs_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        
        public function listBlogs() {
            $this->db->select('*');
            $this->db->from('blogs');
            $this->db->join('admins','admins.admin_id = blogs.user_id','LEFT');            
            $this->db->join('categories','categories.category_id = blogs.category_id','LEFT');
            $this->db->order_by('blog_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

       public function listBlogslimit($limit) {
            $this->db->select('*');
            $this->db->from('blogs');
            $this->db->where(array('status' => 'publish'));
            $this->db->join('admins','admins.admin_id = blogs.user_id','LEFT');            
            $this->db->join('categories','categories.category_id = blogs.category_id','LEFT');
            $this->db->order_by('blog_id','DESC');
            $this->db->limit($limit);
            $query = $this->db->get();
            return $query->result_array();
        }


        public function listBlogsPub() {
            $this->db->select('*');
            $this->db->from('blogs');
            $this->db->where(array('status' => 'publish'));
            $this->db->join('admins','admins.admin_id = blogs.user_id','LEFT');            
            $this->db->join('categories','categories.category_id = blogs.category_id','LEFT');
            $this->db->order_by('blog_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

       
        public function listLastBlogsPub() {
            $this->db->select('*');
            $this->db->from('blogs');
            $this->db->where(array('status' => 'publish'));
            $this->db->join('admins','admins.admin_id = blogs.user_id','LEFT');            
            $this->db->join('categories','categories.category_id = blogs.category_id','LEFT');
            $this->db->order_by('blog_id','DESC');
            $query = $this->db->get();
            return $query->result_array();
        }                

  
        public function createBlog($data) {
            $this->db->insert('blogs',$data);
        }

    
        public function detailBlog($blog_id) {
            $this->db->select('*');
            $this->db->from('blogs');
            $this->db->where('blog_id',$blog_id);
            $this->db->order_by('blog_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }

 
        public function readBlog($slugBlog) {
            $this->db->select('*');
            $this->db->from('blogs');
            $this->db->where(array('status' => 'publish'));            
            $this->db->join('categories','categories.category_id = blogs.category_id','LEFT');
            $this->db->where('slug_blog',$slugBlog);
            $query = $this->db->get();
            return $query->row_array();
        }         

        public function editBlog($data) {
            $this->db->where('blog_id',$data['blog_id']);
            $this->db->update('blogs',$data);
        }           


        public function deleteBlog($data) {
            $this->db->where('blog_id',$data['blog_id']);
            $this->db->delete('blogs',$data);
        }

     
        public function endBlog() {
            $this->db->select('*');
            $this->db->from('blogs');
            $this->db->order_by('blog_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }

        public function perPageBlogs($limit,$start) {
            $this->db->select('*');
            $this->db->from('blogs');
            $this->db->where(array('status' => 'publish'));            
            $this->db->join('categories','categories.category_id = blogs.category_id','LEFT');
            $this->db->order_by('blog_id','DESC');
            $this->db->limit($limit,$start);
            $query = $this->db->get();
            return $query->result_array();
        }

    
        public function totalBlogs() {
            $this->db->select('*');
            $this->db->from('blogs');
            $this->db->where(array('status' => 'publish'));            
            $this->db->join('categories','categories.category_id = blogs.category_id','LEFT');
            $this->db->order_by('blog_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }
                      

       
        public function replyBlog(){        
        $data = array( 
            'message'    => strip_tags(substr($this->input->post('message'),0,255)),
            'comment_id' => $this->input->post('pesan'),   
            'blog_id'    => $this->input->post('blog_id'),   
            'name'       => $this->input->post('nama'),  
            'email'      => $this->input->post('email'),
            'website'    => $this->input->post('website'),
            'date_comment' => $this->input->post('date_comment'),
            );
        
        $this->db->insert('comments', $data);    
        
        }

    
        public function listCommentsByBlog($slugBlog){
            $this->db->select('*');
            $this->db->join('blogs','blogs.blog_id = comments.blog_id','LEFT');
            $data = array();
            $this->db->where('blogs.slug_blog',$slugBlog);
            $this->db->order_by('comments.comment_id','ASC');
            $Q = $this->db->get('comments');
                if ($Q->num_rows() > 0){
                    foreach ($Q->result_array() as $row){
            $data[] = $row;
                    }
                }
            $Q->free_result();
            return $data;
        } 

   
        public function countCommentByBlog($blogId) {
            $this->db->select('*');
            $this->db->join('blogs','blogs.blog_id = comments.blog_id','LEFT');
            $query = $this->db->get_where('comments',array('comments.blog_id' => $blogId));
            return $query->num_rows();  
        } 

    
        public function getAllBlogsByCategory($slugBlog){
            $this->db->select(' blogs.blog_id,
                                blogs.slug_blog,
                                blogs.image,
                                blogs.title,
                                blogs.date_post,
                                blogs.content,
                                categories.category_id,
                                categories.category_name,
                                categories.slug_category,
                             ');
            $this->db->join('categories','categories.category_id = blogs.category_id','LEFT');
            $data = array();
            $this->db->where('categories.slug_category',$slugBlog);
            $this->db->order_by('blogs.blog_id','ASC');
            $Q = $this->db->get('blogs');
                if ($Q->num_rows() > 0){
                    foreach ($Q->result_array() as $row){
            $data[] = $row;
                    }
                }
            $Q->free_result();
            return $data;
        }     


        public function totalBlogsByCategory($slugBlog) {
            $this->db->select('*');
            $this->db->from('blogs');
            $this->db->where('blogs.category_id',$slugBlog);
            $this->db->order_by('blog_id','DESC');
            $query = $this->db->get();
            return $query->num_rows();
        } 

    
        public function cariBlog($perPage, $uri, $ringkasan) {
            $this->db->select('*');
            $this->db->from('blogs');
            $this->db->join('categories','categories.category_id = blogs.category_id','LEFT');                          
            if (!empty($ringkasan)) {
                $this->db->like('title', $ringkasan);
            }
            $this->db->order_by('blog_id','asc');
            $getData = $this->db->get('', $perPage, $uri);

            if ($getData->num_rows() > 0)
                return $getData->result_array();
            else
                return null;
        }

   
        public function blogTerkait($category_id){
            $this->db->select('*');
            $this->db->join('categories','categories.category_id = blogs.category_id','LEFT');
            $data = array();
            $this->db->where('blogs.category_id',$category_id);
            $this->db->order_by('blogs.blog_id','ASC');
            $Q = $this->db->get('blogs');
                if ($Q->num_rows() > 0){
                    foreach ($Q->result_array() as $row){
            $data[] = $row;
                    }
                }
            $Q->free_result();
            return $data;
        }                                                                                      

    }
