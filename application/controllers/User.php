<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
	function __construct() {
		parent::__construct();
		// $this->locad->library('cart');
		$this->load->helper(array('cookie', 'url')); 
		
	}
	
	// function __construct() { 
		// parent::__construct(); 
	//  } 
 
	 public function setcook() {
		// $config['global_xss_filtering'] = TRUE; 
		set_cookie('cookie_name','cookie_value','3600'); 
		echo "setcook";
		// $this->load->view('Cookie_view'); 
	 } 
 
	 public function getcook() { 
		echo get_cookie('cookie_name');
		          
		// $this->load->view('Cookie_view');
	 } 
 
	 public function delcook() { 
		delete_cookie('cookie_name');
		    echo "delcook"; 
		// redirect('cookie/display'); 
	 } 

  
public function bloag(){
	$this->load->view('custmer/header');
	$this->load->view('custmer/bloag');
	$this->load->view('custmer/footer');
}

public function bloag_detail(){
	$this->load->view('custmer/header');
	$this->load->view('custmer/bloag_detail');
	$this->load->view('custmer/footer');
}

public function check_out(){
	$this->load->view('custmer/header');
	$this->load->view('custmer/check_out');
	$this->load->view('custmer/footer');
}

public function contect(){
	$this->load->view('custmer/header');
	$this->load->view('custmer/contect');
	$this->load->view('custmer/footer');
}

