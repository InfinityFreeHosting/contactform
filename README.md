# Simple Contact Form with PHPMailer

A simple contact form with PHPMailer, reCAPTCHA and Bootstrap.

Use this to provide a simple contact form on your own website, and send the messages with SMTP. Or use this as a basis or example to create your own contact form.

## Getting Started

1. Download the latest version of the contact form: https://github.com/InfinityFreeHosting/contactform/releases
2. Extract the archive on your own computer.
3. Copy the `config.example.php` to `config.php` and edit the required settings.
4. Upload the extracted files to a subdirectory of your hosting account (e.g. `htdocs/contact/`).
5. Navigate to http://your-domain.epizy.com/contact/ and try out the form!

### How to get your SMTP credentials

To be able to send messages with this contact form, you'll need a working SMTP service. InfinityFree does not provide this with free hosting, but you can use third party SMTP services.

A simple, free option to use is Gmail. You can use Gmail to send your messages like so:

1. Sign up for a free Gmail account.
2. Enable Two-Factor Authentication on the Google account: https://myaccount.google.com/signinoptions/two-step-verification
3. Generate an App Specific Password for the account: https://myaccount.google.com/apppasswords
4. In the configuration file, set the SMTP Hostname `smtp.gmail.com`, enter your full Gmail address in the SMTP Username field and enter the App Specific Password in the SMTP Password field.

### How to get your reCAPTCHA credentials

To prevent spammers from being able to abuse your contact form, reCAPTCHA has been integrated by default. reCAPTCHA is a free service from Google which can prevent automated scripts from using your form.

This contact form has been integrated with reCAPTCHA v2 with the Checkbox challenge. To use this, you will need to set up your site in reCAPTCHA like so:

1. Go to the reCAPTCHA admin console: https://www.google.com/recaptcha/admin/create
2. Enter a label you can use to identify your website.
3. Choose the reCAPTCHA type "reCAPTCHA v2" and the version "Checkbox 'I'm not a robot'".
4. Under Domains, enter the domain name of your website.
5. Accept the reCAPTCHA terms and click Send.
