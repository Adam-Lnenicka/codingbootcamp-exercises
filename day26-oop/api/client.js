document.getElementById('load-movies').addEventListener('click', (event) => {
    fetch('http://www.cbp-exercises.test/day26-oop/api/endpoint.php')
    .then(
        (response) => { // get response from the fetch promise
            return response.json(); // parse it as JSON
        }
    )
    .then(
        (parsed_data) => { // get data from the parse promise
            console.log(parsed_data); // do whatever with it

            // empty the list so that we don't keep just adding items
            document.getElementById('movies').innerHTML = '';

            parsed_data.forEach((item) => {
                document.getElementById('movies').innerHTML += `<li>${item}</li>`;
            })
        }
    )

    // a tad shorter code:
    // fetch('http://www.cbp-exercises.test/day26-oop/api/endpoint.php')
    // .then(r => r.json())
    // .then(data => {
    //     // I have data
    // })
})