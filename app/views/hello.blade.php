<head>

<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/theme.css">

<script src="js/jquery-1.11.1.js"></script>

<script src="js/bootstrap.min.js"></script>

  <script>


// SITE MANAGER
  $(document).ready(function()
{
    var navItems = $('.admin-menu li > a');
    var navListItems = $('.admin-menu li');
    var allWells = $('.admin-content');
    var allWellsExceptFirst = $('.admin-content:not(:first)');
    
    allWellsExceptFirst.hide();
    navItems.click(function(e)
    {
        e.preventDefault();
        navListItems.removeClass('active');
        $(this).closest('li').addClass('active');
        
        allWells.hide();
        var target = $(this).attr('data-target-id');
        $('#' + target).show();
    });
});


// LOGIN - RESET PASSWORD
$(document).ready(function() {
  $('#olvidado').click(function(e) {
    e.preventDefault();
    $('div#form-olvidado').toggle('500');
  });
  $('#acceso').click(function(e) {
    e.preventDefault();
    $('div#form-olvidado').toggle('500');
  });
})


//REGISTRATION FORM
$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});


  </script>
</head>
<body>



<div class="container-fluid">

<div class="row-fluid" style="margin-bottom:60px;">
<nav class="navbar navbar-default navbar-fixed-top"   role="navigation">
  <div class="container-fluid">
    

<div style="padding: 7px 0px 0px;" class="pull-right">
<!-- Button trigger modal -->
<button class="btn btn-primary btn" data-toggle="modal" data-target="#registerModal">
  Signup
</button>

<!-- Button trigger modal -->
<button class="btn btn-primary btn" data-toggle="modal" data-target="#loginModal">
  Login
</button>

<button class="btn btn-primary btn">
  Logout
</button>

</div>

  </div><!-- END .container-fluid --> 
</nav>