public function shop_detail(){
	$this->load->view('custmer/header');
	$this->load->view('custmer/shop_detail');
	$this->load->view('custmer/footer');
}



	public function index()
	{
	$this->load->view('custmer/header');
	$result['catUser'] = $this->Usermodel->getAllCatgory("category","*");
	$result['proUser'] = $this->Usermodel->getAllProduct("product","*");
	$this->load->view('custmer/home',$result);
	$this->load->view('custmer/footer');
	}
	public function shoppage(){
		$this->load->view('custmer/header');
		$this->load->view('custmer/shop');
		$this->load->view('custmer/footer');
	

	}
   public function cart(){
	// $this->load->helper('cookie');
	$id = $_POST['user_id']; 
	
	// /array for product details...
	// $insert_data = array(
	//   'id' => $this->input->post('id'),
	//   'name' => $this->input->post('name'),
	// 		'price' => $this->input->post('price'),
	//   'image' => $this->input->post('image'),
	// 		'qty' => 1
	// );

	// $row = $datas['row'] = $this->Usermodel->getProductByID($id);  
	// foreach($datas as $row){
	// 		 $id = $row->id;
	// 		 $pro_id = $row->product_id;
	// 		 $pro_name = $row->product_name;
	// 		 $pro_img = $row->product_img;
	// 		 $pro_price = $row->product_price;
	// 		 $pro_qty = $row->product_qty;
	// 		 $pro_status = $row->statusp;
	// 		 $pro_cat = $row->product_category_id;
	// 		}
	//add previously defined data to cart....
	// $this->cart->insert($datas);
	// set_cookie('$datas',36000);
	
	//assigning whole cart to cookie
	// $this->input->set_cookie('cart_cookie', $this->cart->contents(),36000);
    // if(isset($id) && !empty($id)){
	// 	$d = 0;
	//     // if(!empty(get_cookie(item)) && !empty(get_cookie(item))){
	// 	// foreach(get_cookie(item) as $name => $value){ $d = $d + 1; }
	// 	// $d = $d + 1;
	//     // }else{$d = $d + 1;}
	// //   $q = 'select * from product where id = "'.$_POST['user_id'].'"';
	// 	// $data = array('id' => $id);
	// $id = 33; 
	// unset($id);

	$p=array();
	set_cookie('product',json_encode($p),time() - 3600);

	$fkey=0;
	$count=0;	
	$row = $datas['product'] = $this->Usermodel->getProductByID($id);
	
	if(!empty(json_decode(get_cookie("product"),true))){
		 echo "data not data";
	}else{
        echo "data is here";
	}
	$cookieData = json_decode(get_cookie("product"),true); 
   echo "<pre>";
   print_r($cookieData);
	foreach($cookieData as $key => $val){
		$count++;
		$internal=array();
		//print_r($val); die;
		if($key==$id){
			$q=$val['qty']+1;
			// $val['price'] = $val['price'] * $q;
			$internal=array("id"=>$val['id'],"name"=> $val['name'],"price"=> $val['price'],"qty"=>$q);
			$fkey=1;
		}else{
			$q=$val['qty'];
			$internal=array("id"=>$val['id'],"name"=> $val['name'],"price"=> $val['price'],"qty"=>$q);
		}
		$p[$key]=$internal;
	}
		if($fkey==0){
			$count++;
			$p[$id]= array("id"=>$row[0]->id, "name" => $row[0]->product_name, "price"  => $row[0]->product_price,"qty" => 1);	
		}
			// set_cookie('item',cook,'3600');
			// set_cookie('cookie_name','cookie_value','3600'); 
	       echo "this is arry <pre>";
			print_r($p);
          echo "<pre>";
		   print_r($datas);
		   set_cookie('product',json_encode($p),'3600');

	
   }


	public function cartadd(){
		$data['menu']='cartlist';
			// $this->load->view('header',$data);
			// $this->load->view('cartlist',$cookieData);
			// $this->load->view('footer');
			$this->load->view('custmer/header',$data);
			if(@(json_decode(get_cookie("product")))){  
				$cookieData['cook'] = json_decode(get_cookie("product"));
				$this->load->view('custmer/cartadd',$cookieData);
			 }else{
				$cookieData = 0;
				$this->load->view('custmer/cartadd',$cookieData);
			 }
		$this->load->view('custmer/footer');
	}
	public function cartromve(){
	
			$cookieData['cook'] = json_decode(get_cookie("product"));
			echo "<pre>";
			print_r($cookieData);
			 foreach($cookieData as $key => $val){
				//  $count++;
				 $internal=array();
				 if($key==$id){
					 $internal=array();
				 
				 }
				 $p[$key]=$internal;
				 set_cookie('product','',time() - 3600);


			 }
	
	}


	public function index2()
	{
		if(!empty($this->session->userdata('ID'))){
			redirect("User/dashboard");
		}
		$this->load->helper('url');
		$this->load->view('login');
		
	}
	function log_sub(){
		//print_r($this->input->post());
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$where= array("email"=>$email,
						"password"=>$password);
		$res = $this->Usermodel->SelectData("All_User_Detail","*",$where); 
		
		if(empty($res)){
			redirect("User/index");
		}else{
			$session = array(
			'ID'  => $res->id,
                   'Name'  => $res->fname,
                   'Email'     => $res->email,
                   'UserType' => $res->user_type,
                   'UserImg' => $res->images,
               );

		$this->session->set_userdata($session);
			
			redirect("User/dashboard");
		}
	}
	public function dashboard(){
		$this->auth_user();
		$this->load->helper('url');
		$this->load->view('header');
		if($this->session->userdata('UserType')==1){
		$this->load->view('dashboard');
	}else{
		$this->load->view('userweb');
	}
	$this->load->view('footer');
	
	}

	public function auth_user(){
		if(empty($this->session->userdata('ID'))){
			redirect("User/index");
		}
	}
	public function login(){
		if(!empty($this->session->userdata('ID'))){
			redirect("User/dashboard");
		};
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'UserName', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login_form');
		}
		else
		{
			//print_r($this->input->post());
			$data['fname']=$this->input->post('username');
			$data['password']=$this->input->post('password');
			$data['email']=$this->input->post('email');
			$data['user_type']=3;
			//$this->load->model('Usermodel');
			 $res =  $this->Usermodel->userQueryInsert('All_User_Detail',$data);
			$this->load->view('User_message',$data);
			//redirect(base_url());
		}
	}
	function categoryList(){
		$this->auth_user();
		$this->load->helper('url');
		$this->load->view('header');
		
		$result['row'] = $this->Usermodel->getAllCatgory("category","*");
		
		if($this->session->userdata('UserType')==1){
		$this->load->view('categoryAdd');
		$this->load->view('categorylist',$result);
		}
		if($this->session->userdata('UserType')==2){
			// $this->load->view('categoryAdd');
			$this->load->view('allProducts',$result);
			}
		$this->load->view('footer');
	}


	function Addcategory(){
		$this->auth_user();
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('categoryAdd');
		echo $catgory =$this->input->post('cats');
		 $product = 0;
		 $status = 1;
		$insert = array("categrory_name"=>$catgory,"product"=>$product,"status"=>$status);
		$result = $this->Usermodel->Addcategorys("category",$insert);
		$this->load->view('categorylist',$result);
		redirect('User/categoryList');
		
		
		$this->load->view('footer');
	}
	function deletecategory(){
		echo $id = $this->uri->segment(3);
		$where = array("categrory_id"=>$id);
		$res= $this->Usermodel->deleteData("category",$where);
		if($res){
			redirect("User/categoryList");
		}
	}


	function productList(){
		$this->auth_user();
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('productAdd');
		$result['row'] = $this->Usermodel->getAllProduct("product","*");
		// echo "<pre>";
		// print_r($result);
		// die;
		$this->load->view('productlist',$result);
		$this->load->view('footer');
	}

	function Addproduct(){
		$this->auth_user();
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('productAdd');
		$path = "C:/xampp/htdocs/collegeproject/site/CodeIgniter-3.1.13/assets/images";
		 $pids =$this->input->post('pid');
		 $pname =$this->input->post('pname');
		 $pcategory =$this->input->post('pcategory');
		 $pprice =$this->input->post('pprice');
		 $pqty =$this->input->post('pqty');
		//  $product = 0;
		 $status = 1;
		if (!empty($_FILES['image']['name'])) {
		    $config['upload_path'] =$path;			
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = $_FILES['image']['name'];
			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('image')) {
				$uploadData = $this->upload->data();
				$picture = $uploadData['file_name'];
				print_r($uploadData);
				echo "ok uplod";
			} else {
				$picture = '';
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				echo "not uplod";

			}
		} else {
			$picture = '';
		}
		$insert = array("product_id"=>$pids,"product_category_id"=>$pcategory,"product_name"=>$pname,"product_img"=>$picture,"product_price"=>$pprice,"product_qty"=>$pqty,"statusp"=>$status);

		$result = $this->Usermodel->Addproducts("product",$insert);

		$this->load->view('productlist',$result);

		redirect('User/productlist');
		$this->load->view('footer');
	}
 


         // IMG UPLOAD CODE EXTARA FILL CODE...................
				// function test(){
				// $this->load->view("uplod_img");
				// }
				// function uploadImage(){
				// $config['upload_path'] = "C:/xampp/htdocs/site/CodeIgniter-3.1.13/assets/images";
				// $config['allowed_types'] = 'gif|jpg|png';
				// $this->load->library('upload', $config);
				// $this->upload->initialize($config);
				// if (!$this->upload->do_upload('image')) 
				// {
				// 	$error = array('error' => $this->upload->display_errors());
				// }else{
				// 	$data = array('image_metadata' => $this->upload->data());
				// }
				// }

	function deleteproduct(){
		echo $id = $this->uri->segment(3);
		$where = array("id"=>$id);
		$res= $this->Usermodel->deleteData("product",$where);
		if($res){
			redirect("User/productlist");
		}
	}


	function showUser(){
		$this->auth_user();
		$this->load->helper('url');
		$this->load->view('header');
		$where = array('user_type != 1');
		$result['row'] = $this->Usermodel->getAllData("All_User_Detail","*",$where);
		if($this->session->userdata('UserType')==1){
			$this->load->view('userlist',$result);
		}
		else{
			redirect(base_url());
		}
		
		$this->load->view('footer');
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect("User/");
		
	}
	
	function deleteData(){
		echo $id = $this->uri->segment(3);
		$where = array("id"=>$id);
		$res= $this->Usermodel->deleteData("All_User_Detail",$where);
		if($res){
			redirect("User/showUser");
		}
	}
	
