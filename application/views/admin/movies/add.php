<style type="text/css" media="screen">
   
   #info::-webkit-input-placeholder { /* Chrome/Opera/Safari */
        color: white;
    }
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
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
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

/* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
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
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
											<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
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
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-picture" aria-hidden="true"></i></span>
                                                        <input type="file" class="form-control" name="image" id="image">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class=" fa fa-film icon-wrap" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Movie Title" name="title" id="title" autocomplete="off">
                                                    </div>
                                                    <div class="input-group">
                                                         <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                                        <select name="category" class="form-control pro-edt-select form-control-primary">
                                                                    <option value="">Select Category</option>
                                                                    <option value="Bollywood">Bollywood</option>
                                                                    <option value="Hollywood">Hollywood</option>
                                                                    <option value="Tollywood">Tollywood</option>
                                                                  
                                                        </select>
                                                    </div>
                                                    <br>
                                                     <div class="input-group">
                                                         <span class="input-group-addon"><i class="fa fa-star-o" aria-hidden="true"></i></span>
                                                        <select name="genres" class="form-control pro-edt-select form-control-primary">
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
                                                  
                                                     <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Director Name" name="director" id="director" autocomplete="off">
                                                    </div>
                                                   
                                                  
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                                        <input type="number" class="form-control" placeholder="Duration In Minutes" name="duration" id="duration" autocomplete="off">
                                                    </div>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                         <input type="date" class="form-control" name="release_date" id="release_date">
                                                    </div>
                                                    <br>

            <div class="input-group mg-b-pro-edt">
                <span class="input-group-addon"><i class="fa fa-info" aria-hidden="true"></i></span>
                <textarea name="information" class="form-control" placeholder="Movie Information" id="info"></textarea>
            </div>

            <div class="input-group mg-b-pro-edt">
                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="director" placeholder="Movie Director">
            </div>

            <div class="input-group mg-b-pro-edt">
                <div class="form-group">
                    <label style="color:white; position: relative; top: 7px; font-size: 15px;">Status:</label>&nbsp;
                    <label class="switch"> 
                        <input type="checkbox" name="status">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
                                           


                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
														</button>
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light">Discard
														</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!--  <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
   

    