</div>





    <div class="row-fluid">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked admin-menu">
                <li class="active"><a href="#" data-target-id="home">Home</a></li>
                <li><a href="#" data-target-id="allUsers">All users</a></li>
                <li><a href="#" data-target-id="allVideos">All videos</a></li>
                <li><a href="#" data-target-id="uploadVideo">Upload video</a></li>
                <li><a href="#" data-target-id="myProfile">My profile</a></li>

                <li><a href="#" data-target-id="userProfile">User profile</a></li>


                <li><a href="#" data-target-id="submitedVideos">Submited videos</a></li>
                
                

            </ul>
        </div>
        <div class="col-md-9 well admin-content" id="home">
            <p>
                this template represents the restful api to be created and has been build to test the functionalities and the requests below: <br/><br/>
                clicking in item from the sidebar shoud send an ajax request to the api, retrive data from  database resaulting in the changing of the main content , without a new page load ofcoarse
            </p>
            <p>Functionality to be test:</p>
            <ul>
                <li>log in/ log out / register / reset password </li>
                <li>request a list of all existing users (no searching or querying) </li>
                <li>request a list of all videos (no searching or querying) showing the user who uploaded it and status of the video(approved or not) </li>
                <li>upload videos via api ( vimeo , aws , youtube)</li>
                <li>allow admin approval of videos </li>
                <li>add a text watermark to the video , display video using the player of the chosen api and download video with watermark</li>
                <li>request a user profile, consisting of the users info and a list of all approved videos</li>
            </ul>
            
            <b>Requests:</b>
            <p>
                -Login button --> validate login using ajax , once user is logged in , remove 'signup' and 'login' buttons and display the 'logout' button in navbar<br/><br/>

                -Logout button --> logout the user restfully and display the signup and login buttons<br/><br/>
                
                -Signup button --> create a new user by submiting form values via ajax <br/><br/>
                
                -Forget password --> send pasword change request to the provided email using and confirm that an email was sent using ajax</br/><br/><br/>

                
                -All Users --> request all existing users (no search or querying)<br/><br/>
                
                -All Videos --> request all existing videos showing uploader and status of video (no search or querying)<br/><br/>
                
                -Upload Video --> upload videos using the vimeo , youtube and AWS api. <br/><br/>
                
                -My Profile --> request information of the 'currently logged' in user and the list of all videos uploaded (both aproved and not approved) by that user <br/><br/>
            
                -Submited Videos --> request all existing videos showing uploader and status of video and allow admin to change status of video (aproved / not aproved) <br/><br/>
            </p>




        </div>
        <div class="col-md-9 well admin-content" id="allUsers">
            Display all registered users 
  
              <table class="table table-bordered table-hover">
  
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>email</th>
                  <th>type</th>
                </tr>
              </thead>


              <tbody>
                
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>mike@mdo.com</td>
                  <td>admin</td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>owen</td>
                  <td>shadingberg</td>
                  <td>owen@mdko.com</td>
                  <td>user</td>
                </tr>

              

              </tbody>


              </table>


        </div> <!-- END .col-md-9 #allUsers -->  


        <div class="col-md-9 well admin-content" id="allVideos">
            Display all videos uploaded by users showing the uploader and status
        </div>
        <div class="col-md-9 well admin-content" id="uploadVideo">
            form for video upload, video uplod is done via the vimeo , youtube and AWS api
                    </div>
        
        <div class="col-md-9 well admin-content" id="myProfile">

        <p> Show profile of current logged in user</p>

        <div class="well">
        <p> -Display info of logged in user (name , email etc.) </p></div>

        <div class="well">
        <p> -Display list of all uploaded (both approved and not approved) videos showing status</p></div>

         </div>

          <div class="col-md-9 well admin-content" id="userProfile">

        <p> Show profile of a (any random) user</p>

        <div class="well">
        <p> -Display users info (name , email etc.) </p></div>
        
        <div class="well">
        <p> -Display list of all approved uploades</p></div>

         </div>



       <div class="col-md-9 well admin-content" id="submitedVideos">
            this page is only availabble if the user is an administrator
            <p>  list all uploaded videos, allow the admin to change the status of the video via ajax request </p>

        


        <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="http://placehold.it/80" class="img-responsive" alt="" /></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <a href="#">how to bake your cake and eat it</a>
                                    <div class="mic-info">
                                        By: <a href="#">Bhaumik Patel</a> on 2 Aug 2013
                                    </div>
                                </div>

                                <div class="action pull-right">

                                    <div class="control-group">
                                      <div class="controls">
                                        <select id="selectbasic" name="selectbasic" class="input">
                                          
                                          <option>approved</option>
                                          <option>processing</option>
                                          <option>not approved</option>
                                        </select>
                                      </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="http://placehold.it/80" class="img-responsive" alt="" />
                            </div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <a href="#">How to astonish the world</a>
                                    <div class="mic-info">
                                        By: <a href="#">Bismuth boley</a> on 11 Nov 2013
                                    </div>
                                </div>

                                <div class="action pull-right">
                                <div class="control-group">
                                      <div class="controls">
                                        <select id="selectbasic" name="selectbasic" class="input">
                                          <option>processing</option>
                                          <option>approved</option>
                                          <option>not approved</option>
                                        </select>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="http://placehold.it/80" class="img-responsive" alt="" /></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <a href="#">Into course to a very importnt topic</a>
                                    <div class="mic-info">
                                        By: <a href="#">Bhaumik Patel</a> on 11 Nov 2013
                                    </div>
                                </div>

                                <div class="action pull-right">
            

                                    <div class="control-group">
                                      <div class="controls">
                                        <select id="selectbasic" name="selectbasic" class="input">
                                          <option>processing</option>
                                          <option>approved</option>
                                          <option>not approved</option>
                                        </select>
                                      </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

        </div>


    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="loginModal"  role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        
        <h4 class="modal-title" id="loginModalLabel">Login</h4>
      </div>
      
      
      <div class="modal-body">
        
        


        <div style="padding: 20px;" id="form-olvidado">
  <form accept-charset="UTF-8" role="form" id="login-form" method="post">
      <fieldset>
        <div class="form-group input-group">
          <span class="input-group-addon">
            @
          </span>
          <input class="form-control" placeholder="Email" name="email" type="email" required="" autofocus="">
        </div>
        <div class="form-group input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-lock">
            </i>
          </span>
          <input class="form-control" placeholder="Password" name="password" type="password" value="" required="">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">
            Access
          </button>
          <p class="help-block">
            <a class="pull-right text-muted" href="#" id="olvidado"><small>Forgot your password?</small></a>
          </p>
        </div>
      </fieldset>
    </form>
  </div>
  <div style="display: none;" id="form-olvidado">
    <h4 class="">
      Forgot your password?
    </h4>
   
    <form accept-charset="UTF-8" role="form" id="login-recordar" method="post">
      <fieldset>
        <span class="help-block">
          Email address you use to log in to your account
          <br>
          We'll send you an email with instructions to choose a new password.
        </span>
        <div class="form-group input-group">
          <span class="input-group-addon">
            @
          </span>
          <input class="form-control" placeholder="Email" name="email" type="email" required="">
        </div>
        <button type="submit" class="btn btn-primary btn-block" id="btn-olvidado">
          Continue
        </button>
        <p class="help-block">
          <a class="text-muted" href="#" id="acceso"><small>Account Access</small></a>
        </p>
      </fieldset>
    </form>


      </div>
      </div>
      

    </div><!-- /.modal-content -->
      


  </div>
