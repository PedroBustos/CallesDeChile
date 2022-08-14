import './App.css';
import React, { useState, useEffect} from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import Dropdown from 'react-bootstrap/Dropdown';
import DropdownButton from 'react-bootstrap/DropdownButton';
import SelectList from "./SelectList";
import 'bootstrap/dist/css/bootstrap.min.css';
import axios from 'axios';
import DropdownCustom from "./dropdown";
import TablaCalles from "./TablaCalles";

function App() {
  const [region, setRegion] = useState("");
  const [provincia, setProvincia] = useState("");
  const [ciudad, setCiudad] = useState("");


  return (
    <html>
      <h1>Calles de Chile</h1>
      <DropdownCustom title="region" url="http://localhost:8000/api/regiones/get_region" handleChange={(e) => {setRegion(e.target.value);}}/>
      {region && (
      <DropdownCustom title="provincia" url={`http://localhost:8000/api/provincias/${region}`} handleChange={(e) => {setProvincia(e.target.value);}}/>
      )}
      {provincia &&(
      <DropdownCustom title="ciudad" url={`http://localhost:8000/api/ciudades/${provincia}`} handleChange={(e) => {setCiudad(e.target.value);}}/>
      )}
      <br/>
      {ciudad && (
      <TablaCalles title={ciudad} url={`http://localhost:8000/api/calles/${ciudad}`}/>
      )}
    </html>

      );
}


const SelectAnidados = () => {
  const [region, setRegion] = useState("");
  const [provincia, setProvincia] = useState("");
  const [ciudad, setCiudad] = useState("");

  return (
    <html>
      <h2>Calles de Chile</h2>
      <SelectList title="region" url="http://localhost:8000/api/regiones/get_region" handleChange={(e) => {setRegion(e.target.value);}} />

      {region &&(
        <SelectList title="provincia" url="http://localhost:8000/api/provincias/get_provincia" handleChange={(e) => {setProvincia(e.target.value);}} />
      )}

      {provincia &&(
        <SelectList title="ciudad" url="http://localhost:8000/api/ciudades/get_ciudad" handleChange={(e) => {setCiudad(e.target.value);}} />
      )}
      <pre>
        <code>
          {region} - {provincia} - {ciudad}
        </code>
      </pre>
    </html>
  );
};

export default App;
