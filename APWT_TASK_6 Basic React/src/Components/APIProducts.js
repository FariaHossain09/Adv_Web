// import Header from './Header'
import React, {useState, useEffect} from 'react'
import {Table} from 'react-bootstrap'

function StudentList()
{
      const [data,setData] = useState([]);
       useEffect( ()=>{
         async function fetchMyAPI(){
           let result= await fetch('http://127.0.0.1:8000/api/list');
    //           method:'GET'});
         
           result = await result.json();
          setData(result)
          }
    //       //console.warn("data",data);
    fetchMyAPI()
    
       },[])
      console.warn("data",data);
    return(
        <div>
            {/* <Header/> */}
            <h1>Student list</h1>
            <Table striped bordered hover>
            <thead>
            <tr>
      
      <th>ID</th>
      <th>NAME</th>
      <th> CGPA</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Arifa</td>
      <td>3.00</td>
      
    </tr>
    <tr>
      <td>2</td>
      <td>Ria</td>
      <td>3.22</td>
     
    </tr>

    <tr>
      <td>3</td>
      <td>Faria</td>
      <td>3.22</td>
     
    </tr>
    <tr>
      <td>4</td>
      <td>Liza</td>
      <td>3.7</td>
     
    </tr>
    <tr>
      <td>5</td>
      <td>Toma</td>
      <td>3.66</td>
    </tr>

  
        </tbody>
</Table>
            
        </div>
    )
}
export default StudentList;














