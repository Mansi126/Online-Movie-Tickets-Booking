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

</style>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
                                          <!--   <div class="breadcomb-icon">
                                                <i class="icon nalika-home"></i>
                                            </div> -->
                                            <div class="breadcomb-ctn">
                                               <!--  <h2>Movie List</h2>
                                                <p>Welcome <?php  $session_user = _useSession('admin');echo $session_user['name']; ?></p> -->
                                            </div>
                                        </div>
                                    </div>
                                 
                                </div>

                            </div> 
       

         </div>


  <div class="product-status mg-b-30">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">

                            <h4>Movie List</h4>
                            <div class="add-product">
                                <a href="<?php echo base_url('admin/movies/add') ?>" >Add Movies</a>
                            </div>

                            <table>

                                <tr>
                                    <th style="text-align: center;" width="10%">Image</th>
                                    <th width="20%">Movie</th>
                                    <th width="20%">Category</th>
                                    <th width="20%">Release Date</th>
                                    <th width="10%">Status</th>
                                    <th style="text-align: center;" width="10%">Action</th>
                                    
                                </tr>
<?php
        foreach($movies as $movie)
        {


?>
                                <tr>
                                    <td style="text-align: center"><img src="<?php echo base_url().'/assets/img/movies/uploads/'.  $movie['image']; ?> " alt="<?php echo $movie['title'] ?>"></td>
                                    <td><?php echo $movie['title'];?></td>
                                    <td>
                                       <?php echo $movie['category'];?>
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
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                
<?php
                }
?>               
                            </table>

                            <div class="custom-pagination">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">
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
</script>