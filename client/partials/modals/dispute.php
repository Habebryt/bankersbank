 <!-- / Transaction Modal -->
 <!-- Dispute Transaction -->
 <div class="col-lg-4 col-md-6">
   <div class="mt-3">
     <!-- Modal -->
     <div class="modal fade" id="disputeTransaction" tabindex="-1" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title">Dispute Transaction</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
             <form id="disputeForm">
               <div class="mb-3">
                 <label for="disputeReason" class="form-label">Reason for Dispute</label>
                 <textarea id="disputeReason" class="form-control" placeholder="Enter reason for dispute" rows="3" required></textarea>
               </div>
               <div class="mb-3">
                 <label for="additionalInfo" class="form-label">Additional Information</label>
                 <textarea id="additionalInfo" class="form-control" placeholder="Additional information" rows="3"></textarea>
               </div>
             </form>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
               Cancel
             </button>
             <button type="button" class="btn btn-primary" onclick="submitDispute()">
               Submit Dispute
             </button>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- / Dispute Transaction Modal -->