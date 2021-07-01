----------------------
                <div class="from-group">
                            <label for="txtTen" class="col-sm-2 control-label">Category ID(*): </label>
                            <div calss="col-sm-10">
                                <input type="text" name="txtID" class="from-control" placeholder="Category ID" readonly
                                value='<?php echo $cat_id ; ?>'>
                            </div>
                </div>

                <div class="from-group">
                            <label for="txtTen" class="col-sm-2 control-label">Category Name(*): </label>
                            <div class="col-sm-10">
                                    <input type="text" name="txtName" id="txtName" class="from-control" placeholder="Category Name"
                                    value='<?php echo $cat_name;?>'>
                            </div>
                </div>

                <div class="from-group">
                            <label for="txtMoTa" class="col-sm-2 control-label">Description(*): </label>
                            <div class="col-sm-10">
                                    <input type="text" name="txtDes" id="txtDes" class="from-control" placeholder="Description"
                                    value='<?php echo $cat_des;?>'>
                            </div>
                </div>
                --------------------
                <?php
                if(isset($_POST["btnUpdate"]))
                {
                    $id = $_POST["txtID"];
                    $id = $_POST["txtName"];
                    $id = $_POST["txtDes"];
                    $err="";
                    if($name=="")
                    {
                        $err.="<li>Enter Category Name, please</li>";
                    }
                    if($err!="")
                    {
                        echo "<ul>$err</ul>";
                    }
                    else
                    {
                        $sq="Select * from category where Cat_ID != '$id' and Cat_Name='$name'";
                        $resuli = mysqli_query($result,$sq);
                        if(mysqli_num_rows($result)==0)
                        {
                            mysqli_query($conn, "UPDATE category SET Cat_Name = '$name', Cat_Des='$dex' WHERE Cat_ID='$id'");
                            echo '<meta http-equiv="refresh" content="0;URL=Category_Management.php"/>';
                        }
                        else
                        {
                            echo "<li>Duplicate category Name</li>";
                        }
                    }
                }
                ?>
                ---------------------
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
            -------------------------------
            <td style='text-align:center'>
            <a href="Category_Management.php?function=del&&id=<?php echo $row["Cat_ID"]; ?>" onclick="return deleteConfirm()">
            <img src='images/delete.php' bor='0'/></a></td>
            ----------------------------
            if(isset($_GET["function"])=="del"){
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                    mysqli_query($conn, "DELETE FROM category WHERE Cat_ID='$id'");
                }
            }
            -------------------------------