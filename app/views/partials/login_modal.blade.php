<!-- Login Modal -->
<div class="modal fade" id="loginModal"  role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

        <h4 class="modal-title" id="loginModalLabel">Login</h4>
      </div>


      <div class="modal-body">

        <div style="padding: 20px;" id="form-olvidado">
          <!-- <form accept-charset="UTF-8" role="form" id="login-form" method="post"> -->
          {{ Form::open(['accept-charset' => 'UTF-8', 'role' => 'form', 'id' => 'login-form', 'action' => 'UsersController@authenticate']) }}
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
                  <a class="pull-right text-muted" href="javascript:void(0)" id="olvidado"><small>Forgot your password?</small></a>
                </p>
              </div>
            </fieldset>
          <!-- </form> -->
          {{ Form::close() }}
        </div>

        <div style="display: none;" id="form-olvidado">
          <h4 class="">
            Forgot your password?
          </h4>

          <!-- <form accept-charset="UTF-8" role="form" id="login-recordar" method="post"> -->
          {{ Form::open(['accept-charset' => 'UTF-8', 'role' => 'form', 'id' => 'login-recordar', 'url' => 'password/remind' ]) }}
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
                <a class="text-muted" href="javasript:void(0)" id="acceso"><small>Account Access</small></a>
              </p>
            </fieldset>
          <!-- </form> -->
          {{ Form::close() }}


        </div>
      </div>


    </div><!-- /.modal-content -->



  </div>
</div>