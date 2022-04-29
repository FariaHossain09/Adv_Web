// import Header from './Header'
import React, {useState, useEffect} from 'react'
import {Table} from 'react-bootstrap'

function StudentList()
{
      const [data,setData] = useState([]);
       useEffect( ()=>{
         async function fetchMyAPI(){
           let result= await fetch('http://127.0.0.1:8000/api/teachers');
    //           method:'GET'});
         
           result = await result.json();
          setData(result)
          }
           //console.warn("data",data);
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
      <th>Name</th>
      <th>Phone</th>
      <th>Password</th>
      <th>Teacher_ID</th>
    </tr>
  </thead>
  <tbody>
    {
      data.map((item)=>
      <tr>
      <td>{item.id}</td>
      <td>{item.name}</td>
      <td>{item.phone}</td>
      <td>{item.password}</td>
      <td>{item.teacherId}</td>
    </tr>
    )
    }
   
  </tbody>
</Table>
            
        </div>
    )
}
export default StudentList;

















































// import React, {useState, useEffect} from "react";
// import axios from "axios";
// import Post from './Post';

// const AllPosts = ()=>{
//     const [posts, setPosts] = useState([]);

//     useEffect(()=>{
//         axios.get("https://jsonplaceholder.typicode.com/todos/")
//         .then(resp=>{
//             console.log(resp.data);
//             setPosts(resp.data);
//         }).catch(err=>{
//             console.log(err);
//         });
//     },[]);

//     return(
//         <div>
//             {/* <table>
//                 <tr>
//                     <th>userId</th>
//                     <th>Title</th>
//                 </tr>
//                     {posts.map(post=>(
//                 <tr key={post.id}>
//                     <td >{post.userId}</td>
//                     <td >{post.title}</td>
//                 </tr>
//                     ))}
//             </table> */}
//             {
//                 posts.map(post=>(
//                     <Post userId={post.userId} title={post.title} key={post.id}></Post>
//                 ))
//             }

                
//         </div>
//     )

// }
// export default AllPosts;