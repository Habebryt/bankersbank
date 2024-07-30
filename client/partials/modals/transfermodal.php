<div class="modal fade" id="modalTransfer" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCenterTitle">Bank Account Transfer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="transferForm" action="../process/transfer.php" method="post">

          <!-- Receiver's Details -->
          <h6 class="mb-3">Receiver's Information</h6>
          <div class="row">
            <div class="col mb-3">
              <label for="receiverName" class="form-label">Receiver's Name</label>
              <input type="text" id="receiverName" name="receiverName" class="form-control" placeholder="Enter Receiver's Name" required />
            </div>
            <div class="col mb-3">
              <label for="receiverAccount" class="form-label">Receiver's Account Number</label>
              <input type="text" id="receiverAccount" name="receiverAccount" class="form-control" placeholder="Enter Account Number" required />
            </div>
          </div>
          <div class="row">
            <div class="col mb-3">
              <label for="bankName" class="form-label">Bank Name</label>
              <input type="text" id="bankName" name="bankName" class="form-control" placeholder="Enter Bank Name" required />
            </div>
          </div>

          <!-- Transfer Details -->
          <h6 class="mb-3">Transfer Details</h6>
          <div class="row">
            <div class="col mb-3">
              <label for="transferAmount" class="form-label">Amount</label>
              <div class="input-group">
                <input type="number" name="transferAmount" id="transferAmount" class="form-control" placeholder="Enter Amount" required min="0.01" step="0.01" />
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="transferReason" class="form-label">Reason for Transfer</label>
            <textarea id="transferReason" name="transferReason" class="form-control" placeholder="Enter Reason" rows="3"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Cancel
        </button>
        <button type="submit" class="btn btn-primary" form="transferForm">
          Confirm Transfer
        </button>
        <!-- <button type="submit" class="btn btn-primary" form="transferForm" onclick="submitTransfer()">
          Confirm Transfer
        </button> -->
      </div>
    </div>
  </div>
</div>


<!-- <script>
  function submitTransfer() {
    // Here, we can handle the form submission, via AJAX.
    alert('Transfer submitted successfully!');
    $('#modalTransfer').modal('hide'); // Close the modal on success
  }
</script> -->
