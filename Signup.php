<div class="modal fade" id="StuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="StuRegModalCenter" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="StuRegModalCenter">Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-group">
    <i class="fas fa-users"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label>
  <small id="stumsg-1"></small><input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
 <i class="fas fa-envelope"></i> <label for="stumail" class="pl-2 font-weight-bold">Email address</label>
   <small id="stusmg-2"></small> <input type="email" class="form-control" id="stuemail" name="stumail" placeholder=" Email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i>
    <small id="stumsg-3"></small><label for="stupass"class="pl-2 font-weight-bold">New Password</label>
    <input type="password" class="form-control"name="stupass" id="stupass" placeholder="Password">
  </div>
  
  
</form>
      </div>
      <div class="modal-footer">
        <span id="sucessmsg"></span>
        <button type="button" class="btn btn-primary"onclick="addstu()">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 