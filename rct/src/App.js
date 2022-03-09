import React from "react";
import {
  BrowserRouter,
  Routes,
  Route,
  Link,
  //Router
} from "react-router-dom";
import Student from "./pages/Student";
import Addstudent from "./pages/Addstudent";
import Editstudent from "./pages/Editstudent";

function App() {

  return (

    <BrowserRouter>
    
      <Routes>
        <Route path="/" element={<Student/>} />
        <Route path="/add-student" element={<Addstudent/>} />
        <Route path="/edit-student/:id" element={<Editstudent/>} />
       
     </Routes>
 
    </BrowserRouter>

 );
}

export default App;