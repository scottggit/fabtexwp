<div class="wizard-step step-2">
    <div class="wizard-title mb-5">
        <h3 class="h1">Shipping Info</h3>
        <div class="filter-input-container">
            <input type="checkbox" name="same-info" id="same-info">
            <label for="same-info">Same as My Info</label>
        </div>
    </div>
    <div class="personal-info pb-4 mb-4 border-dashed border-b-[3px] border-[#D6D6D6]/[.4]">
        <small class="d-block mb-4">PERSONAL INFORMATION</small>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6 mb-4">
                <input type="text" placeholder="Name *" class="form-control" required>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <input type="email" placeholder="Email *" class="form-control" required>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <input type="text" placeholder="Phone *" class="form-control" required>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <input type="text" placeholder="Company *" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="address pb-4 mb-4 border-dashed border-b-[3px] border-[#D6D6D6]/[.4]">
        <small class="d-block mb-4">ADDRESS</small>
        <div class="row justify-content-center">
            <div class="col-sm-6 mb-4">
                <input type="text" placeholder="Address (line 1)*" class="form-control" required>
            </div>
            <div class="col-sm-6 mb-4">
                <input type="text" placeholder="Address (line 2)" class="form-control" required>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <input type="text" placeholder="City*" class="form-control" required>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <input type="text" placeholder="State*" class="form-control" required>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <input type="text" placeholder="Zipcode*" class="form-control" required>
            </div>
        </div>
    </div>
    <textarea class="form-control my-5" placeholder="Other Instructions" cols="30" rows="10"></textarea>

    <div class="step-submit">
        <span class="btn btn-outline-white" data-wizard-step="step-1">BACK</span>
        <span class="btn btn-primary text-white" data-wizard-step="step-3">NEXT</span>
    </div>
</div>