<?php 
class Front extends CI_Model
{
    function customer_reg($data){
        $this->db->insert('customer',$data);
        redirect('customerLogin');
    }
    function get_category(){
       return $this->db->get('product_category')->result();
    }
    function get_categoryProduct($id){
        $this->db->select('product.*,product_category.name as categoryName');
        $this->db->from('product');
        $this->db->join('product_category', 'product_category.id = product.category_id');
        $this->db->where('category_id',$id);
       return $this->db->get()->result();
      
    }
    function getTredingProducts(){
        return  $this->db->where('tranding_product','tred-pro')->get('product')->result();
    }
    function getProductDetails($id){

        $this->db->select('product.*,product_category.name as categoryName');
        $this->db->from('product');
        $this->db->join('product_category', 'product_category.id = product.category_id');
        $this->db->where('product.id',$id);
       return $this->db->get()->row();
    }
    function getProducts(){
        return $this->db->get('product')->result();
     }
     function getCartProduct($id){
        return  $this->db->where('id',$id)->get('product')->row();
     }

     function get_loggedin($data){
        $validation = array('email' => $data['email'], 'password' => $data['password']);
        $data= $this->db->where($validation)->get('customer')->row();
        if($data){
            return $data;
        }else{
           return false;
        }
     }
     function orderPlaced($data){
         // echo '<pre>';
         // print_r($data);exit;
         $this->db->insert('order_details',$data);
         
     }

     function get_invoice($customer_id,$oderId){

      $this->db->select('order_details.*,product.name as productName, product.price as productPrice');
        $this->db->from('order_details');
        $this->db->join('product', 'product.id = order_details.product_id');
        $this->db->where('customer_id',$customer_id);
        $this->db->where('order_id',$oderId);
       return $this->db->get()->result();
         
       

     }

     function get_order_details($id){
      return   $this->db->query("SELECT order_details.*,product_category.name as categoryName,product.name as productName, product.price as productPrice FROM `order_details` JOIN product_category on product_category.id = order_details.category_id JOIN product on product.id = order_details.product_id  WHERE order_details.customer_id=$id GROUP BY order_id")->result();
      
     }
     function get_orderDetails($id){
      $this->db->select('order_details.*,product_category.name as categoryName,product.name as productName, product.price as productPrice');
      $this->db->from('order_details');
      $this->db->join('product_category', 'product_category.id = order_details.category_id');
      $this->db->join('product', 'product.id = order_details.product_id');
      $this->db->where( 'order_details.order_id',$id);
      
      return $this->db->get()->result();
     }
     
}



?>