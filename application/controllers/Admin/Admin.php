<?php 
class Admin extends CI_Controller 
{
    function index(){
        $userID = $this->session->userdata('userID');
        if(isset($userID)){
            $this->load->view('admin/dashboard');
        }else{
            $this->load->view('admin/index');
        }
        
        
    }
    function dashboard(){
        $userID = $this->session->userdata('userID');
        if(isset($userID)){
            $this->load->model('admin/Admin_Pannel');
          $data['list'] = $this->Admin_Pannel->sellReport();
          $this->load->view('admin/dashboard',$data);
        }else{
            redirect(base_url('index.php/admin/Admin')); 
        }
    }
    function adminLogin(){
        $data = $this->input->post();
        $this->load->model('admin/Admin_Pannel');
        $info = $this->Admin_Pannel->login($data);
       if(empty($info)){
           $this->session->set_flashdata('error','please enter a valid id');
        redirect(base_url('index.php/admin/Admin'));

       }else{
           $this->session->set_userdata(array('userID'=>$info->id,'name'=>$info->name));
        redirect(base_url('index.php/admin/Admin/dashboard')); 
       }
    }
    function logOut(){
        $userID = $this->session->userdata('userID');
        if(isset($userID)){
            $this->session->sess_destroy();
            redirect(base_url('index.php/admin/Admin'));
        }
    }
// photo upload function
    function photoUpload($fileName,$folderName){
        $config['upload_path']          = "./product/$folderName/";
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100000000;
		$config['max_width']            = 102400;
		$config['max_height']           = 7680000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload("$fileName"))
		{
				$error = array('error' => $this->upload->display_errors());

				
		}
		else
		{
				$data = array('upload_data' => $this->upload->data());
           
		  return	$file = $data['upload_data']['file_name'];
            
		
		}
    }
    // end of photo upload function

    // products category
    

    function product_category(){

        $this->load->model('admin/Admin_Pannel');
        return $get_data['category_data'] = $this->Admin_Pannel->get_category();

       $this->load->view('admin/product_category', $get_data);
       

       
        
    }
    function category(){
        $this->load->model('admin/Admin_Pannel');
       $get_data['category_data'] = $this->Admin_Pannel->get_category();

       $this->load->view('admin/category', $get_data);
    }
    function add_product_category(){
        $category = $this->input->post();

       
 $photoName =	$this->photoUpload('photo','category');


        if($category!='' && $photoName!=''){
            $category_data = array(
                'name'=>$category['name'],
                'photo'=>$photoName
            );
            $this->load->model('admin/Admin_Pannel');
           $this->Admin_Pannel->add_category($category_data);
        }else{
            redirect('admin/Admin/product_category');
        }
        
        
          
       
    }

    function deleteCategory($id){
        $this->load->model('admin/Admin_Pannel');
        $this->Admin_Pannel->deleteCat($id);
    }
    function editCategory($id){
        $this->load->model('admin/Admin_Pannel');
        $this->Admin_Pannel->editCat($id);

        $update['category_list'] = $this->Admin_Pannel->editCat($id);
	  $this->load->view('admin/cat_edit',$update);

    }
    function update_product_category(){
        $update_cat = $this->input->post();

        $file =	$this->photoUpload('photo','category');

        $category_data = array(
            
            'name'=>$update_cat['name'],
            'photo'=>$file
        );
        $this->load->model('admin/Admin_Pannel');
       $this->Admin_Pannel->update_category($category_data,$update_cat['id']);
    }
   

    // products


    function addProduct(){
        
        $this->load->model('admin/Admin_Pannel');
        $get_data['data'] = $this->Admin_Pannel->get_category();

      
        $this->load->view('admin/product', $get_data);
    }

    function insertProduct(){
        $data = $this->input->post();
      $photoOne = $this->photoUpload('photoOne','product');
      $photoTwo =  $this->photoUpload('photoTwo','product');
      
      if($data!='' && $photoOne!='' && $photoTwo!=''){
          $productData = array(
            'category_id'=>$data['product_category'],
            'name'=>$data['name'],
            'photo_one'=>$photoOne,
            'photo_two'=>$photoTwo,
            'price'=>$data['price'],
            'details'=>$data['details'],
            'product_description'=>$data['product_description'],
            'tag'=>$data['tag'],
            'trend'=>$data['trend'],
            'tranding_product'=>$data['trendingClass']
            
          );
          $this->load->model('admin/Admin_Pannel');
           $this->Admin_Pannel->add_product($productData);
      }else{
        redirect('admin/Admin/addProduct');
      }
    }

    function productList(){
        $this->load->model('admin/Admin_Pannel');
        $data['products'] = $this->Admin_Pannel->getProduct();
        $this->load->view('admin/productList',$data);
        

    }

    function editProduct($id){
        $this->load->model('admin/Admin_Pannel');
        $data['productData']=  $this->Admin_Pannel->editPro($id);

        $data['categoryData']= $this->product_category();
       
        

        $this->load->view('admin/updateProduct',$data);
        
    }
    function deleteProduct($id){

        $this->load->model('admin/Admin_Pannel');
        $this->Admin_Pannel->deletePro($id);
       
    }

    function updateProduct(){
        $data = $this->input->post();
       $photo= $this->photoUpload('photoOne','product');
       $phototwo= $this->photoUpload('photoTwo','product');
        
          if(isset($photo) && isset($phototwo)){
            $product_data = array(
            
                'category_id'=>$data['product_category'],
                'name'=>$data['name'],
                'photo_one'=>$photo,
                'photo_two'=>$phototwo,
                'price'=>$data['price'],
                'details'=>$data['details'],
                'product_description'=>$data['product_description'],
                'tag'=>$data['tag'],
                'trend'=>$data['trend'],
                'tranding_product'=>$data['trendingClass']
                );
                $this->load->model('admin/Admin_Pannel');
               $this->Admin_Pannel->update_product($product_data,$data['id']);
               redirect('admin/Admin/productList');
         }else{
            $product_data = array(
            
                'category_id'=>$data['product_category'],
                'name'=>$data['name'],
                
                'price'=>$data['price'],
                'details'=>$data['details'],
                'product_description'=>$data['product_description']
                );
                $this->load->model('admin/Admin_Pannel');
               $this->Admin_Pannel->update_product($product_data,$data['id']);
               redirect('admin/Admin/productList');
        }
    }


    function product_purchase(){
        $this->load->model('admin/Admin_Pannel');
        $get_data['data'] = $this->Admin_Pannel->get_category();
        
       $this->load->view('admin/product_purchase',$get_data);
    }

    function addPurchase(){
       $data = $this->input->post();
       $total =$data['qty']*$data['price'];
       $pruchaseData = array(
           'category_id'=>$data['product_category'],
           'name'=>$data['name'],
           'price'=>$data['price'],
           'qty'=>$data['qty'],
           'date'=>$data['date'],
           'total'=>$total
       );
       $this->load->model('admin/Admin_Pannel');
       $this->Admin_Pannel->insertPurchase($pruchaseData);
    }
    function purchaseList(){
        $this->load->model('admin/Admin_Pannel');
      $data['purchase_list'] =$this->Admin_Pannel->getPurchase();
        $this->load->view('admin/purchaseList',$data);
    }
    function editPurchase($id){
        $this->load->model('admin/Admin_Pannel');
       $data['dataList'] = $this->Admin_Pannel->editPurchase($id);
       $data['categoryData'] = $this->Admin_Pannel->get_category();
       $this->load->view('admin/updatePurchase',$data);
    }
    function update_purchase(){
       $data = $this->input->post();
       $total =$data['qty']*$data['price'];
       $pruchaseData = array(
           'category_id'=>$data['product_category'],
           'name'=>$data['name'],
           'price'=>$data['price'],
           'qty'=>$data['qty'],
           'date'=>$data['date'],
           'total'=>$total
       );
       $this->load->model('admin/Admin_Pannel');
       $this->Admin_Pannel->update_purchase($pruchaseData, $data['id']);
       
    }
    function deletePurchase($id){
        $this->load->model('admin/Admin_Pannel');
        $this->Admin_Pannel->deltePurchase($id);

    }

    function customer(){
        $this->load->model('admin/Admin_Pannel');
       $data['customer']= $this->Admin_Pannel->getCustomer();
        $this->load->view('admin/customer',$data);
    }

    function deleteCustomer($id){
        $this->load->model('admin/Admin_Pannel');
        $this->Admin_Pannel->delteCustomer($id);
    }

    function orderList(){
        $this->load->model('admin/Admin_Pannel');
      $data['list'] =  $this->Admin_Pannel->get_order();
    //   echo '<pre>';
    //   print_r($data);exit;
        $this->load->view('admin/orderList',$data);
    }
    function orderStatus($orderID){
        
        $status= $this->input->post();
        
            $data = $status['status'];
            
       
        $this->load->model('admin/Admin_Pannel');
        $this->Admin_Pannel->updateOrderStatus($data,$orderID);

    }

    function orderDetails($orderID){
        $this->load->model('admin/Admin_Pannel');
       $data['list'] =  $this->Admin_Pannel->get_details_orders($orderID);
       $this->load->view('admin/orderDetails',$data);
    }

    
}



?>