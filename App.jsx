import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import Card from "./components/Card"
import Layout from "./components/Layout"

function App() {

const [data, setData] = useState(null);

function GetAllData() {
    fetch("http://127.0.0.1:8000/api/")
        .then((response) => response.json())
        .then((json) => setData(json))
        .catch((error) => console.error(error));
}

function WriteJson() {
    return (
        <>
            {data.map((row) =>(
                <Card
                    key = {row.id}
                    title = {row.title}
                    author = {row.author}
                    language = {row.language}
                    category = {row.category}
                    publisher = {row.publisher}
                    release_year = {row.release_year}
                    quantity = {row.quantity}
                    price = {row.price}
                ></Card>

            ))}
        </>
    );
  }

return(
    <>
      {GetAllData()}



        <Layout>
            {data ? <div> {WriteJson()} </div> :<div> Adatok letöltése... </div> }
        </Layout>
    
    </>
)
}
export default App