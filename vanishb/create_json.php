<?php 
include_once'config.php';

function get_data()
{
$con=mysqli_connect('localhost','root','','vanishb');	
$query="select * from registration";
$result=mysqli_query($con,$query);
$emp=array();
while($row=mysqli_fetch_array($result))
			{
             $emp[]=array(

                'id'=> $row["id"],
                'name'=> $row["name"],
                'email' =>  $row["email"],
                'pass'=> $row["pass"],
                'address'=> $row["address"],
                  'dob'=>$row["dob"]);}
			     return json_encode($emp);
                  }
                   echo '<pre>';
                   print_r(get_data());
                   echo '<pre>';



    // $file_name=date('d-m-y'). '.json';
    // if (file_put_contents($file_name, get_data()))
    //               {
    //          echo $file_name.'file created';    	
    //              }  
    //      else{
    //      	echo 'there is some error';
    //           }                      
                

             ?>