public function editCategory(){
    $array = [];
	
	$id = $_POST['user_id'];  
	// return $id;
	$where = array('categrory_id'=>$id);
	
	$da = array('product_category_id'=>$id);

	// $where = array('categrory_id'=>$id);
    $datas = $this->Usermodel->proupdate($da,'*');  
    $data['row'] = $this->Usermodel->fetch_data_singel_user("category","*",$where);  
	// $array = [];
	foreach($data as $row){
		$array['name'] = $row->categrory_name;
		$array['id'] = $row->categrory_id;
		$array['pro'] = $row->product;
		$array['bit'] = $row->status;
		
	}
	echo json_encode($array); 
}
 function editUpdate(){
	$id = $_POST['user_id'];  
	$data = $_POST['catigory'];
	$da = array('categrory_name' => $data);
	// $where = array('categrory_id'=>$id);
    $data = $this->Usermodel->catupdate($da,$id);  
    if($data){
		echo 1;
	}else{
		echo false;
	}
  }


  function editProduct(){
	 $id = $_POST['mid'];  
	// $data = $_POST['catigory'];
	 $price = $_POST['pprice'];  
	 $pqty = $_POST['pqty'];  
	// $id = $_POST['image'];  
	$pname = $_POST['pname'];
	$pid = $_POST['pid'];  
	// $id = $_POST['user_id'];
	$path = "C:/xampp/htdocs/collegeproject/site/CodeIgniter-3.1.13/assets/images";
// imges edit products ..........................................................
if (!empty($_FILES['image']['name'])) {
	$config['upload_path'] =$path;			
	$config['allowed_types'] = 'jpg|jpeg|png|gif';
	$config['file_name'] = $_FILES['image']['name'];
	//Load upload library and initialize configuration
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if($this->upload->do_upload('image')) {
		$uploadData = $this->upload->data();
		$picture = $uploadData['file_name'];
		print_r($uploadData);
	} else {
		$picture = '';
		$error = array('error' => $this->upload->display_errors());
		print_r($error);
	}
} else {
	$picture = '';
}

	 $da = array('product_price' => $price , 'product_qty' => $pqty,'product_id' => $pid, 'product_name'=>$pname,"product_img"=>$picture,);

	// $where = array('categrory_id'=>$id);
    $data = $this->Usermodel->proupdate($da,$id);  
    if($data){
		echo "product Update succesfulliy.....";
	}
	redirect('User/productList');
  }


