@extends('layouts.default')

@section('modals')


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
                  <a class="pull-right text-muted" href="javascript:void(0)" id="olvidado"><small>Forgot your password?</small></a>
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
                <a class="text-muted" href="javasript:void(0)" id="acceso"><small>Account Access</small></a>
              </p>
            </fieldset>
          </form>


        </div>
      </div>


    </div><!-- /.modal-content -->



  </div>
</div>


<!-- Register Modal -->
<div class="modal fade" id="registerModal"  role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true" data-modal>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="registerModalLabel">Signup</h4>
      </div>

      <div class="modal-body">

        <div>
          <!-- <form role="form"> -->

          {{ Form::open(['data-remote', 'route' => 'user_register']) }}

            <hr class="colorgraph">
            <div class="row-fluid">
              <div class="">
                <div class="form-group">
                  <input type="text" placeholder="First Name" data-rule-required="true" data-msg-required="Please provide First Name" class="form-control input-lg" id="first_name" name="first_name">
                </div>
              </div>
              <div class="">
                <div class="form-group">
                  <input type="text" placeholder="Last Name" data-rule-required="true" data-msg-required="Please provide Last Name" class="form-control input-lg" id="last_name" name="last_name">
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="email" placeholder="Email Address" data-rule-required="true" data-rule-email="true" data-msg-required="Please provide Email" class="form-control input-lg" id="email" name="email">
            </div>
            <div class="row-fluid">
              <div class="">
                <div class="form-group">
                  <input type="password" placeholder="Password" data-rule-required="true" data-msg-required="Please provide Password" 
                  data-rule-minlength="6" class="form-control input-lg" id="password" name="password"/>
                </div> 
              </div>
              <div class="">
                <div class="form-group">
                  <input type="password" placeholder="Confirm Password" data-rule-required="true" data-msg-required="Please confirm password" 
                  data-rule-equalto="#password" class="form-control input-lg" data-msg-equalto="Passwords do not match" data-rule-minlength="6" 
                  id="password_confirmation" name="password_confirmation" />
                </div>
              </div>
            </div>
            <div class="row-fluid">
              <div class="col-xs-4 col-sm-3 col-md-3">
                <span class="button-checkbox">
                  <button data-color="info" class="btn btn-info active" type="button"><i class="state-icon glyphicon glyphicon-check"></i>I Agree</button>
                  <input type="checkbox" value="1" data-rule-required="true" data-msg-required="Please accept our terms and conditions" class="hidden" id="t_and_c" name="t_and_c">
                </span>
              </div>
              <div class="col-xs-8 col-sm-9 col-md-9">
               By clicking <strong class="label label-primary">Register</strong>, you agree to the 
               <a data-target="#t_and_c_m" data-toggle="modal" href="#">Terms and Conditions</a> set out by this site, including our Cookie Use.
             </div>
           </div>

           <hr class="colorgraph">
           <div class="row-fluid">
            <div class="col-xs-12 col-md-6"><input type="submit" data-confirm-passwords class="btn btn-primary btn-block btn-lg" value="Register"></div>
            <div class="col-xs-12 col-md-6"><a class="btn btn-success btn-block btn-lg" href="#">Sign In</a></div>
          </div>

        {{ Form::close() }}
      
      </div>

    </div><!-- END .modal-body --> 

    <div class="modal-footer">

    </div>
  </div>
</div>
</div>
@stop
