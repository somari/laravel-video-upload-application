<head>

  {{ HTML::style('css/bootstrap.min.css') }}

</head>
<body>



  <div class="container-fluid">

    @include('partials.navbar')

    <div class="row-fluid">

      @include('partials.sidebar')

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
      
      @yield('all_users')


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

              @yield('modals') 

              {{ HTML::script('js/jquery-1.11.1.js') }}

              {{ HTML::script('js/bootstrap.min.js') }}

              {{ HTML::script('js/site_script.js') }}

              {{ HTML::script('js/jquery.validate.min.js') }}

              {{ HTML::script('js/main.js') }}
              
            </body>


