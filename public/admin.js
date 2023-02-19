
function truncate(str, no_words) {
    return str.split(" ").splice(0, no_words).join(" ");
}

// get value from api
const url = 'http://localhost:8000/api/totalTicekts';
const url2 = 'http://localhost:8000/api/totalTicektsResolved';

fetch(url)
    .then(response => response.json())
    .then(data => {
        console.log(data);
        document.getElementById('totalticekt').innerHTML = data;
    })
    .catch(error => console.log(error));
fetch(url2)
    .then(response => response.json())
    .then(data => {
        console.log(data);
        document.getElementById('ticketresolved').innerHTML = data;
    })
    .catch(error => console.log(error));


const url3 = 'http://localhost:8000/api/totalTicektsUnresolved';

fetch(url3)
    .then(response => response.json())
    .then(data => {
        console.log(data);
        document.getElementById('ticketunresolved').innerHTML = data;
    })
    .catch(error => console.log(error));


const latestTicekt = 'http://localhost:8000/api/latestTicekt';
fetch(latestTicekt)
    .then(response => response.json())
    // trim data to 5

    .then(data => {
        console.log(data);
        // document.getElementById('ticketunresolved').innerHTML = data;

        // append html to tbody
        var html = ''


        data.forEach((item) => {
            html += `<tr style="margin: 5px">
                <td>${item.title}</td>
               
                <td>${truncate(item.description, 4)}</td>

                <td>Pending</td>
                <td><a href="admin/ticket/solve/${item.id}" style="--bs-danger: #4b0ee4;--bs-danger-rgb: 228,14,35;--bs-body-bg: var(--bs-danger);width:300px;  padding: 10px 5px;text-align: center;color: rgb(225,225,225);text-decoration:none;margin:5px;border: 1px solid rgb(35,36,36);border-radius: 5px;--bs-body-font-size: 2rem;background: blue;">View</a></td>
            </tr>`;
        });
        document.getElementById('data_latest_tickets').innerHTML = html;



    })
    .catch(error => console.log(error));
