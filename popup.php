<div class="modal fade" id="allPagePopup" tabindex="-1" aria-labelledby="allPagePopup" aria-hidden="true"
    data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">
            <div class="modal-body row p-0 pe-2">
                <div class="col-sm-12 col-md-5 col-xl-5 pe-1 modalimgdiv position-relative">
                    <img data-src="./assets/images/Popup.png" class="lazy" height="400px" width="100%" alt="">
                </div>
                <div class="col-sm-12 col-md-7 col-xl-7 modalinputdiv">
                    <div class="d-flex justify-content-between align-items-center pt-3">
                        <h3 class="m-0">Discover More Now!</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="row mt-4 pe-2" action="" method="post">
                        <div class="col-sm-12 col-md-6 col-xl-6 mb-3">
                            <label for="name" class="col-form-label">Name <span>*</span></label>
                            <input type="text" class="form-control" name="name" id="name"  required>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-6 mb-3">
                            <label for="contactno" class="col-form-label">Contact Number <span>*</span></label>
                            <input type="number" class="form-control" name="contactno" id="contactno"
                                oninput="validate_contact(this)" min="6000000000" max="9999999999" required>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-6 mb-3">
                            <label for="email" class="col-form-label">Email ID <span>*</span></label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-6 mb-3">
                            <label for="prevclass" class="col-form-label">Previous Class <span>*</span></label>
                            <select name="prevclass" class="form-select" id="prevclass" required>
                                <option value="" selected disabled>Select Previous Class</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-6 mb-3">
                            <label for="class" class="col-form-label">Class <span>*</span></label>
                            <select name="class" class="form-select" id="class" required>
                                <option value="" selected disabled>Select Class</option>
                                <option value="LKG">LKG</option>
                                <option value="UKG">UKG</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                <option value="V">V</option>
                                <option value="VI">VI</option>
                                <option value="VII">VII</option>
                                <option value="VIII">VIII</option>
                                <option value="IX">IX</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-6 mb-3">
                            <label for="message" class="col-form-label">Message <span>*</span></label>
                            <textarea class="form-control" rows="1" name="message" id="message" required></textarea>
                        </div>
                        <div class="col-12 d-flex justify-content-end align-items-center my-3">
                            <button type="submit" name="popup_form" class="modalbtn">Enquire Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>