import logo from './logo.svg';
import './App.css';
// import GetList from './Components/GetList';
import { useEffect, useState } from 'react';

function App() {


  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          Welcome to ReactJS ADV WEB.
        </p>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
        </a>
      </header>
      {/* <GetList />
      {/* <div id='student-list'></div> */}
      </div>
   
  );
}

export default App;
