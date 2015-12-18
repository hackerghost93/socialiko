<!DOCTYPE html>
<html>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Socialiko</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Public/bootstrap/css/maxcdnbootstrap.css">
    <link rel="stylesheet" href="Public/bootstrap/css/code.ionicframework.css">
    <link rel="stylesheet" href="Public/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="Public/dist/css/skins/skin-blue.min.css">

    <style type="text/css">
    textarea { 
      resize: none; 
    }
    #post{
    	margin-left:2.5%;

    }
    #submit{
    	margin-left:56%;

    }
    #imgg{
		margin-left:1%;
		margin-top:1%;
    }
    .bord {
    border: 10px solid #C8C8C8 ;/*D8D8D8*/
    background-color: white;
    width: 71%;
	}
	.bord2 {
    border: 10px solid #C8C8C8 ;
    background-color: white;
    width: 71%;
    height: 35%;
	}

	.bord3 {
    border: 5px solid #989898  ;
    background-color: #D0D0D0;
    width: 100%;
    height: 9%;
	}
	.bord4 {
    border: 5px solid #989898  ;
    background-color: white;
    width: 100%;
    height: 7%;
	}

	#Like{
		margin-left:.5%;
		margin-bottom:1%;
	}
	#Comment{
		margin-left:2%;
		margin-bottom:1%;
	}
	#Share{
		margin-left:2%;
		margin-bottom:1%;
	}
	#italic{
      color:#3366FF;
      font-style: italic;
      font-weight: bold;
    }
    #search{
      width:30%;
      margin-left:2%;
      float:left;
      height:5%;
    }
    </style>
  </head>
  
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <a href="" class="logo">
          <span class="logo-mini"><b>F</b>B</span>
          <span class="logo-lg"><b>Facebook</b></span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
         <form action="#" method="get" class="sidebar-form" id = "search">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">


            	<li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">5</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 5 Friend Requests</li>

                  <li>
                    <ul class="menu">
                      <li>
                        

						<section class="sidebar" >
				          <div class="user-panel">
				            <div class="pull-left image">
				              <img src="hassan.jpg" class="img-circle" alt="User Image">
				            </div>
				            <div class="pull-left info" >
				              <p><a  href="#" style="color:black;"id="italic">Hassan Rezk</a></p>
				              <input name="submit" type="submit" value="Confirm" style= "background-color:#0099FF;border-radius: 2px;border: 2px solid #0099FF;">
				              <input name="submit" type="submit" value="Delete Request" style= "background-color:#0099FF;
				              border-radius: 2px;border:2px solid #0099FF; ">
				            </div>
				          </div>
    					</section>

    					<section class="sidebar" >
				          <div class="user-panel">
				            <div class="pull-left image">
				              <img src="nour.jpg" class="img-circle" alt="User Image">
				            </div>
				            <div class="pull-left info" >
				            <p><a  href="#" style="color:black;"id="italic">Nour Galaby</a></p>
				              <input name="submit" type="submit" value="Confirm" style= "background-color:#0099FF;border-radius: 2px;border: 2px solid #0099FF;">
				              <input name="submit" type="submit" value="Delete Request" style= "background-color:#0099FF;
				              border-radius: 2px;border:2px solid #0099FF; ">
				            </div>
				          </div>
    					</section>

    					<section class="sidebar" >
				          <div class="user-panel">
				            <div class="pull-left image">
				              <img src="issa.jpg" class="img-circle" alt="User Image">
				            </div>
				            <div class="pull-left info" >
				            <p><a  href="#" style="color:black;"id="italic">Mohamed AbuIssa</a></p>
				              <input name="submit" type="submit" value="Confirm" style= "background-color:#0099FF;border-radius: 2px;border: 2px solid #0099FF;">
				              <input name="submit" type="submit" value="Delete Request" style= "background-color:#0099FF;
				              border-radius: 2px;border:2px solid #0099FF; ">
				            </div>
				          </div>
    					</section>

    					<section class="sidebar" >
				          <div class="user-panel">
				            <div class="pull-left image">
				              <img src="anwar.jpg" class="img-circle" alt="User Image">
				            </div>
				            <div class="pull-left info" >
				            <p><a  href="#" style="color:black;"id="italic">Anwar Mohamed</a></p>
				              <input name="submit" type="submit" value="Confirm" style= "background-color:#0099FF;border-radius: 2px;border: 2px solid #0099FF;">
				              <input name="submit" type="submit" value="Delete Request" style= "background-color:#0099FF;
				              border-radius: 2px;border:2px solid #0099FF; ">
				            </div>
				          </div>
    					</section>

    					<section class="sidebar" >
				          <div class="user-panel">
				            <div class="pull-left image">
				              <img src="kareem.jpg" class="img-circle" alt="User Image">
				            </div>
				            <div class="pull-left info" >
				            <p><a  href="#" style="color:black;"id="italic">Kareem Badawy</a></p>
				              <input name="submit" type="submit" value="Confirm" style= "background-color:#0099FF;border-radius: 2px;border: 2px solid #0099FF;">
				              <input name="submit" type="submit" value="Delete Request" style= "background-color:#0099FF;
				              border-radius: 2px;border:2px solid #0099FF; ">
				            </div>
				          </div>
    					</section>
                        
    					
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>


                            <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-users text-aqua"></i>
                  <span class="label label-success">2</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">Peopple you may know</li>
                  <li>
                    <ul class="menu">
                    	<li>

                          <div class="pull-left">
                          </div>
                         	<section class="sidebar" >
					          <div class="user-panel">
					            <div class="pull-left image">
					              <img src="anwar.jpg" class="img-circle" alt="User Image">
					            </div>
					            <div class="pull-left info" >
					            <p><a  href="#" style="color:black;"id="italic">Anwar Mohamed</a></p>
					              <input name="submit" type="submit" value="Add Friend" style= "background-color:#0099FF;border-radius: 2px;border: 2px solid #0099FF;">
					              <input name="submit" type="submit" value="Remove" style= "background-color:#0099FF;
					              border-radius: 2px;border:2px solid #0099FF; ">
					            </div>
					          </div>
    					</section>

    			
                          <div class="pull-left">
                          </div>
                         	<section class="sidebar" >
					          <div class="user-panel">
					            <div class="pull-left image">
					              <img src="hassan.jpg" class="img-circle" alt="User Image">
					            </div>
					            <div class="pull-left info" >
					            <p><a  href="#" style="color:black;"id="italic">Hassan Rezk</a></p>
					              <input name="submit" type="submit" value="Add Friend" style= "background-color:#0099FF;border-radius: 2px;border: 2px solid #0099FF;">
					              <input name="submit" type="submit" value="Remove" style= "background-color:#0099FF;
					              border-radius: 2px;border:2px solid #0099FF; ">
					            </div>
					          </div>
    						</section>



                      </li>
                    </ul>
                  </li>
                </ul>
              </li>




              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">2</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 2 messages</li>
                  <li>
                    <ul class="menu">
                    	<li>



                        <a href="#">
                          <div class="pull-left">
                          </div>
                         	<section class="sidebar" >
					         <div class="user-panel">
					            <div class="pull-left image">
					              <img src="hassan.jpg" class="img-circle" alt="User Image">
					            </div>
					            <div class="pull-left info" >
					              <p style="color:black;"id="italic">Hassan</p>
					            </div>
					            <div class="pull-left info" >
					              <br><p style="color:black;">sent a message.</p>
					            </div>
					          </div>
    						</section>

                        </a>


                        <a href="#">
                          <div class="pull-left">
                          </div>
                         	<section class="sidebar" >
					         <div class="user-panel">
					            <div class="pull-left image">
					              <img src="kareem.jpg" class="img-circle" alt="User Image">
					            </div>
					            <div class="pull-left info" >
					              <p style="color:black;"id="italic">Kareem</p>
					            </div>
					            <div class="pull-left info" >
					              <br><p style="color:black;">sent a message.</p>
					            </div>
					          </div>
    						</section>

                        </a>


                      </li>
                    </ul>
                  </li>
                </ul>
              </li>



              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">3</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 3 notifications</li>

                  <li>
                    <ul class="menu">
                      <li>



                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 
                          <section class="sidebar" >
					         <div class="user-panel">
					            <div class="pull-left image">
					              <img src="hassan.jpg" class="img-circle" alt="User Image">
					            </div>
					            <div class="pull-left info" >
					              <p style="color:black;"id="italic">Hassan Rezk</p>
					            </div>
					            <div class="pull-left info" >
					              <br><p style="color:black;">commented on your post.</p>
					            </div>
					          </div>
    						</section>
    					</a>

    					 <a href="#">
                          <i class="fa fa-users text-aqua"></i> 
    						<section class="sidebar" >
					         <div class="user-panel">
					            <div class="pull-left image">
					              <img src="nour.jpg" class="img-circle" alt="User Image">
					            </div>
					            <div class="pull-left info" >
					              <p style="color:black;"id="italic">Nour Galaby</p>
					            </div>
					            <div class="pull-left info" >
					              <br><p style="color:black;">Liked your post.</p>
					            </div>
					          </div>
    						</section>
    					</a>


    					<a href="#">
                          <i class="fa fa-users text-aqua"></i> 
    						<section class="sidebar" >
					         <div class="user-panel">
					            <div class="pull-left image">
					              <img src="anwar.jpg" class="img-circle" alt="User Image">
					            </div>
					            <div class="pull-left info" >
					              <p style="color:black;"id="italic">Anwar Mohamed</p>
					            </div>
					            <div class="pull-left info" >
					              <br><p style="color:black;">Tagged you.</p>
					            </div>
					          </div>
    						</section>
    					</a>

                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="1.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Emad Mohamed</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="1.jpg" class="img-circle" alt="User Image">
                    <p>
                     Emad Mohamed - Web Developer
                      <small>Member since Oct. 2015</small>
                    </p>
                  </li>
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">     </a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">

          <div class="user-panel">
            <div class="pull-left image">
              <img src="1.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Emad Mohamed</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          

          <ul class="sidebar-menu">
            <li class="header">HEADER</li>

            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Friends</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li>
	                <section class="sidebar" >
			          <div class="user-panel">
			            <div class="pull-left image">
			              <img src="hassan.jpg" class="img-circle" alt="User Image">
			            </div>
			            <div class="pull-left info" >
			            <p><a  href="#" style="color:black;"id="italic">Hassan Rezk</a></p>
			            </div>
			          </div>
	    			</section>
                </li>
                
                <li>
	                <section class="sidebar" >
			          <div class="user-panel">
			            <div class="pull-left image">
			              <img src="anwar.jpg" class="img-circle" alt="User Image">
			            </div>
			            <div class="pull-left info" >
			            <p><a  href="#" style="color:black;"id="italic">Anwar Mohamed</a></p>
			            </div>
			          </div>
	    			</section>
                </li>

                <li>
	                <section class="sidebar" >
			          <div class="user-panel">
			            <div class="pull-left image">
			              <img src="akram.jpg" class="img-circle" alt="User Image">
			            </div>
			            <div class="pull-left info" >
			            <p><a  href="#" style="color:black;"id="italic">Akram Abdelnasser</a></p>
			            </div>
			          </div>
	    			</section>
                </li>

                <li>
	                <section class="sidebar" >
			          <div class="user-panel">
			            <div class="pull-left image">
			              <img src="nour.jpg" class="img-circle" alt="User Image">
			            </div>
			            <div class="pull-left info" >
			            <p><a  href="#" style="color:black;"id="italic">Nour Galaby</a></p>
			            </div>
			          </div>
	    			</section>
                </li>

                <li>
	                <section class="sidebar" >
			          <div class="user-panel">
			            <div class="pull-left image">
			              <img src="kareem.jpg" class="img-circle" alt="User Image">
			            </div>
			            <div class="pull-left info" >
			            <p><a  href="#" style="color:black;"id="italic">Kareem Badawy</a></p>
			            </div>
			          </div>
	    			</section>
                </li>

              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Groups</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Group 1</a></li>
                <li><a href="#">Group 2</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Pages</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Events</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Event 1</a></li>
                <li><a href="#">Event 2</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>About me</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li>
	                <a >21 years old , student at faculty </a>
	                <a> of engineering , lives in Alex </a>
	                <a>born on 4 Oct 1994</a>
                </li>
              </ul>
            </li>

          </ul>
        </section>
      </aside>

    <div class="content-wrapper">


			<div class = "bord" style="width:30%;float:right; "><!--background-color: lightblue;-->

			    <section class="sidebar" >
			          <div class="user-panel">
			            <div class="pull-left image">
			              <img src="hassan.jpg" class="img-circle" alt="User Image">
			            </div>
			            <div class="pull-left info" >
			            <p><a  href="#" style="color:black;"id="italic">Hassan Rezk</a></p>
			              <a style="color:black;"><i class="fa fa-circle text-success"></i> Online</a>
			            </div>
			          </div>
    				</section>

				    <section class="sidebar" >
				          <div class="user-panel">
				            <div class="pull-left image">
				              <img src="kareem.jpg" class="img-circle" alt="User Image">
				            </div>
				            <div class="pull-left info" >
				            <p><a href="#" style="color:black;"id="italic">Kareem Badawy</a></p>
				              <a  style="color:black;"><i class="fa fa-circle text-success"></i> Online</a>
				            </div>
				          </div>
				    </section>


					<section class="sidebar" >
			          <div class="user-panel">
			            <div class="pull-left image">
			              <img src="wael.jpg" class="img-circle" alt="User Image">
			            </div>
			            <div class="pull-left info" >
			            <p><a  href="#" style="color:black;"id="italic">Ahmed Wael</a></p>
			              <a  style="color:black;"><i class="fa fa-circle text-success"></i> Online</a>
			            </div>
			          </div>
			        </section>

				    <section class="sidebar" >
				          <div class="user-panel">
				            <div class="pull-left image">
				              <img src="atef.jpg" class="img-circle" alt="User Image">
				            </div>
				            <div class="pull-left info" >
				            <p><a  href="#" style="color:black;"id="italic">Ahmed Atef</a></p>
				              <a  style="color:black;"><i class="fa fa-circle text-success"></i> Online</a>
				            </div>
				          </div>
				    </section>

				    <section class="sidebar" >
				          <div class="user-panel">
				            <div class="pull-left image">
				              <img src="nour.jpg" class="img-circle" alt="User Image">
				            </div>
				            <div class="pull-left info" >
				            <p><a  href="#" style="color:black;"id="italic">Nour Galaby</a></p>
				              <a style="color:black;"><i class="fa fa-circle text-success"></i> Online</a>
				            </div>
				          </div>
				    </section>
 					<section class="sidebar" >
				          <div class="user-panel">
				            <div class="pull-left image">
				              <img src="issa.jpg" class="img-circle" alt="User Image">
				            </div>
				            <div class="pull-left info" >
				            <p><a  href="#" style="color:black;"id="italic">Mohamed AbuIssay</a></p>
				              <a  style="color:black;"><i class="fa fa-circle text-success"></i> Online</a>
				            </div>
				          </div>
				    </section>

				    <section class="sidebar" >
				          <div class="user-panel">
				            <div class="pull-left image">
				              <img src="akram.jpg" class="img-circle" alt="User Image">
				            </div>
				            <div class="pull-left info" >
				            <p><a  href="#" style="color:black;"id="italic">Akram Abdelnasser</a></p>
				              <a  style="color:black;"><i class="fa fa-circle text-success"></i> Online</a>
				            </div>
				          </div>
				    </section>


				    <section class="sidebar" >
				          <div class="user-panel">
				            <div class="pull-left image">
				              <img src="anwar.jpg" class="img-circle" alt="User Image">
				            </div>
				            <div class="pull-left info" >
				            <p><a  href="#" style="color:black;"id="italic">Anwar Mohamed</a></p>
				              <a  style="color:black;"><i class="fa fa-circle text-success"></i> Online</a>
				            </div>
				          </div>
				    </section>

				    <section class="sidebar" >
				          <div class="user-panel">
				            <div class="pull-left image">
				              <img src="mohab.jpg" class="img-circle" alt="User Image">
				            </div>
				            <div class="pull-left info" >
				            <p><a  href="#" style="color:black;"id="italic">Mohab Usama</a></p>
				              <a  style="color:black;"><i class="fa fa-circle text-success"></i> Online</a>
				            </div>
				          </div>
				    </section>
        	</div>




       <div class = "bord2" ><!--style="background-color: lightblue;"-->
       	<section class="content">
				
				
					<form class="form-horizontal" role="form" method="post" action=""style="float:left;">
					    
					    <div class="form-group">
					        <div class="col-sm-10">
					            <textarea id = "post"class="form-control" style="width: 430px; height: 90px;"placeholder="What's on your mind ?"></textarea>
					        </div>
					    </div>
					   
					    <div class="form-group">
					        <div class="col-sm-10 col-sm-offset-2">

						        <select id="submit" name="choose" class="btn btn-primary">
									<option value="Public">Public</option>
									<option value="Friends">Friends</option>
									<option value="Only">Only Me</option>
								</select>

					            <input name="submit" type="submit" value="Post" class="btn btn-primary">

					        </div>
					    </div>
					</form>

	        </section>
        </div>

       

       </div>
    </div>