public function fetch_singal_product(){
    $prod = [];
	$id = $_POST['user_id'];  
	   $data = array('id' => $id);
	   $datas['row'] = $this->Usermodel->fetch_data_singel_user("product","*",$data);  

	   foreach($datas as $row){
		$prod['mid'] = $row->id;
		$prod['pid'] = $row->product_id;
		$prod['pname'] = $row->product_name;
		$prod['pimg'] = $row->product_img;
		$prod['pprice'] = $row->product_price;
		$prod['pqty'] = $row->product_qty;
		$prod['pstatus'] = $row->statusp;
		$prod['pcat'] = $row->product_category_id;
	}
	echo json_encode($prod);
}

// category id se data fetch hogaa.............
public function fetch_catvice_product(){
	$id = $_POST['user_id'];  
	   $data = array('product_category_id' => $id);
	   $datas['row'] = $this->Usermodel->fetch_data_all_cat("product","*",$data);  
    //   echo  "<pre>";
	//   print_r($datas);
// 	   $prod= [];
// 	   foreach($datas as $row){
// 		$prod[] = $row->id;
// 		$prod[] = $row->product_id;
// 		$prod[] = $row->product_name;
// 		$prod[] = $row->product_img;
// 		$prod[] = $row->product_price;
// 		$prod[] = $row->product_qty;
// 		$prod[] = $row->statusp;
// 		$prod[] = $row->product_category_id;
// 	}
// 	echo "<pre>";
//   print_r($prod);

	echo json_encode($datas);
}




	function editData(){
		// $fname=$this->input->post('fname');
		echo $id = $this->uri->segment(3);
		$where = array("id"=>$id);		
		$this->load->helper('url');
		$this->load->view('header');
		$res['data']= $this->Usermodel->SelectData("All_User_Detail","*",$where);
		$this->load->view('userEdit',$res);
		$this->load->view('footer');
	}



	
	function edit_sub(){
			$fname=$this->input->post('fname');
			 $id=$this->input->post('id');
			 $email=$this->input->post('email');
			 $data = array("fname"=>$fname,
							"email" => $email);
			$where = array('id'=>$id);
			$res= $this->Usermodel->updateData('All_User_Detail',$data,$where);
			if($res){
				redirect("User/showUser");
			}
	}
	function deleteAjax(){
		 $id = $this->input->post('id');
		$where = array("id"=>$id);
		$res= $this->Usermodel->deleteData("All_User_Detail",$where);
		if($res){
			echo "true";
		}else{
			echo "false";
		}
	}
	function setcatinpro(){
		$showcat = [];
		$results = $this->Usermodel->getAllCatgory("category","*");
		 foreach($results as $row){
			$showcat[] = $row;	
			}
			echo json_encode($showcat);
	}

	function addselectbox(){
		$results = $this->Usermodel->getAllCatgory("category","*");
     return $results;
	}

	function showallProduct(){
		$this->auth_user();
		$this->load->helper('url');
		$this->load->view('header');
		// $result['row'] = $this->Usermodel->getAllProduct("product","*");
	$data['data']=$this->Usermodel->get_all_product();
        $this->load->view('showallProduct',$data);
		$this->load->view('footer');
	}

