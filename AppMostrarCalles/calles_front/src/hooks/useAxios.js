import axios from 'axios';
import {react, useState, useEffect } from 'react';

export const useAxios = (url) => {
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

  return {data};

}
