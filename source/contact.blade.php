---
title: Contact
description: Get in touch with us
---
@extends('_layouts.master')

@section('body')
<div class="flex flex-col lg:flex-row">

    <div class="flex-1">
        <h1>Let's Start a Conversation</h1>
        <p class="mb-8">
            Fill this form with formative information and a formal email will be formed and forwarded to me for a formulated
            response within the fortnight.
        </p>
        <form id="jimform" action="https://www.form-data.com/_functions/submit/9ay1vdav3uerkwj1pcoghl" method="POST">
            <div class="flex min-w-full -mx-3 mb-4">
                <div class="px-3 flex-1">
                    <label for="contact-name" class="block mb-2 text-sm">What is Your Name?*</label>
                    <input id="contact-name" placeholder="Guy Fieri"  name="name" required="required" class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3 text-gray-800">
                </div>
            
                <div class="px-3 flex-1">
                    <label for="contact-email" class="block text-sm mb-2">What is your email address?*</label>
                    <input type="email" id="contact-email" placeholder="stay@home.com" name="email" required="required" class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3 text-gray-800">
                </div>
        
            </div>
            <div class="w-full mb-4">
                <label for="reason" class="block text-sm mb-2">What can I do for you?*</label>
                <select class="block w-full border shadow rounded-lg outline-none mb-2 px-4 pt-4 pb-3 leading-loose text-gray-800" required="required" name="reason" id="reason">
                    <option value="">Select Reason</option>
                    <option value="general">General Inquiry</option>
                    <option value="build">Build me a website</option>
                    <option value="draw">Draw me something</option>
                    <option value="draw">Teach me something</option>
                    <option value="work">Work for me</option>
                    <option value="dad">Can I pet your dog</option>
                    <option value="dad">I'm your real dad</option>
                </select>
            </div>
        
        
            <div class="w-full mb-12"><label for="contact-message"
                class="block text-sm mb-2">Can you give me some details?*</label><textarea id="contact-message" rows="4"
                name="message" placeholder="Spill the beans." required="required"
                class="block w-full border shadow rounded-lg outline-none appearance-none mb-2 px-4 py-3 text-gray-800"></textarea>
            </div>
            <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
            <div class="flex w-full"><button type="submit" class="btn"><span>Submit</span></button></div>
        </form>
        
    </div>
    <div class="w-full lg:pl-32 lg:w-2/5">
        <h2>More Ways to Reach Me</h2>
        <ul class="list-none">
            <li class="mb-4">Call me: <br /><a href="tel:+13143846922">(314) 384-6922‬</a> (Google Voice)</li>
            <li class="mb-4">Email me: <br /><a href="mailto:james.r.courtois@gmail.com">james.r.courtois@gmail.com</a></li>
            <li class="mb-4">Pure chance: <br />Walk around <a target="_blank" href="https://www.google.com/maps/place/St.+Louis,+MO">St. Louis, MO</a> at random</li>
            <li class="mb-4">Telekinesis: <br />AAAAAH GET OUTTA MY HEAD</li>
            
        </ul>
    </div>

</div>

<script>
    function onloadCallback() {
        /* Place your recaptcha rendering code here */
        var form = document.getElementById('jimform');

        form.addEventListener("submit", function (event) {
            if (grecaptcha.getResponse() === '') {
                event.preventDefault();
                alert('Please check the recaptcha box and try submitting again.');
            }
        }, false);
    }
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script>

@stop