<fieldset class="wizard-fieldset mt-4 @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_eight') show @endif" id="fieldset_eight">
    <h5>8. Facial Image Upload</h5>
    <input type="hidden" name="form_section" value="facial_image_upload" />

    <div class="row">
     
        <div class="col-md-3 col-lg-3"></div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="facial_image " class="text-danger">8.1 Facial Image Upload</label>
                <input name="facial_image" type="file" accept="image/png, image/jpeg, image/jpeg" class="form-control wizard-required" id="facial_image" >
               
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-3 col-lg-3"></div>

       
        <div class="col-md-4 col-lg-4"></div>
        <div class="col-md-4 col-lg-4">
           
            <img id="facial_image_thumbnail"  src="{{asset($facial_image->facial_image ?? 'https://media.istockphoto.com/id/1341046662/vector/picture-profile-icon-human-or-people-sign-and-symbol-for-template-design.jpg?s=612x612&w=0&k=20&c=A7z3OK0fElK3tFntKObma-3a7PyO8_2xxW0jtmjzT78=')}}" alt="..." class="img-thumbnail">
          
        </div>
        <div class="col-md-4 col-lg-4"></div>
     


     

    </div>

  
    <div class="form-group clearfix">
        <a  href="javascript:;" onclick="returnLater('fieldset_eight','consumer_this_is_me')" class="form-wizard-return-btn float-left mr-3">Pause & Return Later</a>

        {{-- <a href="javascript:;" onclick="previousStep('facial_image_upload_bar','protect_cards_bar')" class="form-wizard-previous-btn float-left">Previous</a> --}}
        <a onclick="checkFieldSetFacialImageUpload()" href="javascript:;" class="form-wizard-next-btn  float-right">Save & Continue</a>
    </div>
</fieldset>
