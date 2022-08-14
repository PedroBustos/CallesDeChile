import React, { Component } from 'react'
import axios from 'axios';
import { useState, useEffect } from 'react'


const DropdownCustom = ({title,url,handleChange}) => {
  const [data, setData] = useState([]);


  const peticionGetAxios = async () => {
    await axios.get(url)
         .then(response => {
           setData(response.data);
         })
  }

  useEffect(() => {
    peticionGetAxios();
  }, [])

  let id = `select-${title}`;
  let label = title.charAt(0).toUpperCase() + title.slice(1);


   return (
      <div>
        <label htmlFor={id}>{label}</label>
        <select id={id} name={id} onChange={handleChange}>
          <option value="">- Seleccione {title} -</option>
          {data.map((data) => (<option key={data.item_id} id={data.item_id} >{data.name}</option>))}
        </select>
      </div>

  )
}

export default DropdownCustom;
