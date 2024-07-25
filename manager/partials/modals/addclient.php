<div class="modal fade" id="addClient" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCenterTitle">Add New Client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addClientForm" action="../process/addclient.php" method="POST">
          <!-- Client's Details -->
          <h6 class="mb-3">Client's Information</h6>
          <div class="row">
            <div class="col mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username" required />
            </div>
            <div class="col mb-3">
              <label for="useremail" class="form-label">Client's Email</label>
              <input type="email" id="useremail" name="useremail" class="form-control" placeholder="Enter Client Email" required />
            </div>
          </div>

          <!--Personal Details -->
          <h6 class="mb-3">Personal Information</h6>
          <div class="row">
            <div class="col mb-3">
              <label for="firstname" class="form-label">Firstname</label>
              <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Enter Firstname" required />
            </div>
            <div class="col mb-3">
              <label for="lastname" class="form-label">Lastname</label>
              <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Enter Lastname" required />
            </div>
          </div>

          <h6 class="mb-3">Password</h6>
          <div class="row">
            <div class="col mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" id="password" name="password" class="password" placeholder="Enter Password" required />
            </div>
          </div>
          <button type="submit" class="btn btn-primary" form="addClientForm" name="addClient" value="addClient" onclick="addClient()">
            Add Client
          </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Cancel
        </button>
      </div>
    </div>
  </div>
</div>


<script>
  function addClient() {
    // Here, we can handle the form submission, via AJAX.
    //alert('Client Added successfully!');
    $('#addClient').modal('hide'); // Close the modal on success
  }
</script>