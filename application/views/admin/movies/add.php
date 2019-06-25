<style type="text/css" media="screen">
   
   #information::-webkit-input-placeholder { /* Chrome/Opera/Safari */
        color: white;
    }
    
    .btn-color{
        background-color: #b3d4fc;
    }
    a 
    {
        color: black;
    }
    label.error{
        color: red;
    }


</style>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-icon">
												<i class="icon nalika-home"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>Add Movie</h2>
											 <p>Welcome <?php  $session_user = _useSession('admin');echo $session_user['name']; ?></p>
											</div>
										</div>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                     <a href="<?php echo base_url('admin/movies'); ?>" class="btn-hover-color"><button type="button" class="btn bg-teal-400 btn-labeled btn-rounded btn-color"><b><i class="fa fa-arrow-left" aria-hidden="true" ></i></b> Back</button></a>
                    
                </div>

            </div>
            <br>
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                               
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <form method="post" name="add_movie" action="<?php echo base_url('admin/movies/add')?>" enctype="multipart/form-data" id="add_form">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="review-content-section">
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="icon nalika-picture" aria-hidden="true"></i></span>
                                                            <input type="file" class="form-control" name="image" id="image" data-toggle="tooltip" data-placement="bottom" title="Select Movie Image">
                                                        </div>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class=" fa fa-film icon-wrap" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Movie Title" name="title" id="title" autocomplete="off"  data-toggle="tooltip" data-placement="bottom" title=" Movie Title">
                                                        </div>
                                                        <div class="input-group">
                                                             <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                                            <select name="category" class="form-control pro-edt-select form-control-primary" data-toggle="tooltip" data-placement="bottom" title="Select Movie Category">
                                                                        <option value="">Select Category</option>
                                                                        <option value="Bollywood">Bollywood</option>
                                                                        <option value="Hollywood">Hollywood</option>
                                                                        <option value="Tollywood">Tollywood</option>
                                                                      
                                                            </select>
                                                        </div>
                                                        <br>
                                                         <div class="input-group">
                                                             <span class="input-group-addon"><i class="fa fa-star-o" aria-hidden="true"></i></span>
                                                            <select name="genres" class="form-control pro-edt-select form-control-primary" data-toggle="tooltip" data-placement="bottom" title="Select Movie Geners">
                                                                        <option value="">Select Genres</option>
                                                                        <option value="Action">Action</option>
                                                                        <option value="Drama">Drama</option>
                                                                        <option value="Biography">Biography</option>
                                                                        <option value="Comedy">Comedy</option>
                                                                        <option value="Horror">Horror</option>
                                                                        <option value="Romantic">Romantic</option>
                                                                      
                                                            </select>
                                                        </div>
                                                        <br>
                                                      
                                                        
                                                       
                                                      
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="review-content-section">
                                                         <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Director Name" name="director" id="director" autocomplete="off" data-toggle="tooltip" data-placement="bottom" title="Movie Director">
                                                        </div>

                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                                            <input type="number" class="form-control" placeholder="Duration In Minutes" name="duration" id="duration" autocomplete="off" data-toggle="tooltip" data-placement="bottom" title="Movie Duration In Minutes">
                                                        </div>

                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                             <input type="date" class="form-control" name="release_date" id="release_date" data-toggle="tooltip" data-placement="bottom" title="Movie Release Date">
                                                        </div>
                                                        <br>

                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-info" aria-hidden="true"></i></span>
                                                            <textarea name="information" class="form-control" placeholder="Movie Information" id="information" rows="2" data-toggle="tooltip" data-placement="bottom" title="Movie Information"></textarea>
                                                        </div>

                                                     
<!-- 
                                                        <div class="input-group mg-b-pro-edt">
                                                            <div class="form-group">
                                                                <label style="color:white; position: relative; top: 7px; font-size: 15px;">Status:</label>&nbsp;
                                                                <label class="switch"> 
                                                                    <input type="checkbox" name="status" id="status">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </div>
                                                        </div> -->
                                                                                       


                                            </div>
                                        </div>
                                  
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <input type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10" name="add" value="Add" data-toggle="tooltip" data-placement="bottom" title="Add Movie">
														
                                                    <input type="reset" class="btn btn-ctl-bt waves-effect waves-light" name="reset" value="Reset" data-toggle="tooltip" data-placement="bottom" title="Clear Movie Information.">
														
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script type="text/javascript">
    /* ------------------------------------------------------------------------------
*
*  # Custom JS
*
* ---------------------------------------------------------------------------- */

$(function () {

   
    $("#add_form").validate({
        rules: {
          
            image: 
                {
                    required: true
                },
            title: {
                    required: true
                    
                },
            category: {
                    required: true
                    
                },
             genres: {
                required: true
                
            },
             director: {
                required: true
                
            },
             duration: {
                required: true,
                number: true
                
            },
             release_date: {
                required: true,
                date:true
                
            },
            information: {
                required: true
                
            }
          
        },
        messages: {
          
           image: {
                    required:"Please select image"
           },
            title: {
                 required:"Please enter movie title."
            },
            category: {
                 required:"Please select category."
            },
             genres: {
                required: "Please select genres."
                
            },
             director: {
                required: "Please enter director name"
                
            },
            duration: {
                required: "Plesae enter duration of movie.",
                number: "Please enter duration in minutes."
                
            },
             release_date: {
                required: "Please select release_date.",
                date:"Please select valid date."
                
            },
            information: {
                required: "Please enetr Information."
                
            }
          
        }
    });

      
});
</script>

    