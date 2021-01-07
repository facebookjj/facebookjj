<!-- Add User Booking  -->
<div class="modal fade" id="addBooking" tabindex="-1" role="dialog" aria-labelledby="addBookingButton" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="POST" action="booking_add.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="servicepro-name" class="col-form-label text-dark">Selected service provider</label>
            <input type="text" class="form-control" id="servicepro-name" placeholder="Mae Abrencio" disabled>
          </div>
          <div class="form-group">
            <label for="selected-service" class="col-form-label text-dark">Selected service</label>
            <input type="text" class="form-control" id="selected-service" placeholder="Manicure and Pedicure" disabled>
          </div>
          <div class="form-group">
            <label for="booking-rate" class="col-form-label text-dark">Charge rate (₱)</label>
            <input type="text" class="form-control" id="booking-rate" placeholder="120" disabled>
          </div>
          <div class="form-group" data-provide="datepicker">
            <label for="booking-date" class="col-form-label text-dark">Choose Date *</label>
            <input type="date" class="form-control datepicker" id="booking-date" data-date-format="mm/dd/yyyy">
          </div>
          <div class="form-group">
            <label for="timepicker" class="col-form-label text-dark">Select time of arrival *</label>
            <input type="time" class="form-control" id="timepicker" data-provide="timepicker">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label text-dark">Instruction for service provider</label>
            <textarea class="form-control" id="message-text" placeholder="Write something.."></textarea>
          </div>
          <div class="form-group">
           <label for="user_address" class="col-form-label text-dark">Your location or (Delivery Address) *</label>
           <input type="text" name="address" id="user_address" class="form-control" value="2B lot 4, Brgy. Cogon">
          </div>
        </form>
      </div>
      <div class="modal-footer border-top-0 pt-0 justify-content-between">
        <button type="button" class="btn mt-0 btn btn-success mx-auto w-100 py-4 text-uppercase font-weight-bold">Confirm Booking</button>
      </div>
    </div>
  </div>
</div>