<fieldset class="wizard-fieldset mt-4" id="fieldset_eight">
    <h5>8. Facial Image Upload</h5>
    <div class="row">
     
        <div class="col-md-3 col-lg-3"></div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="facial_image " class="text-danger">8.1 Facial Image Upload</label>
                <input name="facial_image" type="file" class="form-control wizard-required" id="facial_image" required>
               
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-3 col-lg-3"></div>

     

    </div>

  
    <div class="form-group clearfix">
        <a href="javascript:;" onclick="previousStep('facial_image_upload_bar','protect_cards_bar')" class="form-wizard-previous-btn float-left">Previous</a>
        <a onclick="checkFieldSetFacialImageUpload()" href="javascript:;" class="form-wizard-next-btn  float-right">Next</a>
    </div>
</fieldset>
