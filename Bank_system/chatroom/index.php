<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UT ChatRooM</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
</head>
<body>
    <div class="centeralised">
        <div class="chathistory" id="msg">
        </div>
   
        <div class="chatbox">
            <form action="" method="POST">
                <textarea class="txtarea" id="message" name="message" ></textarea>
            </form>   
        </div>
    </div>
    
    <script>
        $(document).ready(function(){
            loadChat();
        });
        $('#message').keyup(function(e){

            var message = $(this).val();
                          
           if(e.which == 13){
            $.post('handlers/ajax.php?action=SendMessage&message='+message, function(response){
                loadChat();
                $('#message').val('');
             });
           }
          
        });

        function loadChat(){
            $.post('handlers/ajax.php?action=getChat', function(response){
                $('.chathistory').html(response);
             });
        }

        setInterval(function(){
            loadChat();
        }, 1000);


        const messages = document.getElementById('msg');

      

        function getMessages() {
         // Prior to getting your messages.
        shouldScroll = messages.scrollTop + messages.clientHeight === messages.scrollHeight;
        /*
        * Get your messages, we'll just simulate it by appending a new one syncronously.
        */
        
        // After getting your messages.
        if (!shouldScroll) {
            scrollToBottom();
        }
        }

        function scrollToBottom() {
        messages.scrollTop = messages.scrollHeight;
        }

        scrollToBottom();

        setInterval(getMessages, 100);
        $("#msg").animate({ scrollTop: 20000000 }, "slow");
    </script>
</body>
</html>