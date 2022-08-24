<?php 

require_once('header.php')

?>

<html>
 <head>
      <title>Home</title>
 </head>

 <body>

    <table border="3", width="100%">
           <tr><td colspan="3" align="center"><b>
               <h1>Admin Page</h1>
           </b></td></tr>
            <tr>
                <td align="center"><img src="../Asset/download.jpg"  height ="400px" width="800px"></td>
               
                <td align="center"  width="1500px">
    
                    
                    <b><a href="userlist.php">User list</a></b> |
                    
                    <b><a href="../Controller/logout.php">LogOut</a></b>
                </td>
           
    
            </tr>
            <tr height ="300px">
               
              <td width="200px" colspan="3" >
                  <table align="left" width="1000px" >
                       <tr>
                         <ul>
                         <td ><h3><a href="adduser.php" ><li> Add  User</a></li> </h3></td>        
                         <td><h3><a href="delete.php"><li> Delete User</li></a></h3></td>       
                       </tr>
                       <tr>
                        <td><h3><a href="product.php"><li> Add products</li></a></h3></td> 
                        <td><h3><a href="mproduct.php"><li> Maintainace Price</li></a></h3></td>   
                      </tr>
                      <tr>
                        <td><h3><a href="upload.php"><li>Upload Your photo</li></a></h3></td>
                        <td><h3><a href="myprofile.php"><li>My Profile</li></a></h3></td>              
                      </tr>
                      <tr> 
                        <td><h3><a href="customer.php"><li>See Customer Details</li></a></h3></td>
                        <td><h3><a href="review.php"><li>Customer Review</li></a></h3></td>             
                      </tr>
                                     
                               
                      </ul>

                  </table>
              </td>
             
            </tr>
            
          

    </table>

 </body>




</html>