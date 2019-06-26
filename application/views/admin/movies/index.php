<style type="text/css" media="screen">

    .switch {
        position: relative;
        display: inline-block;
        width: 48px;
        height: 25px;
    }
    .switch input { 
        opacity: 0;
        width: 0;
        height: 0;
    }
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 18px;
        width: 18px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #d3af37;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(22px);
        -ms-transform: translateX(22px);
        transform: translateX(22px);
    }
  
/* Rounded sliders */
    .slider.round {
        border-radius: 30px;
    }

    .slider.round:before {
        border-radius: 45%;
    }
    .acolor{
        color: white;
    }
    a:hover{
        color: white;
    }
    .tablecolor
    {
        background-color: black;
        color: #d4af37;
    }
    .link_render
    {
        color:black;
    }
    .link_render:hover{
        color: black;
    }


</style>
 
<div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Movie List</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>

                             <div class="btn bg-teal-400 btn-labeled" style="float: right;padding: 5px;background-color: #d3af37;border:1px solid #d4af37;">
                               <a href="<?php echo base_url('admin/movies/add') ?>" class="acolor"> <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add Movies</a>
                            </div>

                        </div>

                           
                            <br>
                        <div class="table-responsive" style="background-color: #E5E5E5;">
                            <table class="table" id="myTable">
                                <thead>
                                  <tr class="tablecolor">
                                    <th style="text-align: center;" width="10%">Image</th>
                                    <th width="20%" onclick="sortTable(1)">Movie<span style="color: lightgrey; float: right;"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i></span></th>
                                    <th width="20%" onclick="sortTable(2)">Category<span style="color: lightgrey; float: right;"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i></span></th>
                                    <th width="20%">Release Date</th>
                                    <th width="10%">Status</th>
                                    <th style="text-align: center;" width="10%">Action</th>
                              
                                </tr>
                                </thead>
                                <tbody>
                                  <?php
        foreach($movies as $movie)
        {


?>
                                <tr>
                                    <td style="text-align: center"><img src="<?php echo base_url().'/assets/images/movies/uploads/'.  $movie['image']; ?> " alt="<?php echo $movie['title'] ?>" height="75" width="75"></td>
                                    <td><?php echo ucfirst($movie['title']);?></td>
                                    <td>
                                       <?php echo ucfirst($movie['category']);?>
                                    </td>
                                     <td>
                                       <?php echo $movie['release_date'];?>
                                    </td>
                                    <td>
                                         <div class="input-group mg-s-pro-edt">
                                                            <div class="form-group">
                                                            
                                                                <label class="switch"> 
                                                                    <input type="checkbox" name="status" id="status">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                    </td>
                                    
                                   
                                    <td style="text-align: center;" >
                                        <a href="" class="link_render" data-popup="tooltip" data-placement="bottom" data-original-title="Edit"><i class="fa fa-pencil-square-o " aria-hidden="true" ></i></a>&nbsp;&nbsp;&nbsp;|
                                      <a href="" class="link_render" data-popup="tooltip" data-placement="bottom" data-original-title="View"><i class="fa fa-eye" aria-hidden="true" ></i></a>&nbsp;&nbsp;&nbsp;|
                                      <a href="" class="link_render" data-popup="tooltip" data-placement="bottom" data-original-title="Delete"><i class="fa fa-trash-o " aria-hidden="true" ></i></a>
                                    </td>
                                </tr>
                        
<?php
                }
?>               
                            

                                </tbody>
                            </table>
                            
                        <div class="panel-body"> 
                            <div class="custom-pagination" style="float: right;">
                                <ul class="pagination">
                                    <li class="page-item"><?php echo $links; ?></li>
                                  
                                </ul>
                            </div>
                            </div>
                    </div>

                       </div>



<script type="text/javascript">


    //For display notification.
    $(function()
    {
        <?php
                if($add_message = $this->session->flashdata('add_msg'))
                {
                    ?>
                        toastr.success("<?php echo $add_message; ?>");
                    <?php
                }
        ?>

    });

    //for sort table.
    function sortTable(n) {
      var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
      table = document.getElementById("myTable");
      switching = true;
      //Set the sorting direction to ascending:
      dir = "asc"; 
      /*Make a loop that will continue until
      no switching has been done:*/
      while (switching) {
        //start by saying: no switching is done:
        switching = false;
        rows = table.rows;
        /*Loop through all table rows (except the
        first, which contains table headers):*/
        for (i = 1; i < (rows.length - 1); i++) {
          //start by saying there should be no switching:
          shouldSwitch = false;
          /*Get the two elements you want to compare,
          one from current row and one from the next:*/
          x = rows[i].getElementsByTagName("TD")[n];
          y = rows[i + 1].getElementsByTagName("TD")[n];
          /*check if the two rows should switch place,
          based on the direction, asc or desc:*/
          if (dir == "asc") {
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
              //if so, mark as a switch and break the loop:
              shouldSwitch= true;
              break;
            }
          } else if (dir == "desc") {
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
              //if so, mark as a switch and break the loop:
              shouldSwitch = true;
              break;
            }
          }
        }
        if (shouldSwitch) {
          /*If a switch has been marked, make the switch
          and mark that a switch has been done:*/
          rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
          switching = true;
          //Each time a switch is done, increase this count by 1:
          switchcount ++;      
        } else {
          /*If no switching has been done AND the direction is "asc",
          set the direction to "desc" and run the while loop again.*/
          if (switchcount == 0 && dir == "asc") {
            dir = "desc";
            switching = true;
          }
        }
      }
}
</script>