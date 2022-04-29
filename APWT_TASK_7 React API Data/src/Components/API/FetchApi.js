import React from 'react'

function FetchAPI(){

    function apiGet() {
        fetch('https://jsonplaceholder.typicode.com/posts/1')
            .then((response) => response.json())
            .then((json) => console.log(json))
    }
    return (
        <div>
            List <br/>

            <button onClick={apiGet}> Fetch API</button>

        </div>
    )
}

export default FetchAPI