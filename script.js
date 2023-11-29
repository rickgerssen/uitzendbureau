function sendMessage() {
    var username = document.getElementById('username').value;
    var message = document.getElementById('message').value;

    if (username !== '' && message !== '') {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'save_message.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onload = function () {
            if (xhr.status === 200) {
                document.getElementById('message').value = '';
                getMessages();
            }
        };

        var data = 'username=' + encodeURIComponent(username) + '&message=' + encodeURIComponent(message);
        xhr.send(data);
    } else {
        alert('Please enter your name and message.');
    }
}

function getMessages() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'get_messages.php', true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            document.getElementById('chat-output').innerHTML = xhr.responseText;
        }
    };

    xhr.send();
}

// Load messages on page load
window.onload = getMessages;
