<?php 
class Admin_Pannel extends CI_Model
{
    function login($data){
        return $this->db->where($data)->get('admin')->row();
        //print_r($admin);
    }
    function add_category($category_data){
        // echo '<pre>';
        // print_r($category_data);exit;
        $this->db->insert('product_category',$category_data);
        redirect('admin/Admin/product_category');
    }
    function get_category(){
        return $this->db->get('product_category')->result();
    }
    function deleteCat($id){
        $this->db->where('id',$id)->delete('product_category');
        redirect('admin/Admin/product_category');
    }
    function editCat($id){
        $data =  $this->db->where('id',$id)->get('product_category');
        return $data->row();
    }
    function update_category($data,$id){
        $this->db->where('id',$id)->update('product_category', $data);
        redirect('admin/Admin/product_category');
    }
    function add_product($productData){
        $this->db->insert('product',$productData);
        redirect('admin/Admin/addProduct');
    }
    function getProduct(){
        $this->db->select('product.*,product_category.name as categoryName');
        $this->db->from('product');
        $this->db->join('product_category', 'product_category.id = product.category_id');
       return $this->db->get()->result();
        
    }

    function deletePro($id){
        $this->db->where('id',$id)->delete('product');
        redirect('admin/Admin/productList');
    }
    function editPro($id){
        $this->db->select('product.*,product_category.name as categoryName');
        $this->db->from('product');
        $this->db->join('product_category', 'product_category.id = product.category_id');
        $this->db->where('product.id',$id);
       return $this->db->get()->row();
        
    }

    function update_product($data,$id){
        $this->db->where('id',$id)->update('product', $data);
         redirect('admin/Admin/productList');
    }

    function insertPurchase($data){
        $this->db->insert('product_purchase',$data);
        redirect('admin/Admin/product_purchase');
    }

    function getPurchase(){
        $this->db->select('product_purchase.*,product_category.name as categoryName');
        $this->db->from('product_purchase');
        $this->db->join('product_category', 'product_category.id = product_purchase.category_id');
       return $this->db->get()->result();
    }
    function deltePurchase($id){
        $this->db->where('id',$id)->delete('product_purchase');
        redirect('admin/Admin/purchaseList');
    }

    function editPurchase($id){
        $this->db->select('product_purchase.*,product_category.name as categoryName');
        $this->db->from('product_purchase');
        $this->db->join('product_category', 'product_category.id = product_purchase.category_id');
        $this->db->where('product_purchase.id',$id);
        return $this->db->get()->row();
    }
    function update_purchase($data,$id){
        $this->db->where('id',$id)->update('product_purchase', $data);
         redirect('admin/Admin/purchaseList');
    }

    function getCustomer(){
      return  $this->db->get('customer')->result();
    }
    function delteCustomer($id){
        $this->db->where('id',$id)->delete('customer');
        redirect('admin/Admin/customer');
    }

    function get_order(){
     return   $this->db->query("SELECT order_details.*,product_category.name as categoryName,product.name as productName, product.price as productPrice FROM `order_details` JOIN product_category on product_category.id = order_details.category_id JOIN product on product.id = order_details.product_id GROUP BY order_id ORDER BY id DESC")->result();
        
    }

    function updateOrderStatus($data,$orderID){
        $this->db->query("UPDATE `order_details` SET `status` = '$data' WHERE `order_id` = '$orderID'");
        
         redirect('admin/Admin/orderList');
    }
    function get_details_orders($orderID){
        $this->db->select('order_details.*,product_category.name as categoryName,product.name as productName, product.price as productPrice');
        $this->db->from('order_details');
        $this->db->join('product_category', 'product_category.id = order_details.category_id');
        $this->db->join('product', 'product.id = order_details.product_id');
        $this->db->where( 'order_details.order_id',$orderID);
        
        return $this->db->get()->result();
    }


    function sellReport(){
      return  $this->db->query("SELECT * FROM `order_details` GROUP BY order_id ORDER BY date ASC")->result();
    }

   
}















?>