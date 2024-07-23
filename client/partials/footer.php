<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      ©
      <script>
        document.write(new Date().getFullYear());
      </script>
      <a href="#" target="_blank" class="footer-link fw-medium">Banker's Bank</a>
    </div>
  </div>
</footer>
<!-- / Footer -->
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>
</div>
<!-- / Layout wrapper -->

<div class="cont-sup">
  <a href="#" target="_blank" class="btn btn-danger btn-cont-sup">Support?</a>
</div>

<!-- Modals -->
<?php require_once "../partials/modals.php" ?>

<!-- Core JS -->
<!-- Transaction Dispute and Receipt -->

<script>
  function printReceipt() {
    // Copy transaction details to receipt
    document.getElementById('receiptTransactionId').textContent = document.getElementById('transactionId').textContent;
    document.getElementById('receiptTransactionDate').textContent = document.getElementById('transactionDate').textContent;
    document.getElementById('receiptTransactionAmount').textContent = document.getElementById('transactionAmount').textContent;
    document.getElementById('receiptTransactionCurrency').textContent = document.getElementById('transactionCurrency').textContent;
    document.getElementById('receiptTransactionType').textContent = document.getElementById('transactionType').textContent;
    document.getElementById('receiptTransactionStatus').textContent = document.getElementById('transactionStatus').textContent;
    document.getElementById('receiptSenderName').textContent = document.getElementById('senderName').textContent;
    document.getElementById('receiptSenderAccount').textContent = document.getElementById('senderAccount').textContent;
    document.getElementById('receiptReceiverName').textContent = document.getElementById('receiverName').textContent;
    document.getElementById('receiptReceiverAccount').textContent = document.getElementById('receiverAccount').textContent;

    // Show the receipt content
    var receiptContent = document.getElementById('transactionReceipt').innerHTML;

    // Create a new window and print
    var printWindow = window.open('', '', 'width=800,height=600');
    printWindow.document.write('<html><head><title>Transaction Receipt</title></head><body>');
    printWindow.document.write(receiptContent);
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.print();
  }

  function submitDispute() {
    const disputeReason = document.getElementById('disputeReason').value;
    const additionalInfo = document.getElementById('additionalInfo').value;

    if (disputeReason.trim() === '') {
      alert('Please provide a reason for the dispute.');
      return;
    }

    // Simulate submitting the dispute (replace with actual implementation)
    alert('Dispute submitted successfully!\n\nReason: ' + disputeReason + '\nAdditional Information: ' + additionalInfo);

    // Reset the form and close the modal
    document.getElementById('disputeForm').reset();
    const modal = bootstrap.Modal.getInstance(document.getElementById('disputeTransaction'));
    modal.hide();
  }
</script>

<!-- build:js assets/vendor/js/core.js -->

<script src="../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>
<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../assets/vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="../assets/js/main.js"></script>

<!-- Page JS -->
<script src="../assets/js/dashboards-analytics.js"></script>
</body>

</html>