function selectproduct(){
	$this->auth_user();
	$this->load->helper('url');
	$this->load->view('header');
	// $base_id = base64_decode($proid);
// echo $proid;
// $product = $this->Usermodel->selectdatas("SELECT * FROM product WHERE id = '$base_id'");
// $id	= $product['id'];
// $pids	= $product['product_id'];
// $pname	= $product['product_name'];
// $pimg	= $product['product_img'];
// $price	= $product['product_price'];
// $pdty	= $product['product_qty'];
// $status = $product['status'];

// $data = array(
// 		 'id'	=> $id,
// 		'pids'	=> $pids,
// 		'pname'	=>$pname,
// 		'pimg'	=> $pimg,
// 		'price'	=> $price,
// 		'pdty'	=> $pdty,	
// 		'status'=>$status
// );

// $this->cart->insert($data);

// if($this->session->set_userdata('cart')){
// $myitem = array_column($this->session->set_userdata('cart',$data);

// }

// $this->session->set_userdata('cart',$data);

// Redirect to the cart page..............
	
		$this->load->view('selectproduct');		
		$this->load->view('footer');

}

function myproduct(){
	$this->auth_user();
	$this->load->helper('url');
	$this->load->view('header');
	$this->load->view('my_product');		
	$this->load->view('footer');

}

function MyHistory(){
	$this->auth_user();
	$this->load->helper('url');
	$this->load->view('header');
	$this->load->view('My_History');		
	$this->load->view('footer');

}
// this is add to cart functionality do the work .....................................................................


function index2s(){
}

function add_to_cart(){ 
	$data = array(
		'img' => $this->input->post('pro_img'), 
		'id' => $this->input->post('product_id'), 
		'name' => $this->input->post('product_name'), 
		'price' => $this->input->post('product_price'), 
		'qty' => $this->input->post('quantity'), 
	);
	$this->cart->insert($data); 
	echo $this->show_cart(); 
}

function show_cart(){ 
     $uri = "http://localhost/site/CodeIgniter-3.1.13/assets/images/";
	$output = '';
	$no = 0;
	foreach ($this->cart->contents() as $items) {
		$no++;
		$output .='
			<tr>
			    <td><img height="50px" src='.$uri.$items['img'].'></td>
				<td>'.$items['name'].'</td>
				<td>'.number_format($items['price']).'</td>
				<td>'.$items['qty'].'</td>
				<td>'.number_format($items['subtotal']).'</td>
				<td><button type="button" id="'.$items['rowid'].'" class="romove_cart btn btn-danger btn-sm">Cancel</button></td>
			</tr>
		';
	}
	$output .= '
		<tr>
			<th colspan="3">Total</th>
			<th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
		</tr>
	';
	return $output;
}

function load_cart(){ 
	echo $this->show_cart();
}

function delete_cart(){ 
	$data = array(
		'rowid' => $this->input->post('row_id'), 
		'qty' => 0, );
	$this->cart->update($data);
	echo $this->show_cart();
}
}

?>