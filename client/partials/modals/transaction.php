 <!-- Transaction Modal -->
 <div class="col-lg-4 col-md-6">
   <div class="mt-3">
     <!-- Modal -->
     <div class="modal fade" id="viewTransaction" tabindex="-1" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="modalCenterTitle">Transaction Details</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
             <!-- Transaction Details -->
             <h6 class="mb-3">Transaction Information</h6>
             <div class="row">
               <div class="col mb-3">
                 <div class="transaction-detail">
                   <span class="transaction-label">Transaction ID:</span>
                   <span id="transactionId">TXN123456789</span>
                 </div>
                 <div class="transaction-detail">
                   <span class="transaction-label">Date:</span>
                   <span id="transactionDate">2024-07-25</span>
                 </div>
                 <div class="transaction-detail">
                   <span class="transaction-label">Amount:</span>
                   <span id="transactionAmount">$2,456.00</span>
                 </div>
                 <div class="transaction-detail">
                   <span class="transaction-label">Currency:</span>
                   <span id="transactionCurrency">USD</span>
                 </div>
                 <div class="transaction-detail">
                   <span class="transaction-label">Type:</span>
                   <span id="transactionType">Sent Money</span>
                 </div>
                 <div class="transaction-detail">
                   <span class="transaction-label">Status:</span>
                   <span id="transactionStatus">Completed</span>
                 </div>
               </div>
             </div>

             <!-- Sender's Details -->
             <h6 class="mb-3">Sender's Information</h6>
             <div class="row">
               <div class="col mb-3">
                 <div class="transaction-detail">
                   <span class="transaction-label">Name:</span>
                   <span id="senderName">John Doe</span>
                 </div>
                 <div class="transaction-detail">
                   <span class="transaction-label">Account Number:</span>
                   <span id="senderAccount">**** **** **** 1234</span>
                 </div>
               </div>
             </div>

             <!-- Receiver's Details -->
             <h6 class="mb-3">Receiver's Information</h6>
             <div class="row">
               <div class="col mb-3">
                 <div class="transaction-detail">
                   <span class="transaction-label">Name:</span>
                   <span id="receiverName">Jane Smith</span>
                 </div>
                 <div class="transaction-detail">
                   <span class="transaction-label">Account Number:</span>
                   <span id="receiverAccount">**** **** **** 5678</span>
                 </div>
               </div>
             </div>

             <!-- Transaction Receipt (Hidden) -->
             <div id="transactionReceipt">
               <h5 class="text-center">Transaction Receipt</h5>
               <hr>
               <div class="transaction-detail">
                 <span class="transaction-label">Transaction ID:</span>
                 <span id="receiptTransactionId">TXN123456789</span>
               </div>
               <div class="transaction-detail">
                 <span class="transaction-label">Date:</span>
                 <span id="receiptTransactionDate">2024-07-25</span>
               </div>
               <div class="transaction-detail">
                 <span class="transaction-label">Amount:</span>
                 <span id="receiptTransactionAmount">$2,456.00</span>
               </div>
               <div class="transaction-detail">
                 <span class="transaction-label">Currency:</span>
                 <span id="receiptTransactionCurrency">USD</span>
               </div>
               <div class="transaction-detail">
                 <span class="transaction-label">Type:</span>
                 <span id="receiptTransactionType">Sent Money</span>
               </div>
               <div class="transaction-detail">
                 <span class="transaction-label">Status:</span>
                 <span id="receiptTransactionStatus">Completed</span>
               </div>
               <h6 class="mt-4">Sender's Information</h6>
               <div class="transaction-detail">
                 <span class="transaction-label">Name:</span>
                 <span id="receiptSenderName">John Doe</span>
               </div>
               <div class="transaction-detail">
                 <span class="transaction-label">Account Number:</span>
                 <span id="receiptSenderAccount">**** **** **** 1234</span>
               </div>
               <h6 class="mt-4">Receiver's Information</h6>
               <div class="transaction-detail">
                 <span class="transaction-label">Name:</span>
                 <span id="receiptReceiverName">Jane Smith</span>
               </div>
               <div class="transaction-detail">
                 <span class="transaction-label">Account Number:</span>
                 <span id="receiptReceiverAccount">**** **** **** 5678</span>
               </div>
               <hr>
               <div class="text-center">
                 <p>Thank you for banking with us!</p>
               </div>
             </div>

           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
               Close
             </button>
             <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#disputeTransaction">
               Dispute
             </button>
             <button type="button" class="btn btn-success" onclick="printReceipt()">
               Print Receipt
             </button>
           </div>
         </div>
       </div>
     </div>
     <!-- <div class="modal fade" id="viewTransaction" tabindex="-1" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="modalCenterTitle">View Transaction</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
             <div class="row">
               <div class="col mb-3">
                 <label for="nameWithTitle" class="form-label">Name</label>
                 <input type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name" />
               </div>
             </div>
             <div class="row g-2">
               <div class="col mb-0">
                 <label for="emailWithTitle" class="form-label">Email</label>
                 <input type="email" id="emailWithTitle" class="form-control" placeholder="xxxx@xxx.xx" />
               </div>
               <div class="col mb-0">
                 <label for="dobWithTitle" class="form-label">DOB</label>
                 <input type="date" id="dobWithTitle" class="form-control" />
               </div>
             </div>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
               Close
             </button>
             <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#disputeTransaction">
               Dispute
             </button>
           </div>
         </div>
       </div>
     </div> -->
   </div>
 </div>