const set_headline = () => {

    let h1 = document.getElementById('headline');
        h1 = document.querySelector('#headline'); // same as above

    // console.log( h1.innerHTML );

    h1.innerHTML = 'JavaScript functions';

    // let body = document.querySelector('body');
    // console.log( body.innerHTML )

    h1; // the element
    h1.style; // the element's style (another object)
    h1.style.backgroundColor; // the element's style's background-color property
    
    h1.style.backgroundColor = 'red';

}