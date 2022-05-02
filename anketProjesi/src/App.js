import React from 'react';
import Homepage from './components/Homepage';
import Navbar from "./components/Navbar";
/*import Slidebar from './components/Sidebar';*/
/*import SignIn from './components/SignIn';*/
import SignUp from './components/SignUp';
//import styles from "./App.css";


function App() {
    return(
        <div>
             <Navbar/>
             <Homepage/>
             <SignUp/>
        </div>
    );
    
}

export default App;