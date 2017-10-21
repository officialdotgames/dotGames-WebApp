function createErrorMessage(message) {
    var error = document.createElement('div');
    error.class = value;
    var textNode = document.createTextNode(message);
    error.appendChild(textNode);

    return error;
}





var HttpClient = function() {
    this.post = function(url, data, callback) {
        var xhr = new XMLHttpRequest();

        xhr.addEventListener("readystatechange", function () {
            if (this.readyState === 4) {
                callback(this.status, JSON.parse(this.responseText));
            }
        }); 

        xhr.open("POST", url);
        xhr.setRequestHeader("accept", "application/json");
        
        xhr.send(data);
    } 
}


var client = new HttpClient();

function main() { 
    var form = document.getElementById('form-join-party');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        var data = new FormData(form);

        client.post("/api/join", data, function(status_code, response) {
            console.log(status_code);
            /*if(status_code === 200) {
                window.location = "/🔥";
            }
            else 
            {
                var errorMessages = document.getElementById('error-messages');
                var errorMessage = createErrorMessage('Unable to join the party.');
                errorMessages.appendChild(errorMessage);
            }*/

        });
    });
}

window.onload = main;