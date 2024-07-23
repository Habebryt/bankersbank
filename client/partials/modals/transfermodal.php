<div class="modal fade" id="modalTransfer" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCenterTitle">Bank Account Transfer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="transferForm">
          <!-- Sender's Details -->
          <h6 class="mb-3">Sender's Information</h6>
          <div class="row">
            <div class="col mb-3">
              <label for="senderName" class="form-label">Sender's Name</label>
              <input type="text" id="senderName" class="form-control" placeholder="Enter Sender's Name" required />
            </div>
            <div class="col mb-3">
              <label for="senderAccount" class="form-label">Sender's Account Number</label>
              <input type="text" id="senderAccount" class="form-control" placeholder="Enter Account Number" required />
            </div>
          </div>

          <!-- Receiver's Details -->
          <h6 class="mb-3">Receiver's Information</h6>
          <div class="row">
            <div class="col mb-3">
              <label for="receiverName" class="form-label">Receiver's Name</label>
              <input type="text" id="receiverName" class="form-control" placeholder="Enter Receiver's Name" required />
            </div>
            <div class="col mb-3">
              <label for="receiverAccount" class="form-label">Receiver's Account Number</label>
              <input type="text" id="receiverAccount" class="form-control" placeholder="Enter Account Number" required />
            </div>
          </div>
          <div class="row">
            <div class="col mb-3">
              <label for="bankName" class="form-label">Bank Name</label>
              <input type="text" id="bankName" class="form-control" placeholder="Enter Bank Name" required />
            </div>
            <div class="col mb-3">
              <label for="transferType" class="form-label">Transfer Type</label>
              <select id="transferType" class="form-select" required>
                <option value="">Select Transfer Type</option>
                <option value="interbank">Interbank Transfer</option>
                <option value="intrabank">Intrabank Transfer</option>
              </select>
            </div>
          </div>

          <!-- Transfer Details -->
          <h6 class="mb-3">Transfer Details</h6>
          <div class="row">
            <div class="col mb-3">
              <label for="transferAmount" class="form-label">Amount</label>
              <div class="input-group">
                <select class="form-select currency-select">
                  <option value="USD">$</option>
                  <option value="EUR">€</option>
                  <option value="GBP">£</option>
                </select>
                <input type="number" id="transferAmount" class="form-control" placeholder="Enter Amount" required min="0.01" step="0.01" />
              </div>
            </div>
            <div class="col mb-3">
              <label for="transferDate" class="form-label">Transfer Date</label>
              <input type="date" id="transferDate" class="form-control" required />
            </div>
          </div>
          <div class="mb-3">
            <label for="transferReason" class="form-label">Reason for Transfer</label>
            <textarea id="transferReason" class="form-control" placeholder="Enter Reason" rows="3"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Cancel
        </button>
        <button type="submit" class="btn btn-primary" form="transferForm" onclick="submitTransfer()">
          Confirm Transfer
        </button>
      </div>
    </div>
  </div>
</div>


<script>
  function submitTransfer() {
    // Here, we can handle the form submission, via AJAX.
    alert('Transfer submitted successfully!');
    $('#modalTransfer').modal('hide'); // Close the modal on success
  }
</script>