</div>












<!-- Modal -->
<div class="modal fade" id="registerModal"  role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="registerModalLabel">Signup</h4>
      </div>



      <div class="modal-body">
        
<div>
        <form role="form">

            <hr class="colorgraph">
            <div class="row-fluid">
                <div class="">
                    <div class="form-group">
                        <input type="text" placeholder="First Name" class="form-control input-lg" id="first_name" name="first_name">
                    </div>
                </div>
                <div class="">
                    <div class="form-group">
                        <input type="text" placeholder="Last Name" class="form-control input-lg" id="last_name" name="last_name">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="email" placeholder="Email Address" class="form-control input-lg" id="email" name="email">
            </div>
            <div class="row-fluid">
                <div class="">
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control input-lg" id="password" name="password">
                    </div>
                </div>
                <div class="">
                    <div class="form-group">
                        <input type="password" placeholder="Confirm Password" class="form-control input-lg" id="password_confirmation" name="password_confirmation">
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="col-xs-4 col-sm-3 col-md-3">
                    <span class="button-checkbox">
                        <button data-color="info" class="btn btn-info active" type="button"><i class="state-icon glyphicon glyphicon-check"></i>I Agree</button>
                        <input type="checkbox" value="1" class="hidden" id="t_and_c" name="t_and_c">
                    </span>
                </div>
                <div class="col-xs-8 col-sm-9 col-md-9">
                     By clicking <strong class="label label-primary">Register</strong>, you agree to the 
                     <a data-target="#t_and_c_m" data-toggle="modal" href="#">Terms and Conditions</a> set out by this site, including our Cookie Use.
                </div>
            </div>
            
            <hr class="colorgraph">
            <div class="row-fluid">
                <div class="col-xs-12 col-md-6"><input type="submit" class="btn btn-primary btn-block btn-lg" value="Register"></div>
                <div class="col-xs-12 col-md-6"><a class="btn btn-success btn-block btn-lg" href="#">Sign In</a></div>
            </div>
        </form>
    </div>




      </div><!-- END .modal-body --> 

      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>






<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="t_and_c_m" class="modal fade" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 id="myModalLabel" class="modal-title">Terms &amp; Conditions</h4>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-primary" type="button">I Agree</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>











</body>


