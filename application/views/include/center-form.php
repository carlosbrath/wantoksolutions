<div class="col-md-6 offset-md-3">

<div class="contact-outer-cont">

    <form id="contact-form" method="POST" action="<?=base_url()?>LeadsController/generateLeads" onsubmit="validateForm(event, this, 1)">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <input type="hidden" name="url" value="thank-you">
        <div class="row mb-3">
            <div class="col-md-6 col-12 mobile-margin">
                <div class="form-outline">
                    <input type="text" id="first-name" name="first_name" class="form-control" placeholder="First Name" />
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-outline">
                    <input type="text" id="last-name" name="last_name" class="form-control" placeholder="Last Name" />
                </div>
            </div>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-3">
            <input type="email" id="user-email" name="user_email" class="form-control" placeholder="Email" />
        </div>


        <!-- Number input -->
        <div class="form-outline mb-3">
            <input type="tel" id="user_phone" name="user_phone" class="form-control" placeholder="Phone Number" />
        </div>

        <!-- <div class="form-outline mb-3">
            <input type="text" id="company" class="form-control" placeholder="Company Name" />
        </div> -->

        <div class="form-group row mb-3">

            <div class="col-md-12">

                <select name="type_of_service" class="form-select selectservices select-css">
                        <option value="Web Design & Development">Web Design & Development</option>
                        <option value="SEO Services">SEO Services</option>
                        <option value="Social Media Marketing">Social Media Marketing</option>
                        <option value="PPC Services">PPC Services</option>
                        <option value="App Design & Development">App Design & Development </option>
                        <option value="Other">Other </option>

                </select>

            </div>

        </div>

        <!-- Other Services -->
        <div class="form-outline otherservices mb-3" style="display: none;">
            <input type="text"  name="other_services" class="form-control" placeholder="Other Services" />
        </div>

        <!-- Message input -->
        <div class="form-outline mb-3">
            <textarea name="comments_by_client" class="form-control" id="message-area" rows="4"
                placeholder="Write your message here..."></textarea>
        </div>


        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-2 bg-pink">Get In Touch</button>
    </form>

</div>

</div>