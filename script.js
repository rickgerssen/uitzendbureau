function sendMessage() {
    var message = document.getElementById('message').value;

    if (message !== '') {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'save_message.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onload = function () {
            if (xhr.status === 200) {
                document.getElementById('message').value = '';
                getMessages();
            }
        };

        var data = 'message=' + encodeURIComponent(message);
        xhr.send(data);
    } else {
        alert('Please enter a message.');
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
window.onload = function () {
    getMessages();
    setInterval(getMessages, 5000); // Refresh every 5 seconds
};
