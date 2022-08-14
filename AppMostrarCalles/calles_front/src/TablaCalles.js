import React, { useState, useEffect} from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import axios from 'axios';

const TablaCalles = ({url,title}) => {
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

  console.log(data);
  return (
    <div>
      <table>
        <tr>
           <th>Calles de {title}</th>
        </tr>
        <tr>
    {data.map((data) => (<td key={data.item_id} id={data.item_id}>{data.name}</td>))}
        </tr>
      </table>
    </div>
  )
}

export default TablaCalles;
