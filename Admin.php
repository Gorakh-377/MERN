<div class="modal fade" id="adminLogModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminLogModalCenter" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLogModalCenter"> AdminLogin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="" method="POST">
  <div class="form-group">
   
 <i class="fas fa-envelope"></i> <label for="adminlogmail" class="pl-2 font-weight-bold">Email address</label>
   <small id="logadmin"></small><input type="email" class="form-control" id="adminlogemail" name="adminlogmail" placeholder=" Email">
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i>

    <label for="logpass"class="pl-2 font-weight-bold">Password</label>
    <small id="logadmin"></small><input type="password" class="form-control"name="adminlogpass" id="adminlogpass" placeholder="Password">
  </div>
  
  
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary"id="adminLogin" onclick="admin()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div> 
