
function truncate(str, no_words) {
    return str.split(" ").splice(0, no_words).join(" ");
}
// ajax fetch

// get value from api
const url = 'http://localhost:8000/user/totalTicekts';
const url2 = 'http://localhost:8000/api/totalTicektsResolved';
