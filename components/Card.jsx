const Comp = (props) => {
    return  <div className="card">
        <h2>{props.title}</h2>
        <p><b>Szerző:</b>{props.author}</p>
        <p><b>Nyelv:</b> {props.language}</p>
        <p><b>Műfaj:</b> {props.category}</p>
        <p><b>Kiadó:</b> {props.publisher}</p>
        <p><b>Megjelenés:</b> {props.release_year}</p>
        <div>
            
            <span className="stock"><b>Raktáron van:</b> {props.quantity} db</span> <br />
            <span className="price"><b>Ár:</b> {props.price} Ft</span>
        </div>
    </div>
}

export default Comp