<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Test</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .form-control {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .loading, .error-message, .sent-message {
            margin: 10px 0;
            padding: 10px;
            border-radius: 4px;
            display: none;
        }
        .loading {
            background-color: #f9f9f9;
        }
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
        }
        .sent-message {
            background-color: #d4edda;
            color: #155724;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Form Test</h1>
        
        <form action="forms/contact.php" method="post" class="php-email-form">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required />
                </div>
                
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required />
                </div>
                
                <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required />
                </div>
                
                <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="4" placeholder="Message" required></textarea>
                </div>
                
                <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                    
                    <button type="submit">Send Message</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('.php-email-form').submit(function(e) {
                e.preventDefault();
                
                var form = $(this);
                var url = form.attr('action');
                var formData = form.serialize();
                
                $('.loading').show();
                $('.error-message').hide();
                $('.sent-message').hide();
                
                $.ajax({
                    type: "POST",
                    url: url,
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        $('.loading').hide();
                        
                        if(response.success) {
                            $('.sent-message').show();
                            form[0].reset(); // Reset the form fields
                        } else {
                            $('.error-message').html(response.message).show();
                        }
                    },
                    error: function(xhr, status, error) {
                        $('.loading').hide();
                        $('.error-message').html("There was an error sending your message. Please try again later.").show();
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>
</html>