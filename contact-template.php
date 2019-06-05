<?php /* Template Name: Contact Us */ ?>
<?php get_header(); ?>
    <main>
        <section class="contact-page">
    
            <?php get_template_part( 'template-parts/contact/contact', 'hero' ); ?>
    
            <div class="contact-page-wrapper">
                <div class="contact-form-wrapper">
                    <div class="contact-form-top">
                        <div class="contact-form-top-1">
                            <h1>Learn More About Supporting Hiinga </h1>
                            <p>
                                To learn more about Hiinga’s mission, investment opportunities, and how you can help fund
                                or support an entrepreneurial business in East Africa, please contact us.
                            </p>
                        </div>
                        <div class="contact-form-top-2">
                            <div class="contact-form-top-2-left">
                                <form id="ev-contact-form" name="ev-contact-form">
                                    <div class="ev-form-col-2">
                                        <div class="ev-form-group">
                                            <label for="c_fname">First Name</label>
                                            <input id="c_fname" type="text" value="" name="c_name" placeholder="Jack" />
                                            <span class="ev-form-error"></span>
                                        </div>
                                        <div class="ev-form-group">
                                            <label for="c_lname">Last Name</label>
                                            <input id="c_lname" type="text" value="" name="c_lname" placeholder="Burke" />
                                            <span class="ev-form-error"></span>
                                        </div>
                                    </div>
                                    <div class="ev-from-col-1">
                                        <div class="ev-form-group">
                                            <label for="c_email">Email Address</label>
                                            <input id="c_email" type="email" value="" name="c_email"
                                                placeholder="EMAIL@EMAIL.COM" />
                                            <span class="ev-form-error"></span>
                                        </div>
                                    </div>
                                    <div class="ev-from-col-1">
                                        <div class="ev-form-group">
                                            <label for="c_phone">Phone Number</label>
                                            <input id="c_phone" type="tel" value="" name="c_phone"
                                                placeholder="000.000.0000" />
                                            <span class="ev-form-error"></span>
                                        </div>
                                    </div>
                                    <div class="ev-from-col-1">
                                        <div class="ev-form-group">
                                            <label for="c_comments">Questions/Comments</label>
                                            <textarea id="c_comments" name="c_comments"></textarea>
                                            <span class="ev-form-error"></span>
                                        </div>
                                    </div>
                                    <div class="ev-from-col-1">
                                        <div class="ev-checkboxes-wrapper">
                                            <div class="ev-form-group">
                                                <input type="checkbox" name="c_information_about" value="investor">Please
                                                send me information on becoming an Impact Investor.
                                            </div>
                                            <div class="ev-form-group">
                                                <input type="checkbox" name="c_information_about" value="fundraiser">Please
                                                contact me about organizing a Hiinga fundraiser.
                                            </div>
                                            <div class="ev-form-group">
                                                <input type="checkbox" name="c_information_about" value="volunteer">Please
                                                contact me about volunteer or mission opportunities with Hiinga.
                                            </div>
                                            <div class="ev-form-group">
                                                <input type="checkbox" name="c_information_about" value="internship">Please
                                                send me information on Hiinga internships.
                                            </div>
                                            <div class="ev-form-group">
                                                <input type="checkbox" name="c_information_about" value="beneficiary">Please
                                                contact me about contributing stock to Hiinga or naming Hiinga a
                                                beneficiary.
                                            </div>
                                        </div>
                                        <span class="ev-form-error"></span>
                                    </div>
                                    <div class="ev-contact-form-button-wrapper">
                                        <button type="submit">Send</button>
                                    </div>
                                </form>
                            </div>
                            <div class="contact-form-top-2-right">
                                EMAIL@EMAIL.COM <br />
                                000.000.0000
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-bottom">
                        <h1>LOOKING TO DONATE?</h1>
                        <div class="contact-form-wrapper-button">
                            <div class="ev-contact-button">
                                <div class="ev-contact-button-caption">IMPACT INVESTORS</div>
                            </div>
                            <div class="ev-contact-button">
                                <div class="ev-contact-button-caption">IMPACT INVESTORS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    </main>
<?php get_footer(); ?>