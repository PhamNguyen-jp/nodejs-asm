<!-- Bootstrap --> 
<link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
        <form name="frm" method="post" action="">
        <h1>Product Category</h1>
        <p>
        <img src="images/add.png" alt="Add new" width="16" height="16" border="0" /> <a href="Add_category.php"> Add</a>
        </p>
        <table id="tablecategory" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><strong>No.</strong></th>
                    <th><strong>Category Name</strong></th>
                     <th><strong>Description</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
             </thead>
            
			<tbody>

            <?php
            include_once("Connection.php");
                $No=1;
                $result = mysqli_query($conn, "SELECT * FROM category");
                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
            ?>
			<tr>
              <td class="cotCheckBox"><?php echo $No; ?>/td>
              <td><?php echo $row["Cat_Name"]; ?></td>
              <td><?php echo $row["Cat_Des"]; ?></td>

              <td style='text-align:center'><a href="Update_Category.php?id=<?php echo $row["Cat_ID"]; ?>">
              <img src='images/edit.png' border='0'  /></a></td>
              <td style='text-align:center'>
              <a href="Category_Management.php?function=del&&id=<?php echo $row["Cat_ID"]; ?>" onclick="return deleteConfirm()">
              <img src='images/delete.png' border='0' /></td>
            </tr>
            <?php
                $No++;
                }
                if(isset($_GET["function"])=="del"){
                    if(isset($_GET["id"])){
                        $id = $_GET["id"];
                        mysqli_query($conn, "DELETE FROM category WHERE Cat_ID='$id'");
                    }
                }
                ?>
			</tbody>
        </table>  
        
        
        <!--Nút Thêm mới , xóa tất cả-->
        <div class="row" style="background-color:#FFF"><!--Nút chức nang-->
            <div class="col-md-12">
            	
            </div>
        </div><!--Nút chức nang-->
 </form>
 <script language="javascript">
    function deleteConfirm(){
        if(confirm("Are you sure to delete!")){
            return true;
        }
        else{
            return false;
        }
    }
</script>