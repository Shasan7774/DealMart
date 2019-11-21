function productFunction()
{
	let pname=document.getElementById('pname');
	let productcode=document.getElementById('productcode');
	let price=document.getElementById('price');
	let productquantity=document.getElementById('productquantity');
	let brand=document.getElementById('brand');
	let materials=document.getElementById('materials');
	let img=document.getElementById('image');
	let productcatagory=document.getElementById('productcatagory');
	let aboutproduct=document.getElementById('aboutproduct');
	let addproduct=document.getElementById('addproduct');
	
	
	let error1=document.getElementById('error1');
	let error2=document.getElementById('error2');
	let error3=document.getElementById('error3');
	let error4=document.getElementById('error4');
	let error5=document.getElementById('error5');
	let error6=document.getElementById('error6');
	let error7=document.getElementById('error7');
	let error8=document.getElementById('error8');
	let error9=document.getElementById('error9');
	
	addproduct.addEventListener("click",function()
	{
		if(pname.value=="")
		{
			clear();
			error1.innerHTML="Product Name is required";
			return false;
		}
		if(productcode.value=="")
		{
			clear();
			error2.innerHTML="Product Code is required";
			return false;
		}
		if(price.value=="")
		{
			clear();
			error3.innerHTML="Product price is required";
			return false;
		}
		if(productquantity.value=="")
		{
			clear();
			error4.innerHTML="Product Quantity is required";
			return false;
		}
		if(brand.value=="")
		{
			clear();
			error5.innerHTML="Product Brand is required";
			return false;
		}
		if(materials.value=="")
		{
			clear();
			error6.innerHTML="Product materials is required";
			return false;
		}
		if(aboutproduct.value=="")
		{
			clear();
			error9.innerHTML="About Product is required";
			return false;
		}
		if(img.value=="")
		{
			clear();
			error7.innerHTML="Product image is required";
			return false;
		}
		if(productcatagory.value=="")
		{
			clear();
			error8.innerHTML="Product catagory is required";
			return false;
		}
	});
	
	function clear()
	{
		error1.innerHTML="";
		error2.innerHTML="";
		error3.innerHTML="";
		error4.innerHTML="";
		error5.innerHTML="";
		error6.innerHTML="";
		error7.innerHTML="";
		error8.innerHTML="";
		error9.innerHTML="";
	}

}