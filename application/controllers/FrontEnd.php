<?php 
class FrontEnd extends CI_Controller
{
    function index(){
        $this->load->model('front/Front');
       $category_data['category']= $this->Front->get_category();
       $category_data['trendingProduct']= $this->Front->getTredingProducts();
       $category_data['homeProduct']= $this->Front->getProducts();
        $this->load->view('frontEnd/index',$category_data);
    }
    function shop(){
        $this->load->model('front/Front');
        $product['homeProduct']= $this->Front->getProducts();
        $product['productCategory']= $this->Front->get_category();
        $this->load->view('frontEnd/shop',$product);
    }
    function customerRegistration(){
        $this->load->view('frontEnd/customerRegistration');
    }
    function customerLogin(){

        $this->load->view('frontEnd/customerLogin');
    }
    function wishList(){
        $this->load->view('frontEnd/wishList');
    }
    function cart(){
        $this->load->view('frontEnd/cart');
    }
    function checkout(){
        $this->load->library('cart');
        $cartData['data'] = $this->cart->contents();
        $cartData['total'] = $this->input->post();
        // echo '<pre>';
        // print_r($cartData['total']['total']);exit;
        $this->load->view('frontEnd/checkout',$cartData);
    
       
       
    }
    function customerReg(){
        $data = $this->input->post();
        if($data['name']!='' && $data['email']!='' && $data['phone']!='' && $data['password']!=''){
            $customer = array(
                'name'=>$data['name'].' '.$data['l_name'],
                'email'=>$data['email'],
                'phone'=>$data['phone'],
                'password'=>$data['password']
            );
            $this->load->model('front/Front');
            $this->Front->customer_reg($customer);
        }else{
            redirect('customerRegistration');
        }
    }
    function categoryProduct($id){
        $this->load->model('front/Front');
       $data['list']= $this->Front->get_categoryProduct($id);
       $data['productCategory']= $this->Front->get_category();
       
       $this->load->view('frontEnd/productWithCategory',$data);
    }

    function productDetails($id){
        $this->load->model('front/Front');
       $data['list']= $this->Front->getProductDetails($id);
       $this->load->view('frontEnd/productDetails',$data);
    }

    // add to cart

    function addToCart($id){
        $this->load->library('cart');
        $this->load->model('front/Front');
       $data= $this->Front->getCartProduct($id);
       $cart = array(
			
        'name'=>$data->name,
        'id'=>$data->id,
        'category_id'=>$data->category_id,
        'price'=>$data->price,
        'photo'=>$data->photo_one,
        'qty'=>1
        
        
         );
        //  echo "<pre>";
        //  print_r($cart);exit;
        $this->cart->insert($cart);
       
       redirect('FrontEnd/cartDetails');
       
    }
    function cartDetails(){
        $this->load->library('cart');
        $cartData['cartP'] = $this->cart->contents();
        // echo "<pre>";
        // print_r($cartData);exit;
       $this->load->view('frontEnd/cartDetails',$cartData);
    }

    function RemoveCart($id){
        $this->load->library('cart');
		$this->cart->remove($id);
		redirect('frontEnd/cartDetails');
    }
    function UpdateCart(){
        $this->load->library('cart');
		$data = $this->input->post();
        
		
		foreach($data['rowid'] as $key=>$value){
			$up[]= array(
				'rowid'=>$value,
			    'qty'=>$data['qty'][$key],
                'total'=>$data['shipment']+$data['subtotal']
			);
		}
        // echo '<pre>';
        // print_r($up[0]['total']);exit;
		 $this->cart->update($up);
        
		redirect('frontEnd/cartDetails');
    }

    function header(){
        $this->load->library('cart');
        $cartData['data'] = $this->cart->contents();
        $this->load->view('frontEnd/src/header',$cartData);
    }
    

    function loginValidation(){
         echo '<pre>';
        //  print_r($_POST);
        $shipingDetails['shipping'] = $this->input->post();
         $this->load->library('cart');
        $cartData['cart'] = $this->cart->contents();
        $userdata['user'] = $this->session->userdata('status');
        if(!empty($cartData['cart'])){

        if(isset($userdata['user'] )){

            // print_r($userdata['user']);
            //print_r($shipingDetails['shipping']);
            // print_r($cartData['cart']);
            // exit;
           
            
            $orderID = 'vegisT_'.rand();

            foreach( $cartData['cart'] as $cart ){
                echo '<pre>';
               
                
                $array=array(
                    'customer_id'=>$userdata['user']->id,
                    'product_id'=>$cart['id'],
                    'category_id'=>$cart['category_id'],
                    'order_id'=>$orderID,
                    'product_qty'=>$cart['qty'],
                    'name'=>$shipingDetails['shipping']['f_name'].' '.$shipingDetails['shipping']['l_name'],
                    'phone'=>$shipingDetails['shipping']['phone'],
                    'address'=>$shipingDetails['shipping']['address'],
                    'shipping_details'=>$shipingDetails['shipping']['comments'],
                    'payment_method'=>$shipingDetails['shipping']['paymentMethod'],
                    'total_amount'=>$shipingDetails['shipping']['total'],
                    'status'=>'panding',
                    'date'=>date('Y-m-d')
                );
                print_r($array);
                $this->load->model('front/Front');
            
                $this->Front->orderPlaced($array);
                
            }
            

            
            redirect("FrontEnd/invoice/$orderID");
            
           
            // redirect('FrontEnd/orderPlaced');
           
        }else{
            redirect('customerLogin');
        }
    }else{
        redirect('shop');
    }
       
    }

    function orderPlaced(){
        $userdata = $this->session->userdata();
        // echo '<pre>';
        // print_r($userdata);
        $this->load->model('front/Front');
        $this->Front->ordered($userdata);
    }

    function loggedin(){
        $data = $this->input->post();
        $this->load->model('front/Front');
        $user['status'] = $this->Front->get_loggedin($data);
        
        if($user['status']->email!=''){
        
         $this->session->set_userdata($user);
         redirect('FrontEnd/cartDetails');
        //  echo '<pre>';
        //  print_r($test);
        
        }else{
            redirect('customerLogin');
        }
    }

    function invoice($order_id){
        $this->load->library('cart');
        $this->cart->destroy();
        $userdata['user'] = $this->session->userdata('status');
        

        $this->load->model('front/Front');
        $data['list'] =  $this->Front->get_invoice($userdata['user']->id,$order_id);
    //   echo "<pre>";
    //   print_r($data['list']);exit;
      $this->load->view('frontEnd/invoice',$data);
      
    }
    function clear(){
        $this->load->library('cart');
        $this->cart->destroy();
        redirect('shop');
    }
   

    function customerAccount(){
        $userdata['user'] = $this->session->userdata('status');
        $customer_id =  $userdata['user']->id;
       
        if(isset($customer_id)){
        $this->load->model('front/Front');
         $data['list']= $this->Front->get_order_details($customer_id);
        $this->load->view('frontEnd/customerAccount',$data);
        }else{
            redirect('frontEnd/customerLogin');
        }
    }

    function get_orderDetails($orderID){
        $this->load->model('front/Front');
        $data['list']= $this->Front->get_orderDetails($orderID);
        $this->load->view('frontEnd/orderDetailsIn',$data);
        
    }

    function customerLogout(){
        unset($_SESSION['status']);
        $this->load->library('cart');
        $this->cart->destroy();
         redirect('shop');
    }

    
}


?>