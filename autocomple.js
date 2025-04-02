const createAuntoComplete = ({}) =>{
    // funcion createAutoComple
}

const moviTemplate = (movieDetails) => {
    //Transformar a numeros los strings que llegan de los datos
    const dollars = parseInt(movieDetails.BoxoOffice.replace(/\$\g, '').replace(/,/g, ''))
    console.log(dollars)
    const metascore = parseInt(movieDetails.Metascore)
    const imdbRating = parseFloat(movieDetails.imdbRating)
    const imdbVotes = parseInt(movieDetails.imdbRating)
    console.log(metascore, imdbRating, imdbVotes)
    const awards = movieDetails.Aw
}