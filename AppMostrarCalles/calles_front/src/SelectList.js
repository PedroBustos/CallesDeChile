import { useFetch } from "./hooks/useFetch";
import { useAxios } from "./hooks/useAxios";

const SelectList = ({title,url,handleChange}) => {
  // const {data,error,loading} = useFetch(url);
  const data = useAxios(url);

  // if(!data) return null;

  let id = `select-${title}`;
  let label = title.charAt(0).toUpperCase() + title.slice(1);

  let regiones = data.data['regiones'];
  console.log(regiones);
  return (
    <>
      <label htmlFor={id}>{label}</label>
      <select id={id} name={id} onChange={handleChange}>
        <option value="">Elige una {title}</option>
      </select>
    </>
  );
};

export default SelectList;
